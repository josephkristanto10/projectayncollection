<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Ayn Collection</title>
        <link rel="icon" type="image/x-icon" href="{{asset('main/images/logo.png')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" target="_blank" href="{{asset('main/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" target="_blank" href="{{asset('main/css/product.css')}}" />
    <link rel="stylesheet" href="{{asset('fa/css/font-awesome.min.css')}}">

    {{-- <link rel="stylesheet" href="{{asset('fa/css/font-awesome.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('owl/dist/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('owl/dist/assets/owl.theme.default.min.css')}}">
    <style>
      #product_list nav svg{
width:50px !important;
      }
      #product_list nav {
position:relative !important;
      }
      #product_list nav ul {
margin:auto !important;
      }
      .page-link:hover{
        background-color:#800e13;
      }
      .pagination .active{
        background-color:#800e13 !important;
      }
     #product_list .active{
        background-color:#800e13 !important;
      }
      

The easiest solution would be to write some CSS rules that override the default bootstrap ones. Something like this would probably do:

.pagination > li > a,
.pagination > li > span {
    color: #800e13; // use your own color here
}

.pagination > .active > a,
.pagination > .active > a:focus,
.pagination > .active > a:hover,
.pagination > .active > span,
.pagination > .active > span:focus,
.pagination > .active > span:hover {
    background-color: #800e13;
    border-color: #800e13;
}



body {

.modal_card_detail {

width: 100%;
height: 375px;
position: fixed;
background: white;
margin: 0 auto;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
transition: all 0.3s;
}
.card_detail {

  width: 80%;
  /* height: 90%; */
  overflow-y: auto;
  position: fixed;
  background: white;
  margin: 0 auto;
  text-align: left !important;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
  transition: all 0.3s;
  
  &:hover {
    
    box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  
  }
  
  nav {
    
    width: 100%;
    color: #727272;
    text-transform: uppercase;
    padding: 20px;
    font-size: 12px;
    
    svg.heart {
      
      height: 24px;
      width: 24px;
      float: right;
      margin-top: -3px;
      transition: all 0.3s ease;
      cursor: pointer;
      
      &:hover {
        
        fill: red;
        
      }
      
    }
    svg.arrow {
      
      float: left;
      height: 15px;
      width: 15px;
      margin-right: 10px;
      
    }
    
  }
  
  .photo {
    
    padding: 30px;
    width: 45%;
    text-align: center;
    float: left;
    
    img { 
      max-height: 240px; 
    }
    
  }
  
  .description {
    
     padding: 15px;
     float: left;
     width: 55%;
     
     h1 {
       color: #515151;
       font-weight: 300;
       padding-top: 15px;
       margin: 0;
       font-size: 30px;
       font-weight: 300;
     }
   
     h2 {
      color: #515151;
      margin: 0;
      text-transform: uppercase;
      font-weight: 500;
     }
    
     h4 { 
       margin: 0;
       color: #727272;
       text-transform: uppercase;
       font-weight: 500;
       font-size: 12px
     }
    
     p { 
       font-size: 12px; 
       line-height: 20px;
       color: #727272;
       padding: 20px 0;
       margin: 0;
    }
    
     button {

       outline: 0;
       border: 0;
       background: none;
       border: 1px solid #d9d9d9;
       padding: 8px 0px;
       margin-bottom: 30px;
       color: #515151;
       text-transform: uppercase;
       width: 125px;
       font-family: inherit;
       margin-right: 5px;
       transition: all 0.3s ease;
       font-weight: 500;
       
       &:hover {
         
         // background: darken(white, 2%);
         border: 1px solid #aedaa6;
         color: #aedaa6;
         cursor: pointer;
         
       }

     }
    
  }
  
}

}

.card_detail button{
outline: 0;
       border: 0;
       background: none;
       border: 1px solid #d9d9d9;
       padding: 8px 0px;
       margin-bottom: 30px;
       color: #515151;
       text-transform: uppercase;
       width: 125px;
       font-family: inherit;
       margin-right: 5px;
       transition: all 0.3s ease;
       font-weight: 500;
       
       &:hover {
         
         // background: darken(white, 2%);
         border: 1px solid #aedaa6;
         color: #aedaa6;
         cursor: pointer;
         
       }
}

    </style>
  </head>
  <body style = "height:100%;">
    @include('main.header')
    <div class = "containers">
    <div style = "width:100%;height:1000px;background-image:url('{{asset('main/images/landing_page.jpg')}}');background-size:cover;">
    </div>
    <div class = "main_content" >
        <div class = "buythelatest_section" style = "text-align:center;padding:20px;font-size: 10px;">
            <span id = "buythe_style">Pick The</span> <span class = "maroon_color_bold" id = "latest_style">Categories</span>
            {{-- <div class = "row  justify-content-center" style = "text-align:left;border-radius:5px;width:100%;"> --}}
            
                <div class="owl-carousel" id = "myowl" style = "margin-top:40px;width:100%;">
                
                  @foreach($category as $c)
                  {{-- <div class = "item"> --}}
                    <div style = "text-align:center" data-id = "{{$c->id}}" onclick = "getproductbycategory(this)"> 
                        <img src= "{{asset('main/images/category/')}}/{{$c->images_category}}" style = "border-radius:50px;width:70px;height:70px;margin:auto;"><p style = "color:black;">{{$c->name}}</p> 
                    </div>
                  {{-- </div> --}}
                  @endforeach

                  </div>
            
            {{-- </div> --}}
       
            <div class = "product">
              <span id = "buythe_style">Choose The</span> <span class = "maroon_color_bold" id = "latest_style">Item</span>
                <div class = "row  justify-content-center" style = "text-align:left;margin-bottom:10px;margin-top:10px;margin-top:40px;" id = "product_list">
                    @include('main.product_list')
                </div>
            </div>
        </div>
        <div class = "topseller_gbr_section" style = "text-align:center; height:450px; background-size: cover;  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('{{asset('main/images/landing_page2.jpg')}}'); margin-top:20px;margin-bottom:20px;">
         <p class="line-1 anim-typewriter"><span style = "color:white;">Have you try on our </span><span id = "spacing_best_seller_mobile" style = "display:none;"><br></span> <span  id = "tulisan_best_seller" class = "maroon_color_bold" style = "background-color:#800e13;color:white;padding:10px;">BEST SELLER PRODUCT ?</span></p>
        </div>
    </div>
   
    </div>
    @include('main.footer')

    <div class = "modal_card_detail" style = "width:100%;height:1000px;background-color:#000000;opacity:0.5;z-index:5;position:fixed;display:none;">

    </div>
      <div class="card_detail" style = "opacity:0 !important;display:none;z-index:6;">
        <nav style = "background-color:#800e13;color:white;position:relative;">
          <svg class="arrow" id = "closemodal" style = "color:white;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 " stroke="#727272"/></svg>
          <span style = "font-weight:bold;">Back to Product</span>
          <img src = "{{asset('main/images/logo.png')}}" style = "width:25px;height:25px">
          {{-- <svg class="heart" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" stroke="#727272" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M340.8,98.4c50.7,0,91.9,41.3,91.9,92.3c0,26.2-10.9,49.8-28.3,66.6L256,407.1L105,254.6c-15.8-16.6-25.6-39.1-25.6-63.9  c0-51,41.1-92.3,91.9-92.3c38.2,0,70.9,23.4,84.8,56.8C269.8,121.9,302.6,98.4,340.8,98.4 M340.8,83C307,83,276,98.8,256,124.8  c-20-26-51-41.8-84.8-41.8C112.1,83,64,131.3,64,190.7c0,27.9,10.6,54.4,29.9,74.6L245.1,418l10.9,11l10.9-11l148.3-149.8  c21-20.3,32.8-47.9,32.8-77.5C448,131.3,399.9,83,340.8,83L340.8,83z" stroke="#727272"/></svg> --}}
        </nav>
        <div class = "row">
          {{-- <div class = 'col-12 col-xl-4'>
            <div class="photo" style = "text-align:center;margin:auto;width:100%;">
              <img id = "gambar_detail_product" src="{{asset('main/images/logo.png')}}">
            </div>
          </div> --}}
          <div class = 'col-12 col-xl-12'>
            <div class="description"style = "text-align: left !important;;width:100%;">
              <h3 id = "modal_title_product" style = 'width:100%;'>Product Name</h3>
              <h4 id = "modal_code_product">Product Code</h4>
              <br>
              <h5 id = "modal_variants_product">Variant : </h5>
              <br>
              <br>
              <h5>Price : </h5>
              @if(session()->has('verifyuser'))
           
              <h1 id = "modal_price_product" style = "padding-top:0px;">Rp -</h1>
              @else
              <h4 id = "">Click <b>see price</b> to ask admin</h4><br>
              @endif
              <h5 style = "padding-top:20px;">Description : </h5>
              <p id = "modal_desc_product" style = "overflow-y:auto;width:100%;height:150px;margin-bottom:10px;    text-align: left !important;">Classic Peace Lily is a spathiphyllum floor plant arranged in a bamboo planter with a blue & red ribbom and butterfly pick.</p>
              
            
              
            </div>
          </div>
        </div>
        <div class = "row"> 
          
          <div class = "col-12">  <a id = "tujuan_chat_admin"><button style = "float:right;margin-right:20px;"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
            Ask Admin</button></a>  @if(!session()->has('verifyuser'))<a target = "_blank" href= "https://wa.me/+6285763794376?text=hai%20ka%2C%20saya%20mau%20lihat%20harga%20di%20website.%20apakah%20boleh%20saya%20minta%20link%20untuk%20lihat%20harga%3F"><button style = "float:right;"> <i class="fa fa-usd" aria-hidden="true"></i>
            See Price</button></a> @endif </div>
        
        
         
        
        </div>
    
      </div>  
  </body>
</html>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
              


<script src="{{asset('main/js/script.js')}}"></script>
<script src="{{asset('owl/dist/owl.carousel.min.js')}}"></script>

<script>
   $(document).ready(function(){
    $('#myowl').owlCarousel({
            loop: false,
            nav: false,
            dots: false,
            items: 20,
            margin: 1,
            responsive:{
                0:{
                    items:1,
                    rows:1
                },
                768:{
                    items:5,
                    rows:1
                }
            }
            // responsive: {
            //     0: {
            //         items: 1,
            //         rows:1,
            //     },
            //     460: {
            //         items: 1,
            //         rows:1,
            //     },
            //     576: {
            //         items: 2,
            //         rows:1,
            //     },
            //     992: {
            //         items: 3,
            //     }
            // }
        });
   
});
var data_pilihan_category = 0;
function getproductbycategory(myobj){
    var id_category = $(myobj).attr("data-id");
    data_pilihan_category = id_category;
    fetch_data(0);
    // $.ajax({
    //   type: "get",
    //   url: "{{url('/getproductbycategory')}}",
    //   data: {"id_category" : id_category},
    //   dataType: "json",
    //   success: function (response) {

    //     $("#modal_title_product").text(response.output[0].name);
    //     $("#modal_code_product").text("#"+response.output[0].code);
    //     var harga =  response.output[0].price;
    //     const hargaakhir = harga.toLocaleString();
    //     $("#modal_price_product").text("Rp "+hargaakhir);
    //     $("#modal_desc_product").text(response.output[0].descriptions);

    //     var output_gambar = "{{asset('main/images/product')}}/"+response.output[0].images;
    //     $("#gambar_detail_product").attr("src", output_gambar);



    //   }
    // });

}

$(document).on('click', '.mylinks a', function(event){
 
 event.preventDefault(); 
 var page = $(this).attr('href').split('page=')[1];

 fetch_data(page);
});

function fetch_data(page)
{

 $.ajax({
  url:"/pagecategory/fetch_data_index?page="+page,
  data:{"category" : data_pilihan_category},
  success:function(data)
  {
   $('#product_list').html(data);
  }
 });
}

function openmodal(myobj){

var myid_product =  $(myobj).attr("data-id");
var kode_product =  $(myobj).attr("data-kode");
$("#tujuan_chat_admin").attr("target", "_blank");

$("#tujuan_chat_admin").attr("href", "https://wa.me/+6285763794376?text=hai%20ka%2C%20saya%20mau%20tanya%20tentang%20product%20dengan%20code%20"+kode_product+"%20ini.%20Saya%20taunya%20ini%20dari%20website.");


$(".modal_card_detail").attr("style","width:100%;height:1000px;background-color:#000000;opacity:0.5;z-index:5;position:fixed;display:block;");
$(".card_detail").attr("style", " z-index:6;display:block; animation: fadeIns 1s;");


$.ajax({
type: "get",
url: "{{url('/detailproduct')}}",
data: {"id_product" : myid_product},
dataType: "json",
success: function (response) {

  $("#modal_title_product").text(response.output[0].name);
  $("#modal_code_product").text("#"+response.output[0].code);
  var harga =  response.output[0].price;
  const hargaakhir = harga.toLocaleString();
  $("#modal_price_product").text("Rp "+hargaakhir);
  $("#modal_desc_product").text(response.output[0].descriptions);

  var output_gambar = "{{asset('main/images/product')}}/"+response.output[0].images;
  $("#gambar_detail_product").attr("src", output_gambar);



}
});

}
$(".modal_card_detail").on("click",function(){
$(".modal_card_detail").attr("style","width:100%;height:1000px;background-color:#000000;opacity:0.5;z-index:5;position:fixed;display:none;");
$(".card_detail").attr("style", "opacity:1 !important; z-index:6;display:none;");
})
$("#closemodal").on("click",function(){
$(".modal_card_detail").attr("style","width:100%;height:1000px;background-color:#000000;opacity:0.5;z-index:5;position:fixed;display:none;");
$(".card_detail").attr("style", "opacity:1 !important; z-index:6;display:none;");
})

</script>




