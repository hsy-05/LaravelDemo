 <!--商品-->
 <div class="row">
    @foreach($products as $p)
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail" >
          <div class="box">
            <a href="#"><img  src="{{ asset('/uploads/products/' . $p->image) }}" alt="" class="imageHov" style="height: 200px; width:400px"></a>
          </div>
          <div class="caption" style="text-align: left">
            <div>
              <h3><a href="#" style="font-weight: bold">{!! $p->title !!}</a></h3>
              <div class="row">
                <div class="col-md-6">售價：{!! $p->price !!}</div>
              </div>
              {{-- <span>{!! $p->description !!}</span> --}}
            </div>
          </div>
        </div>

      </div>
      @endforeach
    </div>
