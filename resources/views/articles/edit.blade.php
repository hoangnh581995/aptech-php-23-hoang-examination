<form action="/articles/{{$article->title}}" method="post">
<input type="hidden" name="_method" value="PATCH">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<input type="text" name="title" id="title" value="{{$article->title}}">
<input type="email" name="description" id="description" value="{{$article->description}}">
<input type="password" name="content" id="content" value="{{$article->content}}">
<button type="submit">Edit</button>
</form>