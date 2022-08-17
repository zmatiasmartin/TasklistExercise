<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--// CSS--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!--// JS  --> 
    <script type="text/javascript" src="{{asset ('../resources/js/jquery-3.6.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset ('../resources/js/tareas.js') }}"></script>
  </head>
  <body>
    @section('sidebar')
    <div class=" list-group-item list-group-item-info" >
      <h3> <center>FULLSTACK (Node.js + ReactJS) # 1: Tasklist exercise </center></h3>
    </div>   

    @show

    <div class="container">
      @yield('content')
    </div>   
  </body>
</html>


