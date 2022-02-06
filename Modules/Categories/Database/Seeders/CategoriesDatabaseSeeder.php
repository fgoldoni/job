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

        Category::create(
            [
                'name'     => 'Engineering',
                'user_id'  => 1
            ]
        );

        Category::create(
            [
                'name'     => 'Financial Services',
                'user_id'  => 1
            ]
        );

        Category::create(
            [
                'name'     => 'Banking',
                'user_id'  => 1
            ]
        );

        Category::create(
            [
                'name'     => 'Security & Safety',
                'user_id'  => 1
            ]
        );

        Category::create(
            [
                'name'     => 'Training',
                'user_id'  => 1
            ]
        );

        Category::create(
            [
                'name'     => 'Public Service',
                'user_id'  => 1
            ]
        );

        Category::create(
            [
                'name'     => 'Real Estate',
                'user_id'  => 1
            ]
        );

        Category::create(
            [
                'name'     => 'Independent & Freelance',
                'user_id'  => 1
            ]
        );

        Category::create(
            [
                'name'     => 'IT & Telecoms',
                'user_id'  => 1
            ]
        );

        Category::create(
            [
                'name'     => 'Marketing & Communication',
                'user_id'  => 1
            ]
        );

        Category::create(
            [
                'name'     => 'Babysitting & Nanny Work',
                'user_id'  => 1
            ]
        );

        Category::create(
            [
                'name'     => 'Human Resources',
                'user_id'  => 1
            ]
        );

        Category::create(
            [
                'name'     => 'Medical & Healthcare',
                'user_id'  => 1
            ]
        );

        Category::create(
            [
                'name'     => 'Tourism & Restaurants',
                'user_id'  => 1
            ]
        );

        Category::create(
            [
                'name'     => 'Transportation & Logistics',
                'user_id'  => 1
            ]
        );
    }
}
