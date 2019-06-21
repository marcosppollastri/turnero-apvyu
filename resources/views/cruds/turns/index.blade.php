@extends('layouts.layout_general')
@section('content')
<h1>Turnos INDEX PAGE <i class="fas fa-toolbox    "></i></h1>
<table class="table tabla-cola">
    <thead>
        <tr>
            <th>Turno Nº</th>
            <th>Persona</th>
            <th>Razón</th>
            <th><i class="fas fa-eye    "></i></th>
            <th><i class="fas fa-file    "></i></th>
            <th><i class="fas fa-window-close    "></i></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row">1</td>
            <td>Juan Perez</td>
            <td>Inscripción</td>
            <td><a name="" id="" class="btn btn-success" href="#" role="button">Ver</a></td>
            <td><a name="" id="" class="btn btn-primary" href="#" role="button">Archivar</a></td>
            <td><a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a></td>
        </tr>
        <tr>
                <td scope="row">2</td>
                <td>Sebastian Gimenez</td>
                <td>Consulta general</td>
                <td><a name="" id="" class="btn btn-success" href="#" role="button">Ver</a></td>
                <td><a name="" id="" class="btn btn-primary" href="#" role="button">Archivar</a></td>
                <td><a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a></td>
        </tr>
    </tbody>
</table>
<br>
<br>
<div class="float-right">
        <a name="" id="" class="btn btn-success" href="/turns/create" role="button"><i class="fas fa-plus    "></i> Nuevo Turno</a>
</div>

@endsection