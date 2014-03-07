<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@section('title')
			{{ $site_title }}
			:: Note Application
		@show
	</title>
	{{ HTML::style('css/bootstrap.css')}}
	{{ HTML::style('css/styles.css')}}
	{{ HTML::style('ckeditor/contents.css')}}
	<script src="http://localhost/advanceclass/noteappecho/public/js/jquery.js"></script>
	<script src="http://localhost/advanceclass/noteappecho/public/js/alert.js"></script>
	<script src="http://localhost/advanceclass/noteappecho/public/js/bootstrap.js"></script>
	<script src="http://localhost/advanceclass/noteappecho/public/ckeditor/ckeditor.js"></script>
</head>
<body>
	<div id="flash-message">
		@if(Session::has('success'))
			<div class="alert alert-success col-md-3">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>	
				{{ Session::get('success') }}
			</div>
			
		@elseif(Session::has('deleted-note'))			
			<div class="alert alert-success col-md-3">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				{{ Session::get('deleted-note') }}
			</div>

		@elseif(Session::has('edited-note'))
			<div class="alert alert-success col-md-3">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				{{ Session::get('edited-note') }}
			</div>
		@endif
	</div>

	<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
		<div class="container">
			<div class="navbar-header">
				<a href="{{ url() }}" class="navbar-brand">Laravel Note</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="http://localhost/advanceclass/noteappecho/public/note">Notes</a></li>
			    	<li><a href="http://localhost/advanceclass/noteappecho/public/note/create">Create</a></li>
			</ul>
		</div>

	</header>	
	<div class="container row" id="main-body">
		@yield('content')
	</div>
<script type="text/javascript">
	$(".success").alert()
</script>
<script type="text/javascript">
	$('#flash-message').delay(2000).slideUp(1000);

</script> 
</body>
</html>