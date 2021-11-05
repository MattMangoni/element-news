<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->unnamed()->create();
        User::factory(2)->create();
        User::factory(2)->basic()->create();
    }
}
