@extends('layouts.layout_general')
@section('content')
<div class="container-fluid">
        <div class="row aling-items-center">
                <div class="col-sm-12 col-lg-4"></div>
                <div class="col-sm-12 col-lg-4">
                        <div class="card">
                                <form action="/queues" method="post">    
                                    {{ csrf_field() }}      
                                    <div class="card-body">
                                        <h4 class="card-title">Crear nueva cola</h4>
                                        <p class="card-text"></p>
                                        
                                        <div class="form-group">
                                          <label for=""></label>
                                          <input type="hidden" name="" id="" class="form-control" aria-describedby="helpId" value="create">
                                          <small id="helpId" class="text-muted">Para poder crear nuevos turnos, primero debe crear una cola.</small>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                        <button type="submit" class="btn btn-success">Nueva cola</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4"></div>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                </div>
                <div class="col-sm-12 col-lg-4"></div>
        </div>
</div>


@endsection