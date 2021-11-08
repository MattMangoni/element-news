<?php

namespace App\Data;

use App\Models\News;
use Carbon\Carbon;
use Spatie\LaravelData\Data;

class NewsData extends  Data
{
    public function __construct(
        public string $title,
        public string|null $body,
        public string $slug,
        public bool $isDiscussion,
        public string $source,
        public Carbon|null $publishedAt,
        public NewserData|null $newser,
    )
    {}

    public static function fromModel(News $news): self
    {
        return new self(
            title: $news->title,
            body: $news->body,
            slug: $news->slug,
            isDiscussion: $news->is_discussion,
            source: $news->source,
            publishedAt: $news->published_at,
            newser: NewserData::from($news->newser)
        );
    }
}
