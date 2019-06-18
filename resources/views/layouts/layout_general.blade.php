<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Turnero - APVyU</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    

</head>
<body>
    <!--Header-->
  @include('layouts.dashboard_header')
  <!--close-header-->
    
  
  <!--sidebar-menu-->
    {{-- @include('layouts.dashboard_sidebar') --}}
  <!--sidebar-menu-->
  
  
  <!--main-container-part-->
      <div class="container">
            @yield('content')
      </div>
        
      
  <!--end-main-container-part-->
  
  
  <!--Footer-part-->
    @include('layouts.dashboard_footer')
    
  <!--end-Footer-part-->
</body>
</html>