@extends('layouts.layout_general')
@section('content')
<h1>COLA INDEX PAGE <i class="fas fa-toolbox    "></i></h1>
<table class="table tabla-cola">
    <thead>
        <tr>
            <th>Cola</th>
            <th><i class="fas fa-eye    "></i></th>
            <th><i class="fas fa-file    "></i></th>
            <th><i class="fas fa-window-close    "></i></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row">Lorem ipsum dolor sit</td>
            <td><a name="" id="" class="btn btn-success" href="#" role="button">Ver</a></td>
            <td><a name="" id="" class="btn btn-primary" href="#" role="button">Archivar</a></td>
            <td><a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a></td>
        </tr>
        <tr>
            <td scope="row">Lorem ipsum dolor sit</td>
            <td>Lorem ipsum dolor sit</td>
            <td>Lorem ipsum dolor sit</td>
            <td>Lorem ipsum dolor sit</td>
        </tr>
    </tbody>
</table>
<a name="" id="" class="btn btn-primary" href="/queues/create" role="button">NUEVA COLA</a>
@endsection