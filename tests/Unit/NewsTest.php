<?php

use App\Models\News;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;

uses(RefreshDatabase::class);

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

    News::create([
        'user_id' => auth()->id(),
        'title' => 'Random Title',
        'body' => 'Random body'
    ]);

    expect(News::latest()->first()->isDraft)->toBe(true);
});
