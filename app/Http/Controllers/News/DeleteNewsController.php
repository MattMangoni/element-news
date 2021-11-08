<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Response;

class DeleteNewsController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        return redirect()->back();
    }
}
