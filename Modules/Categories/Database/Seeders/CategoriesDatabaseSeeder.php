<?php

namespace Modules\Categories\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Rinvex\Categories\Models\Category;

class CategoriesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Category::create([
            'name'     => 'Car & Traffic'
        ]);

        Category::create([
            'name'     => 'Building & Renovation'
        ]);

        Category::create([
            'name'     => 'Education & Science'
        ]);

        Category::create([
            'name'     => 'Computers & Electronics'
        ]);

        Category::create([
            'name'     => 'Authorities & Associations'
        ]);

        Category::create([
            'name'     => 'Services'
        ]);

        Category::create([
            'name'     => 'Shopping & Ordering'
        ]);

        Category::create([
            'name'     => 'Hotels & Gastronomie'
        ]);

        Category::create([
            'name'     => 'Travel'
        ]);

        Category::create([
            'name'     => 'Law'
        ]);

        Category::create([
            'name'     => 'Health & Wellness'
        ]);

        Category::create([
            'name'     => 'Nature & Environment'
        ]);

        Category::create([
            'name'     => 'Advertising & Media'
        ]);

        Category::create([
            'name'     => 'Living & Furnishing'
        ]);

        Category::create([
            'name'     => 'Living & Furnishing'
        ]);
    }
}
