@extends('layouts.app')

@section('title', 'Show Product ' . $product->id)


@section('content')

<div class="card">
    <div class="card-body">
      <h3>Title : {{ $product->title }}</h3>
      <p>Url : {{ $product->url }}</p>
      <p>Tag : {{ $product->tag }}</p>
    </div>
</div>

@endsection