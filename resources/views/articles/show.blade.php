 @extends ('layouts\app')
 @section('content')
<div class="container">
    <h1>{{ $article->title}} </h1>
    <article>
         {{ $article->body }}
    </article><br>
    @unless($article->tags->isEmpty())
    <h4>Tags:</h4>
    <ul>
    @foreach($article->tags as $tag)
        <li> {{ $tag->name }}</li>
    @endforeach
    </ul>
    @endunless
</div>
@endsection
                  
@section ('put_edit_li')
@if ('http://localhost:7777'.$_SERVER['REQUEST_URI'] == url('/articles', $article->id))
    <li><a href="{{ url('/articles/edit', $article->id) }}">Edit</a></li>
@endif
@endsection

