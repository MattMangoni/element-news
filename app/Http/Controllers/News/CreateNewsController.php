<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Response;

class CreateNewsController extends Controller
{
    public function create(Request $request): Response
    {
        return inertia('News/CreateNews');
    }

    public function store(Request $request): RedirectResponse
    {
        return redirect()->back();
    }
}
