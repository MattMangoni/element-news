<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNewsRequest;
use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Response;

class CreateNewsController extends Controller
{
    public function create(Request $request): Response
    {
        return inertia('News/CreateNews');
    }

    public function store(CreateNewsRequest $request): RedirectResponse
    {
        News::create($request->only('user_id', 'title', 'body'));

        return redirect()->route('news.create');
    }
}
