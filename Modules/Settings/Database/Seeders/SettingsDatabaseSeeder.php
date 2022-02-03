<?php

namespace Modules\Settings\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Settings\Entities\Setting;

class SettingsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Setting::factory()->create(['name' => 'logo', 'value' => 'logo']);
        Setting::factory()->create(['name' => 'favicon', 'value' => 'favicon']);
        Setting::factory()->create(['name' => 'title', 'value' => 'title']);
        Setting::factory()->create(['name' => 'description', 'value' => 'description']);
        Setting::factory()->create(['name' => 'phone', 'value' => 'phone']);
        Setting::factory()->create(['name' => 'email', 'value' => 'email']);
    }
}
