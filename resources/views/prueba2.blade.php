<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Laravel</title>
</head>
<body>
<maim class="container">
<h1>Vista de prueba</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, cupiditate.</p>
@php

$nombre = 'jonatan';
$num = 15;
@endphp
tu nombre es :{{$nombre}}

<ul>
@for($i=1; $i<$num; $i++)
 <li>Numero {{$i}}</li>
@endfor
</ul>


</maim>
    
</body>
</html>