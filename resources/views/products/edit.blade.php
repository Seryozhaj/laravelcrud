@extends('layouts.app')

@section('title', 'Edit Product ' . $product->id)


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

        <form method="POST" action="{{ route('products.update', $product) }}">
            @csrf
            @method('PATCH')
                <div class="form-group">
                    <label for="product-title">Title</label>
                    <input type="text" name='title' value=" {{ $product->title }}" class="form-control" id='product-title'>
                </div>
                <div class="form-group">
                <label for="product-url">Url</label>
                <textarea name='url' class="form-control" id="product-url" rows="3">{{ $product->url }}</textarea>
                </div>
                <button type="submite" class="btn btn-success">Update Product</button>
        </form>
    </div>
</div>
@endsection