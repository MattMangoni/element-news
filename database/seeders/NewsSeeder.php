<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        News::factory()->create();
        News::factory(2)->draft()->create();
        News::factory(2)->isEmpty()->create();
    }
}
