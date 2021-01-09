@extends('admin.layouts.master')

@section('content')
<div class="container">
    <section class="page-section my-5 p-5">
        <div class="row">
            <div class="col-sm-1">
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary">新增商品</a>
            </div>
        </div>
        <div class="row">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="text-align: center">商品名稱</th>
                        <th scope="col" style="text-align: center">商品價格</th>
                        <th scope="col" style="text-align: center">商品描述</th>
                        <th scope="col" style="text-align: center">圖片</th>
                        <th scope="col" style="text-align: center">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $products)
                        <tr>
                            <th class="align-middle" scope="row">{{ $products->id }}</th>
                            <td class="align-middle" style="width: 250px; ">{{ $products->title }}</td>
                            <td class="align-middle">{{ $products->price }}</td>
                            <td class="align-middle" style="width: 400px; ">{{ $products->description }}</td>
                            <td class="align-middle"><img src="{{ asset('uploads/products/'. $products->image) }}" width="100px"></td>
                            <td class="align-middle">
                                <a href="{{ route('admin.products.edit', $products->id) }}" class="btn btn-primary">修改</a>
                                <form method="POST" action="{{ route('admin.products.destroy', $products->id) }}">
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
