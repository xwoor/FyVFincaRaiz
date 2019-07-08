<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Infopage;
use Session;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Admin::all(); 
        return view('admin.home', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $files = $request->file('img');
        // recorremos cada archivo y lo subimos individualmente
        foreach($files as $file) {
            $filename =  time()."_".$file->getClientOriginalName();
            $upload_success = $file->move(public_path().'/upload', $filename );
            $data[] = $filename;
        }
        $admin = new Admin();
        $admin->titulo = $request->input('titulo');
        $admin->precio_venta = $request->input('precio_venta');
        $admin->precio_arriendo = $request->input('precio_arriendo');
        $admin->contenido = $request->input('contenido');
        $admin->img_1 = $data[0];
        $admin->img_2 = $data[1];
        $admin->img_3 = $data[2];
        $admin->img_4 = $data[3];
        $admin->img_5 = $data[4];
        $admin->img_6 = $data[5];
        $admin->img_7 = $data[6];
        $admin->img_8 = $data[7];
        $admin->requisito_1 = $request->input('requisito_1');
        $admin->requisito_2 = $request->input('requisito_2');
        $admin->requisito_3 = $request->input('requisito_3');
        $admin->requisito_4 = $request->input('requisito_4');
        $admin->requisito_5 = $request->input('requisito_5');
        $admin->requisito_6 = $request->input('requisito_6');
        $admin->requisito_7 = $request->input('requisito_7');
        $admin->estatus = $request->input('estatus');
        $admin->tipo = $request->input('tipo');
        $admin->save();
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        if($request->get('direccion')){
            $info = Infopage::find($id);
            $info->direccion = $request->get('direccion');
            $info->celular = $request->get('celular');
            $info->mapa = $request->get('mapa');
            $info->link_fb = $request->get('link_fb');
            $info->link_ig = $request->get('link_ig');
            $info->link_tw = $request->get('link_tw');
            $info->link_wt = $request->get('link_wt');
            $info->link_yt = $request->get('link_yt');
            $info->link_pse = $request->get('link_pse');
            $info->save();
            Session::flash('mensaje','Actualizado Correctamente');
            return redirect('/informacion');
        }

        $admin = Admin::find($id);
        $admin->titulo = $request->get('titulo');
        $admin->precio_venta = $request->get('precio_venta');
        $admin->precio_arriendo = $request->get('precio_arriendo');
        $admin->contenido = $request->get('contenido');
        $admin->requisito_1 = $request->get('requisito_1');
        $admin->requisito_2 = $request->get('requisito_2');
        $admin->requisito_3 = $request->get('requisito_3');
        $admin->requisito_4 = $request->get('requisito_4');
        $admin->requisito_5 = $request->get('requisito_5');
        $admin->requisito_6 = $request->get('requisito_6');
        $admin->requisito_7 = $request->get('requisito_7');
        $admin->estatus = $request->get('estatus');
        $admin->tipo = $request->get('tipo');
        $admin->save();
        Session::flash('mensaje','Actualizado Correctamente');
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
