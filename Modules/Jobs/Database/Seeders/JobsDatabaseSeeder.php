<?php
namespace Modules\Jobs\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Jobs\Entities\Job;

class JobsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        for ($i = 0; $i <= 50; $i++) {
            $job = Job::factory()->create();
            $job->attachCategories(rand(2, 10));
        }
    }
}
