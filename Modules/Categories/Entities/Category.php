<?php

namespace Modules\Categories\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends \Rinvex\Categories\Models\Category
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Categories\Database\factories\CategoryFactory::new();
    }

    protected $casts = [
        'online' => 'boolean',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
