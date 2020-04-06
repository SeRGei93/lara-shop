<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MetaTag;

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
        MetaTag::setTags(['title' => 'Пользователь']);
        return view('home');
    }
}
