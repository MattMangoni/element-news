<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
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

it('allows access to the latest episode page to newsers and above', function () {
    /** @noinspection PhpParamsInspection */
    $this->actingAs(User::factory()->create());

    get('/latest')->assertStatus(200);
});
