@foreach($articles as $article)
<h1><a href="/articles/{{$article->title}}">{{$article->title}}</a></h1>
<form action="/articles/{{$article->title}}" method="post">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
     <button type="submit">Xoa</button>
</form>
@endforeach
