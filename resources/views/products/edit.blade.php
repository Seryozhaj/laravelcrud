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
                <div class="form-group">
                      <label for="inputGroupSelect01">Tag</label>
                    <div class="input-group mb-3">
                        <select multiple class="custom-select" id="inputGroupSelect01" name='tags[]'>
                            @foreach($tags as $tag)
                                <option value='{{ $tag->id }}'>{{ $tag->title }}</option>
                            @endforeach
                        </select>
                      </div>
                </div>
            <button type="submite" class="btn btn-success">Update Product</button>
        </form>
    </div>
</div>
@endsection