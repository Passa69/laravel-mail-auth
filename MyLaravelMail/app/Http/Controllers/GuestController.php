<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Videogame;

class GuestController extends Controller
{
    public function home() {

        $videos = Videogame::orderBy('created_at', 'desc') -> get();

        return view('pages.home', compact('videos'));
    }

    public function delete($id) {

        $video = Videogame::findOrFail($id);

        $video -> delete();

        return redirect() -> route('home');
    }
}
