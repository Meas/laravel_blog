		
			 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/css/select2.min.css" rel="stylesheet" />
      <script src="http://code.jquery.com/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/js/select2.min.js"></script>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<b>Title:</b><br>
			<input type="text" class="form-control" name="title" id='title' value='{{$naslov}}'><br>
			<b>Body:</b><br>
			<textarea class="form-control" name="body" style="height:200px;" id='body'>{{$body}}</textarea><br>
			<b>Published on:</b>
			<input class="form-control" type="date" name="published_at" id="published_at"><br>
		
			<b>Tags:</b>
			<select class="form-control" name="tags[]" id="tags2" multiple="multiple">
				@foreach ($tags as $tag)
				<?php $provjera=NULL;?>
					@unless ($article=='false')
						@foreach($article->tags as $Atag)
							@if ($tag->id == $Atag->id)
								<?php $provjera='selected="selected"';?>
							@endif
						@endforeach
					@endunless
				<option value="{{ $tag->id }}" {{ $provjera }}> {{$tag->name}}</option>
				@endforeach
			</select>

				<br><br>
			<input class="btn btn-primary form-control" type="submit" value="{{$submitButtonText}}">
		

		
				<script>
					$('#tags2').select2({
						placeholder: 'Choose a tag'
					});
				</script>
