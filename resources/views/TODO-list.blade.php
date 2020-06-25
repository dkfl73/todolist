@extends('layouts.app')

@section('maincode')
<form method="POST" action="{{route('submit-form')}}">
	@csrf
	<div class="error">
	<ul>
		@foreach($errors->all() as $error) 
		<li>{{$error}}</li> 
		@endforeach
	</ul>
</div>
	<input type="text" name="task" class="task_input" placeholder="Write...">
	<button type="submit" class="add_btn">add new</button>	
</form>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $el)
		<tr>
			<td class="task">{{ $el->tasks }}</td>
			<td class="delete">
				<a href="{{ route('delete',$el->id) }}">x</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection