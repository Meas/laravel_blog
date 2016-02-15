@extends ('app')
@section ('content')
	<h1> Write an article</h1>
	<hr/>
	<div style="margin:20px">
		<form method="POST" action="{{ url('/articles') }}">
			@include ('articles.form', ['submitButtonText' => 'Add Article', 'body' => '', 'naslov' => ''])
		</form>
	</div>

@include ('errors.list') <!-- moze i errors/list isto -->


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