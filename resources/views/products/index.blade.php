@extends('layouts.app')

@section('title', 'All Products')


@section('content')

<a href="{{ route('products.create') }}" class="btn btn-success">Create Product</a>

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
		<th scope="col">Url</th>
		<th></th>
	  </tr>
	</thead>
	<tbody>
		@foreach ($products as $product)
	 	<tr>
			<th scope="row">{{ $product->id }}</th>
			<td>{{ $product->title }}</td>
			<td>{{ $product->url }}</td>
			<td class="table-buttons">
				<a href="{{ route('products.show', $product) }}" class="btn btn-success">
					<i class="material-icons">visibility</i>
				</a>
				<a href="{{ route('products.edit', $product) }}" class="btn btn-primary">
					<i class="material-icons">edit</i>
				</a>
				<form method="POST" action="{{ route('products.destroy', $product) }}">
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

  {{ $products->links()}}
  
@endsection