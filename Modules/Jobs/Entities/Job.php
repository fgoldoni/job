<?php

namespace Modules\Jobs\Entities;

use App\Models\User;
use Database\Factories\JobFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Companies\Entities\Company;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return JobFactory::new();
    }

    /**
     * Wishes belongsTo with User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Wishes belongsTo with Company.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
