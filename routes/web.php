<?php

use App\Http\Controllers\News\LatestEpisodeController;
use App\Http\Controllers\Pages\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/latest', LatestEpisodeController::class);
});
