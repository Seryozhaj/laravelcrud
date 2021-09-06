@extends('layouts.app')

@section('title', 'Show Tag ' . $tag->id)


@section('content')

<div class="card">
    <div class="card-body">
      <h3>{{ $tag->title }}</h3>
    </div>
  </div>

@endsection