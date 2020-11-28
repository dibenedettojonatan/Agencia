<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Laravel</title>
</head>
<body>
<main class="container">

<h1>Vista de prueba</h1>
@if($nombre == 'Jonatan')
<p class="alert alert-info">
    {{$nombre}}
</p>
@else
<p class="alert alert-danger">
    Usuario desconocido
</p>
@endif

<ul class="list-group col-6 mx-auto"> 
@foreach($marcas as $marca)               
    <li class="list-group-item list-group-action"> 
    nombre de la marca  {{$marca}}              

    </li>  
    @endforeach         
 </ul>

</main>  
</body>
</html>