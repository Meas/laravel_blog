		
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<b>Title:</b><br>
			<input type="text" class="form-control" name="title" id='title' value='{{$naslov}}'><br>
			<b>Body:</b><br>
			<textarea class="form-control" name="body" style="height:200px;" id='body'>{{$body}}</textarea><br>
			<b>Published on:</b>
			<input class="form-control" type="date" name="published_at" id="published_at"><br>
		
			<!--@foreach ($tags as $tag)
				<?php $provjera=NULL;?>
					@unless ($article=='false')
					@foreach($article->tags as $Atag)
						@if ($tag->id == $Atag->id)
							<?php $provjera='checked';?>
						@endif
					
					@endforeach
					@endunless
			<input type="checkbox" name="tags[]" value="{{ $tag->id }}" {{ $provjera }} id="tags"> {{ $tag->name }}<br> 
			
			@endforeach-->
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
