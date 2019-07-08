<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galery;
use App\Infopage;
use Session;

class GaleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datos = Galery::all(); 
        return view('admin.galeria', compact('datos'));
    }

    public function create()
    {
    }


    public function store(Request $request)
    {
        
    }
    public function show($id)
    {

    }
    
    public function edit($id)
    {
        $files = $request->file('galery');
        // recorremos cada archivo y lo subimos individualmente
        foreach($files as $file) {
            $filename =  time()."_".$file->getClientOriginalName();
            $upload_success = $file->move(public_path().'/galeria', $filename );
            $data[] = $filename;
        }
        $galery = new Galery();

        $galery->img_1 = $data[0];
        $galery->img_2 = $data[1];
        $galery->img_3 = $data[2];
        $galery->img_4 = $data[3];
        $galery->img_5 = $data[4];
        $galery->img_6 = $data[5];
        $galery->img_7 = $data[6];
        $galery->img_8 = $data[7];
        $galery->save();
        return redirect('/galeria');
    }

   
    public function update(Request $request, $id)
    {
        $files = $request->file('galery');
        // recorremos cada archivo y lo subimos individualmente
        foreach($files as $file) {
            $filename =  time()."_".$file->getClientOriginalName();
            $upload_success = $file->move(public_path().'/publicimg_galery', $filename );
            $data[] = $filename;
        }
        $galery = Galery::find($id);

        $galery->galery_1 = $data[0];
        $galery->galery_2 = $data[1];
        $galery->galery_3 = $data[2];
        $galery->galery_4 = $data[3];
        $galery->galery_5 = $data[4];
        $galery->galery_6 = $data[5];
        $galery->galery_7 = $data[6];
        $galery->galery_8 = $data[7];
       
        $galery->save();
        Session::flash('mensaje','Actualizado Correctamente');
        return redirect('/galeria');
    }


    public function destroy($id)
    {
        //
    }
}
