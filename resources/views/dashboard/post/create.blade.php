<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post </title>
</head>
<body>
    <h1> Crear Post </h1>

    <form action="{{route('post.store')}}" method="post">

        @csrf
        <label for="">Titulo</label>
        <input type="text" name="title">
        <br>
        <br>
        <label for="">Slug</label>
        <input type="text" name="slug">
        <br>
        <br>
        <label for="">Contenido</label>
        <textarea name="content"></textarea>
        <br>
        <br>
        <label for="">Descripcion</label>
        <textarea name="description"></textarea>
        <br>
        <br>
        <button type="submit">Eviar</button>

    </form>
</body>
</html>