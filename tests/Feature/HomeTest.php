<?php

use Inertia\Testing\Assert;
use function Pest\Laravel\get;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('loads the home page', function () {
    get('/')
        ->assertStatus(200)
        ->assertInertia(fn (Assert $page) => $page->component('HomePage'));
});
