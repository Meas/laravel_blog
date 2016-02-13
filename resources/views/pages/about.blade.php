@extends('app')

@section('content')

<h1> About</h1>

@if (count($people))
<h3>People:</h3>

<ul>
	@foreach ($people as $person) 
		<li> {!! $person !!} </li>
	@endforeach
</ul>
@endif
<br/>
<p> text text text text</p>

@stop