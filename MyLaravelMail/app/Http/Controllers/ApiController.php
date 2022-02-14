<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Videogame;

class ApiController extends Controller
{
    public function getApp() {

        $videos = Videogame::all();

        return json_encode($videos);
    }
}
