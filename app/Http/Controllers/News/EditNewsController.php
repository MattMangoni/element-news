<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Response;

class EditNewsController extends Controller
{
    public function edit(News $news): Response
    {
        return inertia('News/EditNews');
    }

    public function update(Request $request): RedirectResponse
    {
        return redirect()->back();
    }
}
