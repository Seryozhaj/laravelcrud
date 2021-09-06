@extends('layouts.app')

@section('title', 'Edit Tag ' . $tag->id)


@section('content')
<div class="row">
    <div class="col-lg-6 mx-auto">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        <form method="POST" action="{{ route('tags.update', $tag) }}">
            @csrf
            @method('PATCH')
                <div class="form-group">
                    <label for="tag-title">Title</label>
                    <input type="text" name='title' value=" {{ $tag->title }}" class="form-control" id='tag-title'>
                </div>
                <button type="submite" class="btn btn-success">Update tag</button>
        </form>
    </div>
</div>
@endsection