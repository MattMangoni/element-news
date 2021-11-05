<?php

namespace App\Http\Controllers\Episodes;

use App\Http\Controllers\Controller;
use App\Models\Episode;
use Inertia\Response;

class LatestEpisodeController extends Controller
{
    public function __invoke(): Response
    {
        return inertia('Episodes/LatestEpisode', [
            'episode' => Episode::with('news.newser')->latest()->first()
        ]);
    }
}
