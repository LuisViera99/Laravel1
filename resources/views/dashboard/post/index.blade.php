@extends('dashboard/layout')

@section('content')

    <a href="{{ route("post.create") }} ">Crear</a>

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
            <td>
                <a href="{{ route("post.edit",$p) }} ">Editar</a>

                <a href="{{ route("post.show",$p) }} ">Ver</a>


                <form action="{{route("post.destroy",$p) }}" method="post">
                    @method("DELETE")
                    @csrf
                        <button type="submit">Eliminar</button>


                </form>



            </td>
           

        </tr>
        @endforeach

    </tbody>
</table>


{{$posts-> links()}}



@endsection