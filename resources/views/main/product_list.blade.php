<div class="" id = "mycards" style = "align-items: center;
  margin-left: 10px;
  margin-right: 10px;
  display: grid;
  grid-gap: 10px;" >

@foreach($array_id as $keys=> $ai)
<div class="flex flex-col" style = "text-align:left;"><image id = "gambar_product" src = "{{asset('main/images/product/')}}/{{$array_product[$ai]['detail']['images']}}" style = "width:100% !important;max-width:500px;;height:300px;border-radius:7px;"/>
    <p style = "margin-top:10px;padding-left:10px; font-size:1.5vw;margin-bottom:0px !important;"><span id = "product_category" class = "maroon_color category_product" style = "font-size:1.5vw"><b>{{$array_product[$ai]['detail']['category_name']}}</b></span></p>
   {{-- {{dd($array_product[$ai]["detail"]['name'])}} --}}
    @if(session()->has('message') || session()->has('verifyuser'))
        <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;">Rp <b>{{$array_product[$ai]['detail']['price']}}</b> / Piece</p>
    @else 
        <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;">Contact our Admin for prices</p>
    @endif

    <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;">Variant : 
    @if($array_product[$ai]['variant_product'][0] != "tidak ada")
      @foreach($array_product[$ai]['variant_product'] as $values => $ap)
      {{-- {{$ap}} --}}
      {{-- testset --}}
      <img src = '{{asset("main/images/variant/$ap")}}' style = "width:30px !important;height:30px !important;border-radius:10px;">
  
      @endforeach
    @endif
     </p>
  </div>
@endforeach
</div>
<div class = "mylinks" >
    {!! $myproduct->links("pagination::bootstrap-4") !!}
  </div>
</div>
