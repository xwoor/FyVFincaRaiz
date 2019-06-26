@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
<div class="container">
    <h1>Home</h1><br>
    <hr>
    <table class="table table-striped custab mt-4 text-center">
        <thead>
            <tr>
                <th>Img</th>
                <th>Titulo</th>
                <th>Estado</th>
                <th>Tipo</th>
                <th>Editar</th>
            </tr>
        </thead>
                @foreach ($datos as $dato)
                <tr>
                    <td><img height="30px" class="rounded" src="upload/{{ $dato->img_1}}"></td>
                    <td>{{ $dato->titulo }}</td>
                    <td>{{ $dato->estatus }}</td>
                    <td>{{ $dato->tipo }}</td>
                    <td>
                    <a class='btn btn-success btn-xs' href="/admin/{{ $dato->id }}">
                          </span> Editar
                    </a>
                    </td>
                </tr>
                @endforeach
    </table>

</div> 
    @endsection