@extends('layouts.layout_general')
@section('content')
<link rel="stylesheet" href="/css/login.css">
<div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
  
      <!-- Icon -->
      <div class="fadeIn first">
          <br>
        <i class="fas fa-user    "></i>
      </div>
  
      <!-- Login Form -->
      <form>
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
        <input type="submit" class="fadeIn fourth" value="Iniciar sesión">
      </form>
  
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">¿Olvidó su contraseña?</a>
      </div>
  
    </div>
  </div>
@endsection