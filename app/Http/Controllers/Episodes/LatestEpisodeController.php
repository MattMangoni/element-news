<?php

namespace App\Http\Controllers\Episodes;

use App\Data\EpisodeData;
use App\Http\Controllers\Controller;
use App\Models\Episode;
use Inertia\Response;

class LatestEpisodeController extends Controller
{
    public function __invoke(): Response
    {
        $episode = EpisodeData::from(Episode::with('news.newser')->latest()->first());

        return inertia('Episodes/LatestEpisode', [
            'episode' => $episode
        ]);
    }
}
