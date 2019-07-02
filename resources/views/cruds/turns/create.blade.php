@extends('layouts.layout_general')
@section('content')
    <form action="/turns" method="POST">
        <div class="form-group">
          <label for="reason">Razon</label>
          <input type="text" name="reason" id="" class="form-control" placeholder="Razon" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="pearson"></label>
          <select class="form-control" name="pearson" id="">
            @foreach ($people as $pearson)
              <option>{{$pearson->id}}</option>
            @endforeach
            
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection