 <!--商品-->
 <div class="row">
    @foreach($products as $p)
    <div class="col-sm-6 col-md-4" style="text-align: center;">
        <div class="thumbnail" >
          <div class="box">
            <a href="#"><img  src="{{ asset('/uploads/products/' . $p->image) }}" alt="" class="imageHov" style="height: 100%; width:100%"></a>
          </div>
          <div class="caption">
            <div style="height: 60px;">
              <h3><a href="#" style="font-weight: bold">{!! $p->title !!}</a></h3>
              <div class="row">
                <div class="col-md-6">售價：{!! $p->price !!}</div>
              </div>
              <span>{!! $p->description !!}</span>
            </div>
          </div>
        </div>

      </div>
      @endforeach
    </div>
