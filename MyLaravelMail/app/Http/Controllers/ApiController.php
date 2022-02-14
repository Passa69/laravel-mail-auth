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

    public function deleteEvent($id) {

        $video = Videogame::findOrFail($id);

        $video -> delete();

        return json_encode($video);
    }
}
