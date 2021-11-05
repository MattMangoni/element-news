<?php

use App\Models\Episode;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Inertia\Testing\Assert;
use function Pest\Laravel\get;

uses(RefreshDatabase::class);

it('blocks the latest episode page with auth middleware', function () {
    get('/latest')->assertRedirect(route('login'));
});

it('blocks access to the latest episode page to non-newsers', function () {
    /** @noinspection PhpParamsInspection */
    $this->actingAs(User::factory()->basic()->create());

    get('/latest')->assertStatus(403);
});

it('shows the latest episode page to newsers', function () {
    /** @noinspection PhpParamsInspection */
    $this->actingAs(User::factory()->create());
    $episode = Episode::factory()->create();

    get('/latest')->assertStatus(200)->assertInertia(fn (Assert $page) => $page
        ->component('Episodes/LatestEpisode')
        ->hasAll(['episode.news', 'episode.scheduledFor'])
        ->where('episode.scheduledFor', $episode->scheduled_for->format('d/m/Y'))
    );
});
