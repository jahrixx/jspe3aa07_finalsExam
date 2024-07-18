<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class DirectorController extends Controller
{
    public function getMovieByDirectorId()
    {
        return Movie::with('dir_id', 'mov_title')->get();
    }
}
