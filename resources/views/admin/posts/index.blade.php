{{--
@foreach($posts as $post)

    {{ $post->content }}

    <hr />

@endforeach --}}


@extends('admin.layouts.master')

@section('content')
<div class="container">
    <section class="page-section my-5 p-5">
        <div class="row">
            <div class="col-sm-1">
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">新增商品</a>
            </div>
        </div>
        <div class="row">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">商品名稱</th>
                        <th scope="col">商品副標題</th>
                        <th scope="col">圖片</th>
                        <th scope="col">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($home as $home)
                        <tr>
                            <th class="align-middle" scope="row">{{ $home->id }}</th>
                            <td class="align-middle">{{ $home->content_1 }}</td>
                            <td class="align-middle">{{ $home->content_2 }}</td>
                            <td class="align-middle"><img src="{{ asset('uploads/home/'. $home->image) }}" width="100px"></td>
                            <td class="align-middle">
                                <a href="{{ route('admin.posts.edit', $home->id) }}" class="btn btn-primary">修改</a>
                                <form action="{{ route('admin.posts.destroy', $home->id) }}" method="POST">

                                    @method('DELETE')

                                    @csrf

                                    <button type="submit" class="btn btn-danger" style="margin: 3px">刪除</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection
