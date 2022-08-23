<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'role' => mt_rand(1, 3),
            'fname' => $this->faker->name,
            'lname' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->numberBetween($min = 000000000000, 99999999999),
            'dob' => $this->faker->date(),
            'birth_place' => $this,
            'gender' => $this,
            'faker' => $this,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
