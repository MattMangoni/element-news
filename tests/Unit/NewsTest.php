<?php

use App\Models\Episode;
use App\Models\News;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;

uses(RefreshDatabase::class);

test('A news belongs to a newser and an episode', function () {
    logAsNewser();

    $news = News::factory()->attachedToEpisode()->create();

    expect($news->newser)->toBeInstanceOf(User::class);
    expect($news->episode)->toBeInstanceOf(Episode::class);
});

test('Slugs for news are generated automatically', function () {
    logAsNewser();

    News::create([
        'user_id' => auth()->id(),
        'title' => $title = 'Random Title',
        'body' => 'Random body'
    ]);

    expect(News::latest()->first()->slug)->toBe(Str::slug($title));
});

test('Fresh news are considered drafts', function () {
    logAsNewser();

    $news = News::create([
        'user_id' => auth()->id(),
        'title' => 'Random Title',
        'body' => 'Random body'
    ]);

    expect($news->isDraft)->toBe(true);
});

test('A news can be successfully approved', function () {
    logAsNewser();

    $episode = Episode::factory()->create();

    $news = News::create([
        'user_id' => auth()->id(),
        'title' => 'Random Title',
        'body' => 'Random body'
    ]);

    $news->approve(
        episodeId: $episode->id,
        isDiscussion: true,
        publishDate: now()->subSecond()
    );

    expect($news->isDraft)->toBe(false);
    expect($news->episode_id)->toBe($episode->id);
});
