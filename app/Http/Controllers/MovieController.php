<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return Movie::with('mov_id', 'mov_title')->get();
    }
    public function getMovieById()
    {
        return $movie->load('mov_id', 'mov_title');
    }
    public function store(Request $request)
    {
        $request->validate([
        'mov_id' => 'required|string|max:255',
        'mov_title' => 'required|string',
        ]);
            $movie = Movie::create([
            'mov_id' => auth()->id(),
            'mov_title' => $request->mov_title,
            'mov_year' => $request->mov_year,
            'mov_time' => $request->mov_time,
            'mov_lang' => $request->mov_lang,
            'mov_dt_rel' => $request->mov_dt_rel,
            'mov_rel_country' => $request->mov_rel_country,
            ]);
                return response()->json($movie, 201);
    }
    public function update(Request $request, Movie $movie)
    {
        $this->authorize('update', $movie);
            $request->validate([
            'mov_id' => 'sometimes|string|max:255',
            'mov_title' => 'sometimes|string',
            ]);
                $movie->update($request->only('mov_id', 'mov_title'));
                    return response()->json($movie);
    }
    public function destroy(Post $movie)
    {
        $this->authorize('delete', $movie);
            $movie->delete();
                return response()->json(null, 204);
    }
}