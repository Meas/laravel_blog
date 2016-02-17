
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<b>Title:</b><br>
			<input type="text" name="title" id='title' value='{{$naslov}}'><br><br>
			<b>Body:</b><br>
			<textarea name="body" style="height:400px;width:1080px;" id='body'>{{$body}}</textarea><br><br>
			<b>Published on:</b><br>
			<input style="width:1080px;" type="date" name="published_at" id="published_at"><br><br>
			@foreach ($tags as $tag)
			<input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->name }}<br>
			@endforeach
			<input style="width:1080px;background-color: lightblue;border:none;color:white;font-size:20px;font-family:Arial Black, Gadget, serif;" type="submit" value="{{$submitButtonText}}">