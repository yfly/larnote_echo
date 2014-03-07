@extends ('layouts.master')
@section('content')

@if(Session::has('message'))
	{{ Session::get('message')}}
@endif

{{ Form::open(array('url' => URL::current(), 'class' => 'form-horizontal'))}}

<h3>User Login</h3>

{{ text_field('username', 'Username' , null ) }}
{{ password_field('password', 'Password' ) }}

<div class="form-group">
	<div class="col-lg-offset-2 col-lg-10">
		<button type="submit" class="btn btn-default">Login</button>
	</div>
</div>

{{ Form::close() }}

@stop

