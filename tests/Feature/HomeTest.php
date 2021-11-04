<?php

use function Pest\Laravel\get;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('loads the home page correctly', function () {
    get('/')->assertStatus(200);
});
