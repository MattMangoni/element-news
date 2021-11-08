<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'scheduled_for' => today()->addWeek(),
            'created_at' => now()->subSeconds(rand(0, 34)),
        ];
    }

    public function past(): Factory
    {
        return $this->state(fn () => [
            'scheduled_for' => today()->subWeek()
        ]);
    }
}
