<?php

namespace Database\Seeders;

use App\Models\Episode;
use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    public function run(): void
    {
        Episode::factory()->create();
    }
}
