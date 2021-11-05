<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Episode;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $title = $this->faker->sentence(3),
            'slug' => Str::slug($title),
            'body' => $this->faker->paragraphs(2, true),
            'is_discussion' => false,
            'source' => $this->faker->url(),
            'user_id' => User::factory(),
            'episode_id' => Episode::factory(),
            'published_at' => now()->subMinute()
        ];
    }

    public function discussable(): Factory
    {
        return $this->state(fn () => [
            'is_discussion' => true,
        ]);
    }

    public function draft(): Factory
    {
        return $this->state(fn () => [
            'published_at' => null,
        ]);
    }

    public function isEmpty(): Factory
    {
        return $this->state(fn () => [
            'body' => null,
            'published_at' => null,
        ]);
    }
}
