@extends('layouts\app')
@section('content')
<h1 style='margin:10px;'>Articles</h1>
<hr>
@foreach ($articles as $article)
	<article style='margin:20px;'>
		<h2> <a href="{{ url('/articles',$article->id) }}">{{ $article->title }} </a></h2>
		<div class="body"> {{ $article->body }} </div>

	</article>
@endforeach
@stop