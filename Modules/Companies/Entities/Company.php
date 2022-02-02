<?php

namespace Modules\Companies\Entities;

use App\Models\User;
use Database\Factories\CompanyFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Khsing\World\Models\Country;
use Modules\Jobs\Entities\Job;
use Nicolaslopezj\Searchable\SearchableTrait;

class Company extends Model
{
    use HasFactory;

    use SearchableTrait;

    protected $guarded = [];

    protected $appends = [
        'logo_url'
    ];

    protected $casts = [
        'online' => 'boolean',
    ];

    protected static function newFactory()
    {
        return CompanyFactory::new();
    }

    protected $searchable = [
        'columns' => [
            'companies.id' => 10,
            'companies.name' => 10,
            'users.name' => 10,
            'world_countries.name' => 10,
        ],
        'joins' => [
            'users' => ['users.id','companies.world_country_id'],
            'world_countries' => ['world_countries.id','companies.world_country_id'],
        ],
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class, 'world_country_id', 'id');
    }

    /**
     * Get the URL to the user's profile photo.
     *
     * @return string
     */
    public function getLogoUrlAttribute()
    {
        return $this->logo
            ? Storage::disk('logos')->url($this->logo)
            : $this->defaultLogoUrl();
    }


    protected function defaultLogoUrl()
    {
        return 'https://ui-avatars.com/api/?name='.urlencode($this->name).'&color=7F9CF5&background=EBF4FF';
    }

    /**
     * get the wishes for a Whitelabel.
     */
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
