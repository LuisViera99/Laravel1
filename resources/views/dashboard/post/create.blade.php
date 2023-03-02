 @extends('dashboard.layout')

 @section('content')
 <h1> Crear Post </h1>

 @include('dashboard/fragment/_errors-form')
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

       <label for="">Categoria</label>

       <select name="category_id" >
   
           @foreach ($categories as $title => $id)
           <option value="{{$id}}">{{$title}}</option>
               
           @endforeach


       </select>
       <label for="">Posteado</label>
       <select name="posted" >
           <option value="not">NO</option>
           <option value="yes">SI </option>


       </select>
  
  
       <br>
       <br>
  
  
       <button type="submit">Eviar</button>

   </form>
 @endsection