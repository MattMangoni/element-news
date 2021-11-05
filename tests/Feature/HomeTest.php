<?php

use Inertia\Testing\Assert;
use function Pest\Laravel\get;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('loads the home page correctly', function () {
    get('/')->assertStatus(200);
});

it('loads the /inertia page', function () {
    get('/home')
        ->assertStatus(200)
        ->assertInertia(fn (Assert $page) => $page->component('HomePage'));
});
