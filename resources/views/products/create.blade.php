@extends('layouts.app')

@section('title', 'All Products')


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

        <form method="POST" action="{{ route('products.store') }}">
            @csrf
                <div class="form-group">
                    <label for="product-title">Title</label>
                    <input type="text" name='title' value=" {{ old('title') }}" class="form-control" id='product-title'>
                </div>
                <div class="form-group">
                <label for="product-url">Url</label>
                <textarea name='url' class="form-control" id="product-url" rows="3">{{ old('url') }}</textarea>
                </div>
                <button type="submite" class="btn btn-success">Create Product</button>
        </form>
    </div>
</div>
@endsection