<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class ActorController extends Controller
{
    public function getMovieByActorId()
    {
        return Movie::with('act_id', 'mov_title')->get();
    }
}
