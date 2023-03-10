@csrf
<label for="">Titulo</label>
<input type="text" name="title" value="{{ old("title", $post->title) }}">
<br>
<br>
<label for="">Slug</label>
<input type="text" name="slug"  value="{{ old("slug", $post->slug) }}">
<br>

<br>
<label for="">Contenido</label>
<textarea name="content">{{ old("content", $post->content) }}</textarea>
<br>
<br>
<label for="">Descripcion</label>
<textarea name="description">{{ old("description", $post->description) }}</textarea>

<br>
<br>

<label for="">Categoria</label>

<select name="category_id" >

    @foreach ($categories as $title => $id)
    <option {{ old("category_id", $post->category_id) == $id ? "selected" : " "}} value="{{$id}}">{{$title}}</option>
        
    @endforeach


</select>
<label for="">Posteado</label>
<select name="posted" >
    <option{{ old("posted", $post->posted) == "not" ? "selected" : " " }}  value="not">NO</option>
    <option{{ old("posted", $post->posted) == "yes" ? "selected" : " " }} value="yes">SI </option>


</select>


<br>
<br>


<button type="submit">Eviar</button>