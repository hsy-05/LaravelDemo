 <!--商品-->
 <div class="row">
    @foreach($products as $p)
    <div class="col-sm-6 col-md-4"style="text-align: center">
        <div class="thumbnail" >
          <div class="box">
            <a href="#"><img  src="{{ asset('/uploads/products/' . $p->image) }}" alt="" class="imageHov" style="height: 200px; width:400px"></a>
          </div>
          <div class="caption">
            <div  style="height: 60px;">
              <h3><a href="#" style="font-weight: bold">{!! $p->title !!}</a></h3>
            </div>
              <div class="row" style="font-size: 18px;font-weight: bold">
                <div class="col-md-6" >售價：{!! $p->price !!}</div>
                {{-- <div class="col-md-6" >描述{!! $p->description !!}</div> --}}
              </div>

          </div>
        </div>

      </div>
      @endforeach
    </div>
