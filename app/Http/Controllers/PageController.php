<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function inmobiliaria(){
        return view('pages.inmobiliaria');
    }
    public function construccion(){
        return view('pages.construccion');
    }
    public function arquitectura(){
        return view('pages.arquitectura');
    }
}
