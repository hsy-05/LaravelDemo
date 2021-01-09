{{-- 新增文章 --}}
@extends('admin.layouts.master')

@section('content')

<div class="container">


<form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">

    {{ csrf_field() }}

    <label for="content_1">消息主題：
        <textarea name="content_1" class="form-control b"></textarea>
    </label><br>

    <label for="content_2">消息內容：
        <textarea name="content_2" class="form-control b"></textarea>
    </label><br>

    <label for="image">圖片
        <input class="form-control b" type="file" name="image">
    </label><br>

    <button type="submit" class="btn btn-primary">新增消息</button>

</form>
</div>
@endsection
