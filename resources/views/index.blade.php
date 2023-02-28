<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{ $name }}
    {{ $edad }}
    {!! $html !!}

   {{--  Condicional If en Blade   --}}
    @if ($name !== "Luis")
        Es True
        <br>
    @else 
        No es TRUE 
    @endif


{{--  Ciclo For en BLADE   --}}
    @for ($i = 1; $i <=10; $i++)
    <div class= "box item">
    5 x {{$i}} = {{5 * $i}}
   
@endfor


{{--  Foreach Sirve para recorrer un Array  --}}
@foreach ($array as $a)
<div class= "box item">
    <p> {{$a}} </p>
    
@endforeach

<hr>

@forelse ($array as $a)
<p> *{{$a}} </p>
@empty
    NO hay Data
    
@endforelse

    
</body>
</html>
