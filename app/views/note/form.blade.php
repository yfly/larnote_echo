@extends ('layouts.master')

@section('content')

{{ Form::open(array('url' => URL::current(), 'class' => 'form-horizontal')) }}

<h3>Create New Note</h3>

{{ text_field('title', 'Title', $note->title) }}
{{ textarea_field('content', 'Content', $note->content) }}
<script>
                CKEDITOR.replace( 'content' );
</script>

<div class="form-group">
	<div class="col-lg-offset-2 col-lg-10">
		<button type="submit" class="btn btn-default">Save</button>
	</div>
</div>

{{ Form::close() }}

@stop