<?php

namespace App\Http\Controllers\Episodes;

use App\Http\Controllers\Controller;
use Inertia\Response;

class LatestEpisodeController extends Controller
{
    public function __invoke(): Response
    {
        // get latest episode

        return inertia('LatestEpisode');
    }
}
