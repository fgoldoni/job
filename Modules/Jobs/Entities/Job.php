<?php
namespace Modules\Jobs\Entities;

use App\Models\User;
use Database\Factories\JobFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Companies\Entities\Company;
use Nicolaslopezj\Searchable\SearchableTrait;
use Rinvex\Categories\Traits\Categorizable;

class Job extends Model
{
    use HasFactory, Categorizable, SearchableTrait;

    protected $guarded = [];

    protected static function newFactory()
    {
        return JobFactory::new();
    }

    protected $searchable = [
        'columns' => [
            'jobs.id' => 10,
            'jobs.name' => 10,
            'companies.id' => 10,
            'companies.name' => 10,
        ],

        'joins' => [
            'companies' => ['companies.id', 'jobs.company_id'],
        ],
    ];

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

    public function scopePublished($query)
    {
        return $query->where('online', true);
    }
}
