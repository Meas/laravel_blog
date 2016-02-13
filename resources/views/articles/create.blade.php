@extends ('app')
@section ('content')
	<h1> Write an article</h1>
	<hr/>
	<div style="margin:20px">
		<form method="POST" action="{{ url('/articles') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<b>Title:</b><br>
			<input type="text" name="title" id='title'><br><br>
			<b>Body:</b><br>
			<textarea name="body" rows="20" cols="150" id='body'></textarea><br><br>
			<b>Published at:</b><br>
			<input type="date" name="published_at" id="published_at">
			<input type="submit" value="submit">
		</form>
	</div>
	<div class="form group">
@if ($errors->any() )
	<ul class="alert alert-danger">
	@foreach ($errors->all() as $error)
		<li> {{ $error }} </li>
	@endforeach
	</ul>
@endif
 


<script> 
var d = new Date();
      month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

	document.getElementById('published_at').value = [year, month, day].join('-'); 
</script>
@stop