<?php

namespace Modules\Categories\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Nicolaslopezj\Searchable\SearchableTrait;

class Category extends \Rinvex\Categories\Models\Category
{
    use HasFactory, SearchableTrait;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Categories\Database\factories\CategoryFactory::new();
    }

    protected $casts = [
        'online' => 'boolean',
    ];


    protected $searchable = [
        'columns' => [
            'categories.id' => 10,
            'categories.name' => 10,
            'categories.slug' => 10,
        ],
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeChildrenFor($query, string $slug)
    {
        return $query->where('slug', '<>', $slug);
    }

    public function scopePublished($query)
    {
        return $query->where('online', true);
    }
}
