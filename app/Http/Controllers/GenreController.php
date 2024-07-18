<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class GenreController extends Controller
{
    public function getMovieByGenreId()
    {
        return Movie::with('gen_id', 'mov_title')->get();
    }
}
