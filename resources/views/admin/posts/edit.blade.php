@extends('admin.layouts.master')

@section('content')

<div class="container">


<form action="{{ route('admin.posts.update',  $home->id) }}" method="POST" enctype="multipart/form-data">

    @method('PUT')

    @csrf

    <label>消息主題：

        <textarea class="form-control b" name="content_1">{{ $home->content_1 }}</textarea>

    </label><br>

    <label>消息內容：

        <textarea class="form-control b" name="content_2">{{ $home->content_2 }}</textarea>

    </label><br>


        <label>圖片:

            <input class="form-control b" type="file" name="image">

        {{-- <img src="{{ asset('uploads/home/' . $home->image) }}" class="mt-3" style="height: 100%; width: 100%; object-fit: contain; display:none;"> --}}
    </label><br>


    <button type="submit" class="btn btn-primary">更新消息</button>

</form>

</div>
@endsection
