@extends('layouts.app')

@section('title', 'All Tags')


@section('content')

<a href="{{ route('tags.create') }}" class="btn btn-success">Create Tag</a>

@if (session()->get('success'))
	<div class="alert alert-success mt-3">
		{{ session()->get('success') }}
	</div>
@endif

<table class="table table-striped mt-3">
	<thead>
	  <tr>
		<th scope="col">#</th>
		<th scope="col">Title</th>
		<th></th>
	  </tr>
	</thead>
	<tbody>
		@foreach ($tags as $tag)
	 	<tr>
			<th scope="row">{{ $tag->id }}</th>
			<td>{{ $tag->title }}</td>
			<td class="table-buttons">
				<a href="{{ route('tags.show', $tag) }}" class="btn btn-success">
					<i class="material-icons">visibility</i>
				</a>
				<a href="{{ route('tags.edit', $tag) }}" class="btn btn-primary">
					<i class="material-icons">edit</i>
				</a>
				<form method="POST" action="{{ route('tags.destroy', $tag) }}">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">
						<i class="material-icons">delete</i>
					</button>
				</form>
	 		</td>
	 	</tr>
	  @endforeach
	  </tr>
	</tbody>
  </table>

  {{ $tags->links()}}
  
@endsection