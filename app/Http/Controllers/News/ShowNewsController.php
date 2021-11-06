<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Response;

class ShowNewsController extends Controller
{
    public function __invoke(Request $request): Response
    {
        return inertia('News/Show');
    }
}
