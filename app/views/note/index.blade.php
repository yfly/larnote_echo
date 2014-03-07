@extends ('layouts.master')
@section('content')
@unless($lists->isEmpty())

	 <table class="table table-bordered table-striped">
	  	<tr>
			<th>Title</th>
			<th>Content</th>
			<th width="15%">Actions</th>
		</tr>  	
		
		@foreach ($lists as $list)
		<tr>
			<td>{{ $list->title }}</td>
			<td>{{ $list->content}}</td>
			<td>
				<a href="note/edit/{{$list->id}}">Edit</a>
				<a href="note/delete/{{$list->id}}">Delete</a>
			</td>
		</tr>
		@endforeach

	 </table>

 @else 
 	<h4>Note List are Empty Now!</h4>
 @endif

@stop