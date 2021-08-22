@extends('layouts.app')

@section('title', 'Show Product ' . $product->id)


@section('content')

<div class="card">
    <div class="card-body">
      <h3>{{ $product->title }}</h3>
      <p>{{ $product->url }}</p>
    </div>
  </div>

@endsection