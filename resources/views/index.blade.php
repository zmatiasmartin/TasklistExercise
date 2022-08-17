

@extends('generales.master') 
@section('content')
<div class="row">
  <div class=" col-md-15" > 
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8">
        <title>Tareas Ipsum</title>
      </head>
      <body>
        <div class="row row-cols-1 row-cols-md-2 g-4 p-2">

          @foreach ($tareas as $index => $number)
          <div class="col">
            <div class="card" id="orden{{$index}}">
              <div class="card-body">
                <h5> Task #  </h5><h5 class="card-title">{{$tareas[$index][0]}}</h5>
                <p class="card-text"> {{$tareas[$index][1]}}</p> 
              </div> 
            </div>
          </div>
          @endforeach
        </div>  

      </body>
    </html>
  </div>


</div> 
  @include('modalTask')

@stop 