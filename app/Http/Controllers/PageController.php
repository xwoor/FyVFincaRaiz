<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Mail;
use Session;
use Redirect;
use App\Admin;
use App\Infopage;
use App\Galery;

class PageController extends Controller
{   
    public function index(){
        $info = Infopage::all();
        $datos = Admin::all(); 
        return view('pages.index',  compact('datos', 'info'));
    }
    public function inmobiliaria(){
        $info = Infopage::all();
        $datos = Admin::all(); 
        return view('pages.inmobiliaria', compact('datos', 'info'));
    }
    public function construccion(){
        $info = Infopage::all();
        $datos = Admin::all(); 
        $galerias = Galery::all(); 
        return view('pages.construccion',compact('datos', 'info','galerias'));
    }
    public function arquitectura(){
        $info = Infopage::all();
        $datos = Admin::all(); 
        return view('pages.arquitectura', compact('datos', 'info'));
    }
    public function contacto(){
        $info = Infopage::all();
        $datos = Admin::all(); 
        return view('pages.contacto', compact('datos', 'info'));
    }
    public function mail(Request $request){
        
        Mail::send('emails.contact', $request->all(), function($mensaje){
            $mensaje->subject('Correo de Contacto');
            $mensaje->to('marioosorio714@gmail.com');
        });
        Session::flash('mensaje','Email enviado exitosamente ');
        return Redirect::to('/contacto');
    }
}
