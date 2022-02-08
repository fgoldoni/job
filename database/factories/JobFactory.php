<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Jobs\Entities\Job;

class JobFactory extends Factory
{
    protected $model = Job::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->jobTitle,
            'content' => $this->faker->sentence,
            'online' => $this->faker->boolean,
            'user_id' => $this->faker->numberBetween(1, 10),
            'company_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
