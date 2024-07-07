@foreach($myproduct as $mp)
<div class = "col col-lg-3">
    <image src = "{{asset('main/images/product/product1.jpg')}}" style = "max-width:100%;;height:auto;border-radius:7px;"/>
    <p style = "margin-top:10px;padding-left:10px; font-size:1.5vw;margin-bottom:0px !important;"><span id = "product_category" class = "maroon_color category_product" style = "font-size:1.5vw"><b>Skirts</b></span></p>
    {{-- <p style = "font-size:13px;margin-top:10px;padding-left:10px;"><b>#TK200153</b></p> --}}
    <p style = "font-size:1.4vw;margin-top:2px;padding-left:10px;font-weight:bold;margin-bottom:0px !important;">Long Skirt</p>
    <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;">#Ayn - 17361</p>

    @if(session()->has('message'))
        <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;">Rp {{number_format($mp->price)}} / Piece</p>
    @endif
 

    <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px; " class = "description_product">Uncover style gems with our chic, mix-ready sets. <br><br><span class = "maroon_color" style = "font-weight:bold;" onclick = "openmodal()">Read the Spesification <i class="fa fa-angle-right maroon_color" aria-hidden="true"></i></span></p> <i class="bi bi-arrow-right"></i>
</div>
@endforeach