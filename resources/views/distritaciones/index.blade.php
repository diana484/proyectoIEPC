@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Distritaciones Local Del Estado de Chiapas</div>

                <div class="card-body">
                    <div class="row justify-content-end pb-2">
                    <a href="#" class="btn btn-success">Nuevo Distrito</a>
                    </div>
                    <table class="table">
                        <thead>
                            <th>Clave Distrito</th>
                            <th>Cabecera Distrital</th>
                            <th>Clave Municipio</th>
                            <th>Municipio</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach ($distritos as $distrito)
                                <tr>
                                <td>{{ $distrito->clave_distrito}}</td>
                                <td>{{ $distrito->cabecera_distrital}}</td>
                                <td>{{ $distrito->clave_municipio}}</td>
                                <td>{{ $distrito->municipio}}</td>
                                <td>
                                    <a href="#" class="btn btn-primary">Editar</a>
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection