@if ($errors->any() )
	<ul class="alert alert-danger" style="margin:20px; width:1080px">
	@foreach ($errors->all() as $error)
		<li> {{ $error }} </li>
	@endforeach
	</ul>
@endif