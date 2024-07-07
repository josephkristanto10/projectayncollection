@foreach($myproduct as $mp)
<div class = "col col-lg-3" style = "animation: fadeIn 2s;">
    <image src = "{{asset('main/images/product/')}}/{{$mp->images}}" style = "width:300px !important;max-width:100%;;height:300px;border-radius:7px;"/>
    <p style = "margin-top:10px;padding-left:10px; font-size:1.5vw;margin-bottom:0px !important;"><span id = "product_category" class = "maroon_color category_product" style = "font-size:1.5vw"><b>{{$mp->category_name}}</b></span></p>
    {{-- <p style = "font-size:13px;margin-top:10px;padding-left:10px;"><b>#TK200153</b></p> --}}
    <p style = "font-size:1.4vw;margin-top:2px;padding-left:10px;font-weight:bold;margin-bottom:0px !important;">{{$mp->name}}</p>
    <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;">#Ayn - {{$mp->code}}</p>

    @if(session()->has('verifyuser'))
        <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;">Rp {{number_format($mp->price)}} / Piece</p>
    @endif
 

    <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px; " class = "description_product"><span class = "maroon_color" style = "font-weight:bold;" data-kode = "{{$mp->code}}" data-id = "{{$mp->id}}" onclick = "openmodal(this)">Read the Spesification <i class="fa fa-angle-right maroon_color" aria-hidden="true"></i></span></p> <i class="bi bi-arrow-right"></i>
</div>
@endforeach
<div class = "mylinks" >
    {!! $myproduct->links("pagination::bootstrap-4") !!}
  </div>
</div>
