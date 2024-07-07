<div class="" id = "mycards" style = "align-items: center;
  margin-left: 10px;
  margin-right: 10px;
  display: grid;
  grid-gap: 10px;" >

@foreach($myproduct as $mp)
{{-- <div class="parent"> --}}
    <div class="flex flex-col" style = "text-align:left;"><image id = "gambar_product" src = "{{asset('main/images/product/')}}/{{$mp->images}}" style = "width:100% !important;max-width:500px;;height:300px;border-radius:7px;"/>
        <p style = "margin-top:10px;padding-left:10px; font-size:1.5vw;margin-bottom:0px !important;"><span id = "product_category" class = "maroon_color category_product" style = "font-size:1.5vw"><b>{{$mp->category_name}}</b></span></p>
        <p style = "font-size:1.4vw;margin-top:2px;padding-left:10px;font-weight:bold;margin-bottom:0px !important;">{{$mp->name}}</p>
        <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;">#Ayn - {{$mp->code}}</p>
        @if(session()->has('verifyuser'))
        <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;">Rp {{number_format($mp->price)}} / Piece</p>
        @endif
        <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px; " class = "description_product"><span class = "maroon_color" style = "font-weight:bold;" data-kode = "{{$mp->code}}" data-id = "{{$mp->id}}" onclick = "openmodal(this)">Read the Spesification <i class="fa fa-angle-right maroon_color" aria-hidden="true"></i></span></p> <i class="bi bi-arrow-right"></i>
    @endif
    </div>
    {{-- <div class="flex flex-col"><image id = "gambar_product" src = "{{asset('main/images/product/')}}/{{$mp->images}}" style = "width:300px !important;max-width:100%;;height:300px;border-radius:7px;"/>
    </div> --}}
    {{-- <div class="card">xzczxcasd</div>
    <div class="card">qweweqwewq</div>
    <div class="card">asdsadsad</div>
    <div class="card">asdsad</div>
    <div class="card">zxcxzc</div>
    <div class="card">asdsad</div>
    <div class="card">qwewqewq</div> --}}
  {{-- </div> --}}
@endforeach
</div>
<div class = "mylinks" >
    {!! $myproduct->links("pagination::bootstrap-4") !!}
  </div>
</div>
