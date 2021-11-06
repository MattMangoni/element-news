<?php

use App\Http\Controllers\Episodes\LatestEpisodeController;
use App\Http\Controllers\News\ShowNewsController;
use App\Http\Controllers\Pages\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::middleware(['auth', 'newser'])->group(function () {
    Route::get('/latest', LatestEpisodeController::class)->name('latest-episode');

    Route::prefix('/news')->as('news.')->group(function () {
        Route::get('/{news:slug}', ShowNewsController::class)->name('show');
    });
});

require __DIR__.'/auth.php';
