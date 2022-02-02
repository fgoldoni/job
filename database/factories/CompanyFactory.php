<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Companies\Entities\Company;

class CompanyFactory extends Factory
{
    protected $model = Company::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'content' => $this->faker->sentence,
            'online' => $this->faker->boolean,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'user_id' => $this->faker->numberBetween(1, 10),
            'world_country_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
