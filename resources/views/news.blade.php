 <!--活動內容-->
 <div class="row">
    @foreach($home as $h)
    <div class="col-md-4" style="text-align: center;">
        <div class="thumbnail" style="height: 370px;">
          <div class="box">
            <a href="#"><img  src="{{ asset('/uploads/home/' . $h->image) }}" alt="" class="imageHov" style="height: 100%; width:100%"></a>
          </div>
          <div class="caption">
            <div style="height: 60px;">
              <h3><a href="#" class="goodsTitle">{!! $h->content_1 !!}</a></h3>
              <span>{!! $h->content_2 !!}</span>
            </div>
          </div>
        </div>

      </div>
      @endforeach
    </div>
