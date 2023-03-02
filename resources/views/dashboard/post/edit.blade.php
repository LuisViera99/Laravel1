 @extends('dashboard.layout')

 @section('content')
 <h1> Actualizar Post: {{$post->title }} </h1>

 @include('dashboard/fragment/_errors-form')
   <form action="{{route('post.update',$post->id)}}" method="post">

       @csrf

        @method("PUT")

       <label for="">Titulo</label>
       <input type="text" name="title" value ="{{$post->title}}">
       <br>
       <br>
       <label for="">Slug</label>
       <input type="text" name="slug" value ="{{$post->slug}}">
       <br>
      
       <br>
       <label for="">Contenido</label>
       <textarea name="content">{{$post->content}}</textarea>
       <br>
       <br>
       <label for="">Descripcion</label>
       <textarea name="description">{{$post->description}}</textarea>
       
       <br>
       <br>

       <label for="">Categoria</label>

       <select name="category_id" >
   
           @foreach ($categories as $title => $id)
           <option {{ $post->category_id == $id ? 'selected' : ''}} value="{{$id}}">{{$title}}</option>
               
           @endforeach


        </select>
        <label for="">Posteado</label>
        <select name="posted" >
           <option {{ $post->posted== "not" ? 'selected' : ''}} value="yes">SI </option>
           <option {{ $post->posted == "yes" ? 'selected' : ''}}  value="not">NO</option>


       </select>
  
  
       <br>
       <br>
  
  
       <button type="submit">Eviar</button>

   </form>
 @endsection