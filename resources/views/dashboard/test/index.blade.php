@extends('layout.master')

@section('content')

    {{--  Con Include podemos llamar a otras vistas y utilizarlas dentro de la que estamos  --}}
@include('fragment.subview')
@include('fragment.subview')






{{$name}}


@forelse ($posts as $a)
<div class= "box item">
    <p> *{{$a}} </p>

</div>

@empty
    NO hay Data
    
@endforelse
    
@endsection