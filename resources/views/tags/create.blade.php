@extends('layouts.app')

@section('title', 'All Tags')


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

        <form method="POST" action="{{ route('tags.store') }}">
            @csrf
                <div class="form-group">
                    <label for="tag-title">Title</label>
                    <input type="text" name='title' value=" {{ old('title') }}" class="form-control" id='tag-title'>
                </div>
            <button type="submite" class="btn btn-success">Add Tag</button>
        </form>
    </div>
</div>
@endsection