<?php

namespace App\Http\Controllers;
use App\Infopage;
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
        return view('home');
    }
    public function agregar()
    {
        return view('admin.agregar');
    }
    public function informacion()
    {
        $info = Infopage::all(); 
        return view('admin.informacion', compact('info'));
    }
}
