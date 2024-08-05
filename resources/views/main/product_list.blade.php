<div class="" id = "mycards" style = "align-items: center;
  

  display: grid;
  grid-gap: 10px;" >

@foreach($array_id as $keys=> $ai)
<div class="flex flex-col kotakluarproduk" style = "text-align:left;width: 100%;opacity:0;">
  <div id="carouselExampleControls"  class="carousel slide best_car_{{$keys}}">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="card_image" id = "gambar_product" src = "{{asset('main/images/product/')}}/{{$array_product[$ai]['detail']['images']}}" style = "width:300px;;height:300px;border-radius:5px;"/>
      </div>
      @if($array_product[$ai]['variant_product'][0] != "tidak ada")
      @foreach($array_product[$ai]['variant_product'] as $values => $ap)
      <div class="carousel-item">
          <img class="card_image" src = '{{asset("main/images/variant/$ap")}}' style = "width:300px;height:300px; !important;border-radius:10px;padding:2px;">
      </div>
      @endforeach
    @endif
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target=".best_car_{{$keys}}" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target=".best_car_{{$keys}}" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  {{-- <image id = "gambar_product" src = "{{asset('main/images/product/')}}/{{$array_product[$ai]['detail']['images']}}" style = "width:100% !important;max-width:500px;;height:300px;border-radius:7px;"/> --}}
  <p style = "font-size:1.4vw;margin-top:10px;padding-left:10px;font-weight:600;" class ="code_product">{{$array_product[$ai]['detail']['code']}}</p>
  <p style = "margin-top:10px;padding-left:10px; font-size:1.5vw;margin-bottom:0px !important;"><span id = "product_category" class = "maroon_color category_product" style = "font-size:1.5vw"><b>{{$array_product[$ai]['detail']['category_name']}}</b></span></p>

   {{-- {{dd($array_product[$ai]["detail"]['name'])}} --}}
    @if(session()->has('message') || session()->has('verifyuser'))
        <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;" class = "for_price">Rp <b>{{$array_product[$ai]['detail']['price']}}</b> / Piece</p>
    @else 
        <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;" class = "contact_for_admin_price">Contact our Admin for prices</p>
    @endif

    
  </div>
@endforeach
</div>
<div class = "mylinks" >
    {!! $allproduct->links("pagination::bootstrap-4") !!}
  </div>
</div>
