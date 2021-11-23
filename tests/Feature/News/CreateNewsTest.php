<?php

use App\Models\News;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Validation\ValidationException;
use Inertia\Testing\Assert;
use function Pest\Laravel\get;
use function Pest\Laravel\post;

uses(RefreshDatabase::class);

it('blocks guests from accessing the news creation page', function () {
    get('/news/create')->assertStatus(302);
});

it('blocks access to the news creation page to non-newsers', function () {
    logAsSimpleUser();
    get('/news/create')->assertStatus(403);
});

it('shows the news creation page to newsers', function () {
    logAsNewser();

    get('/news/create')
        ->assertStatus(200)
        ->assertInertia(fn (Assert $page) => $page->component('News/CreateNews'));
});

it('makes sure both title and body are provided before creating the news', function () {
    logAsNewser();

    $this->withoutExceptionHandling()->expectException(ValidationException::class);

    post('/news/create', [
        'user_id' => auth()->id(),
        'title' => 'Random news',
        // missing 'body'
    ]);
});

it('lets the newsers submit the news', function () {
    logAsNewser();

    post('/news/create', [
        'user_id' => auth()->id(),
        'title' => 'Random news',
        'body' => 'The body a random news'
    ]);

    expect(News::count())->toBeOne();
});
