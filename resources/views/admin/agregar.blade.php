@extends('layouts.admin')

@section('title', 'Agregar')

@section('content')
<div class="container">
        <div class="row">
                <form action="/admin"  method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group col-md-4">
                      <label for="">Titulo del proyecto</label>
                      <input type="text" name="titulo"  class="form-control" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="">Precio venta</label>
                      <input type="text" name="precio_venta"  class="form-control" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="">Precio Arriendo</label>
                      <input type="text" name="precio_arriendo"  class="form-control" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Contenido</label>
                        <textarea class="form-control" name="contenido" rows="4"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Imagenes</label>
                        <input type="file" class="form-control-file" name="img[]" multiple required>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="">Tipo de Producto</label>
                      <select class="form-control" name="tipo">
                          <option name="inmobiliaria">inmobiliario</option>
                          <option name="construccion">construccion</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="">Estado de Producto</label>
                    <select class="form-control" name="estatus">
                        <option name="activo">Activo</option>
                        <option name="inactivo">Inactivo</option>
                    </select>
                    </div>
                    <h2 class="text-center mt-4">Requisitos</h2>

                    <div class="form-group col-md-3">
                            <label for="">Requisito 1</label>
                            <input type="text" name="requisito_1"  class="form-control" required>
                    </div>
                    <div class="form-group col-md-3">
                            <label for="">Requisito 2</label>
                            <input type="text" name="requisito_2"  class="form-control" required>
                    </div>
                    <div class="form-group col-md-3">
                            <label for="">Requisito 3</label>
                            <input type="text" name="requisito_3"  class="form-control" required>
                    </div>
                    <div class="form-group col-md-3">
                            <label for="">Requisito 4</label>
                            <input type="text" name="requisito_4"  class="form-control" required>
                    </div>
                    <div class="form-group col-md-3">
                            <label for="">Requisito 5</label>
                            <input type="text" name="requisito_5"  class="form-control" required>
                    </div>
                    <div class="form-group col-md-3">
                            <label for="">Requisito 6</label>
                            <input type="text" name="requisito_6"  class="form-control" required>
                    </div>
                    <div class="form-group col-md-3">
                            <label for="">Requisito 7</label>
                            <input type="text" name="requisito_7"  class="form-control" required>
                    </div>
                    
                </div>
                    <button type="submit" class="btn btn-primary">Agregar Producto</button>
                </form>
            </div>
</div> 
    @endsection