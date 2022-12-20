<?php

namespace App\Http\Controllers\Api;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class StoreLinkController extends \App\Http\Controllers\Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // Log::debug(print_r($request, true));

        // $validated = $request->validated();

        $validated = $request->validate([
            'url' => 'required|url|max:2048',
            'title' => 'required|max:255',
            'tags' => 'array',
        ]);

        $validated['user_id'] = Auth::id();

        ray($validated);

        // TODO: scrape the web

        // ray($request->url);

        $link = Link::create($validated);

        return response()->json($link, 201);
    }
}
