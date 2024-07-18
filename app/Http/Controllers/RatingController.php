<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class RatingController extends Controller
{
    public function getMovieByRatingId()
    {
        return Movie::with('rev_id', 'mov_title')->get();
    }
}

