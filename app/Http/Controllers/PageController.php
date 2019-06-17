<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Mail;
use Session;
use Redirect;

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
    public function contacto(){
        return view('pages.contacto');
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
