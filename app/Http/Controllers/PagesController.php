<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Laravel n7"; // variable a passer à la vue
        // return view('pages.index', compact('title')); // on utilise la fonction compact pour le faire
        return view('pages.index')->with('title', $title); // meme chose que precedement

    }

    public function about(){
        $title = "About us";
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
