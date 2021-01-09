@extends('admin.layouts.master')


@section('content')

<div class="container">

    <section class="page-section my-5 p-5">

        <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">

            {{ csrf_field() }}

                <label for="title">商品名稱
                    <input class="form-control b" type="text" name="title">
                </label><br>


                <label for="price">商品價格
                    <input class="form-control b" type="text" name="price">
                </label><br>

                <label for="description">商品描述
                <textarea class="form-control b" type="text" name="description" rows="5"></textarea>
                </label><br>

                <label for="image">圖片
                    <input class="form-control b" type="file" name="image">
                </label><br>
                {{--  <img src="http://via.placeholder.com/1200x600" class="mt-3" style="height: 100%; width: 100%; object-fit: contain">  --}}


                    <button type="submit" class="btn btn-primary">新增商品</button>

        </form>

    </section>

</div>


@endsection
