<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Ayn Collection</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" target="_blank" href="{{asset('main/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" target="_blank" href="{{asset('main/css/product.css')}}" />
    {{-- <link rel="stylesheet" href="{{asset('fa/css/font-awesome.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('owl/dist/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('owl/dist/assets/owl.theme.default.min.css')}}">
    <style>
      
    </style>
  </head>
  <body style = "height:100%;">
    @include('main.header')
    <div class = "containers">
    <div style = "width:100%;height:1000px;background-image:url('{{asset('main/images/landing_page.jpg')}}');background-size:cover;">
    </div>
    <div class = "main_content" >
        <div class = "buythelatest_section" style = "text-align:center;padding:20px;font-size: 10px;">
            <span id = "buythe_style">Type The</span> <span class = "maroon_color_bold" id = "latest_style">Categories</span>
            {{-- <div class = "row  justify-content-center" style = "text-align:left;border-radius:5px;width:100%;"> --}}
                <div class="owl-carousel" style = "margin-top:40px;display: flex !important;flex-direction: row;justify-content: center;text-align:center;">
                  
                        @foreach($category as $c)
                        <div  style = "text-align:center"> 
                            <img src= "{{asset('main/images/category/')}}/{{$c->images_category}}" style = "width:70px;height:70px;margin:auto;"><p style = "color:black;">{{$c->name}}</p> 
                        </div>
                        @endforeach
                    {{-- <div > <img src= "{{asset('main/images/category/logo_cat1.png')}}" style = "width:70px;height:70px;margin:auto;"><p style = "color:black;">Trendy Skirts</p> </div>
                    <div > <img src= "{{asset('main/images/category/logo_cat1.png')}}" style = "width:70px;height:70px;margin:auto;"><p style = "color:black;">T-Shirts</p> </div>
                    <div > <img src= "{{asset('main/images/category/logo_cat1.png')}}" style = "width:70px;height:70px;margin:auto;"><p style = "color:black;">Long Sleeves</p> </div>
                    <div > <img src= "{{asset('main/images/category/logo_cat1.png')}}" style = "width:70px;height:70px;margin:auto;"><p style = "color:black;">Crop Tee</p> </div>
                    <div > <img src= "{{asset('main/images/category/logo_cat1.png')}}" style = "width:70px;height:70px;margin:auto;"><p style = "color:black;">Cardigan</p> </div> --}}
                </div>
            {{-- </div> --}}
            <div class = "product">
                <div class = "row  justify-content-center" style = "text-align:left;">
                 @include('main.product_list')
                </div>
            </div>
        </div>
        <div class = "topseller_gbr_section" style = "text-align:center; height:450px; background-size: cover;  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('{{asset('main/images/landing_page2.jpg')}}'); margin-top:20px;margin-bottom:20px;">
         <p class="line-1 anim-typewriter"><span style = "color:white;">Have you try on our </span> <span class = "maroon_color_bold" style = "font-size:30px;background-color:#800e13;color:white;padding:10px;">BEST SELLER PRODUCT ?</span></p>
        </div>
    
      
    </div>
   
    </div>
    @include('main.footer')

 
  </body>
</html>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
              


<script src="{{asset('main/js/script.js')}}"></script>
<script src="{{asset('owl/dist/owl.carousel.min.js')}}"></script>
<script>
   $(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    margin:20,
    loop:false,
    autoWidth:true,
    items:4
  });
});
</script>




