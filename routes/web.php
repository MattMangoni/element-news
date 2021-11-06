<?php

use App\Http\Controllers\Episodes\LatestEpisodeController;
use App\Http\Controllers\News\CreateNewsController;
use App\Http\Controllers\News\DeleteNewsController;
use App\Http\Controllers\News\EditNewsController;
use App\Http\Controllers\News\ShowNewsController;
use App\Http\Controllers\Pages\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::middleware(['auth', 'newser'])->group(function () {
    Route::get('/latest', LatestEpisodeController::class)->name('latest-episode');

    Route::prefix('/news')->as('news.')->group(function () {
        Route::get('/{news:slug}', ShowNewsController::class)->name('show');
        Route::get('/create', [CreateNewsController::class, 'create'])->name('create');
        Route::post('/create', [CreateNewsController::class, 'store'])->name('store');
        Route::get('/{news:slug}/edit', [EditNewsController::class, 'edit'])->name('edit');
        Route::patch('/{news:slug}', [EditNewsController::class, 'update'])->name('update');
        Route::delete('/{news:slug}', DeleteNewsController::class)->name('delete');
    });
});

require __DIR__.'/auth.php';
