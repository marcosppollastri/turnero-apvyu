@extends('layouts.layout_general')
@section('content')
    <form action="/people" method="POST">
      {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Nombre</label>
          <input type="text" name="name" id="" class="form-control" placeholder="Nombre" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="surname">Apellido</label>
            <input type="text" name="surname" id="" class="form-control" placeholder="Apellido" aria-describedby="helpId">
          </div>
        
        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="number" name="dni" id="" class="form-control" placeholder="Dni" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="birth_date">Fecha de nacimiento</label>
            <input type="date" name="birth_date" id="" class="form-control" placeholder="Fecha de nacimiento" aria-describedby="helpId">
          </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection