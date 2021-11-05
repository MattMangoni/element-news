<?php /** @noinspection ALL */

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'username' => $this->faker->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'roles' => ["Newser"],
            'remember_token' => Str::random(10),
        ];
    }

    public function unnamed(): Factory
    {
        return $this->state(fn () => [
            'first_name' => null,
            'last_name' => null,
        ]);
    }

    public function basic(): Factory
    {
        return $this->state(fn () => [
            'roles' => ["Basic"]
        ]);
    }
}
