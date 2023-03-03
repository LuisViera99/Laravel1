@csrf

<label for="">Titulo</label>
<input type="text" name="title" value="{{ old("title", $category->title) }}">
<br>
<br>
<label for="">Slug</label>
<input type="text" name="slug"  value="{{ old("slug", $category->slug) }}">
<br>
<button type="submit">Eviar</button>