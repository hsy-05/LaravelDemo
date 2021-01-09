@extends('admin.layouts.master')


 @section('content')

<div class="container">

<form action="{{ route('admin.products.update',  $products->id) }}" method="POST" enctype="multipart/form-data">

    @method('PUT')

    @csrf

    <label>商品標題：

        <textarea class="form-control b" name="title">{{ $products->title }}</textarea>

    </label><br>

    <label>圖片:

            <input class="form-control b" type="file" name="image">

        {{-- <img src="{{ asset('uploads/home/' . $home->image) }}" class="mt-3" style="height: 100%; width: 100%; object-fit: contain; display:none;"> --}}
    </label><br>

    <label>商品價格：

        <textarea class="form-control b" name="price">{{ $products->price }}</textarea>

    </label><br>

    <label>商品內容：

        <textarea class="form-control b" name="description">{{ $products->description }}</textarea>

    </label><br>

    <button type="submit" class="btn btn-primary">更新消息</button>

</form>

</div>
@endsection
