<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $home_video = \App\HomeVideo::find(1);
        $news =  \App\News::latest()->take(6)->get();
        return view('home', [
            'name' => 'home',
            'showPagesHero' => 0,
            'news' => $news,
            'yvlink' => $home_video,

            ]);
    }
}
