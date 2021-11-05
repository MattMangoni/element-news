<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'scheduled_for' => now()->addWeek()
        ];
    }

    public function past(): Factory
    {
        return $this->state(fn () => [
            'scheduled_for' => now()->subWeek()
        ]);
    }
}
