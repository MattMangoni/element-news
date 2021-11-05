<?php

namespace App\Data;

use App\Models\Episode;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class EpisodeData extends Data
{
    public function __construct(
        public string $scheduledFor,
        /** @var NewsData[] */
        public DataCollection $news,
    ) {}

    public static function fromModel(Episode $episode): self
    {
        return new self(
            scheduledFor: $episode->scheduled_for->format('d/m/Y'),
            news: NewsData::collection($episode->news)
        );
    }
}
