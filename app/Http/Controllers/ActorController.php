<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
    public function index() {
        $attori = Actor::all();
        dd($attori);
    }
}
