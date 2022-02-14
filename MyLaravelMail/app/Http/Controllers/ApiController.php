<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Videogame;
use App\Mail\VideoDeleteMail;

class ApiController extends Controller
{
    public function getApp() {

        $videos = Videogame::all();

        return json_encode($videos);
    }

    public function deleteEvent($id) {

        $video = Videogame::findOrFail($id);

        $video -> delete();

        Mail::to('test@test.com') -> send(new VideoDeleteMail($video));

        return json_encode($video);
    }
}
