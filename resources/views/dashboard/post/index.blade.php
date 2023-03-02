@extends('dashboard.layout')

@section('content')

    <table>
        <tr>
            <th>Titulo</th>
            <th>Categoria</th>
            <th>Posted</th>
            <th>Acciones</th>
           

        </tr>

    


    <tbody>
        @foreach ($posts as $p)
        <tr>
            <td>{{$p->title}}</td>
            <td>Categoria</td>
            <td>{{$p->posted}}</td>
            <td>Acciones</td>
           

        </tr>
        @endforeach

    </tbody>
</table>
@endsection