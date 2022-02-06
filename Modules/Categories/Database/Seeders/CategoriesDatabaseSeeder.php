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

        $parent = Category::create(
            [
                'name'     => 'Area',
                'user_id'  => 1
            ]
        );

        $parent->children()->create(
            [
                'name'     => 'Engineering',
                'user_id'  => 1
            ]
        );

        $parent->children()->create(
            [
                'name'     => 'Financial Services',
                'user_id'  => 1
            ]
        );

        $parent->children()->create(
            [
                'name'     => 'Banking',
                'user_id'  => 1
            ]
        );

        $parent->children()->create(
            [
                'name'     => 'Security & Safety',
                'user_id'  => 1
            ]
        );

        $parent->children()->create(
            [
                'name'     => 'Training',
                'user_id'  => 1
            ]
        );

        $parent->children()->create(
            [
                'name'     => 'Public Service',
                'user_id'  => 1
            ]
        );

        $parent->children()->create(
            [
                'name'     => 'Real Estate',
                'user_id'  => 1
            ]
        );

        $parent->children()->create(
            [
                'name'     => 'Independent & Freelance',
                'user_id'  => 1
            ]
        );

        $parent->children()->create(
            [
                'name'     => 'IT & Telecoms',
                'user_id'  => 1
            ]
        );

        $parent->children()->create(
            [
                'name'     => 'Marketing & Communication',
                'user_id'  => 1
            ]
        );

        $parent->children()->create(
            [
                'name'     => 'Babysitting & Nanny Work',
                'user_id'  => 1
            ]
        );

        $parent->children()->create(
            [
                'name'     => 'Human Resources',
                'user_id'  => 1
            ]
        );

        $parent->children()->create(
            [
                'name'     => 'Medical & Healthcare',
                'user_id'  => 1
            ]
        );

        $parent->children()->create(
            [
                'name'     => 'Tourism & Restaurants',
                'user_id'  => 1
            ]
        );

        $parent->children()->create(
            [
                'name'     => 'Transportation & Logistics',
                'user_id'  => 1
            ]
        );
    }
}
