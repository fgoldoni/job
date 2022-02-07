<?php
namespace App\Models;

use App\Http\Traits\HasAvatar;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Lab404\Impersonate\Models\Impersonate;
use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;
use Nicolaslopezj\Searchable\SearchableTrait;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasAvatar, SearchableTrait, Impersonate, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $searchable = [
        'columns' => [
            'users.id' => 10,
            'users.name' => 10,
            'users.email' => 10,
        ]
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'avatar_url',
        'is_verified',
    ];

    const STATUSES = [
        'active' => 'Active',
        'inactive' => 'Inactive',
    ];

    protected static function boot()
    {
        parent::boot();

        self::updated(function ($subject) {
            if (array_key_exists('email', $subject->getDirty())) {
                $subject->email_verified_at = null;
                if ($subject instanceof MustVerifyEmail) {
                    $subject->sendEmailVerificationNotification();
                }
            }
        });
    }

    /**
     * Get the URL to the user's avatar photo.
     *
     * @return string
     */
    public function getIsVerifiedAttribute()
    {
        return !is_null($this->email_verified_at);
    }
}
