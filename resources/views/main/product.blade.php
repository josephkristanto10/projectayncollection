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
    <link rel="stylesheet" href="{{asset('fa/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('owl/dist/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('owl/dist/assets/owl.theme.default.min.css')}}">
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}



    <style>
        .buythelatest_section{
            margin-top:20px;
        }
        #latest_style{
            font-size:55px;
        }
        #buythe_style{
            font-size:35px;
            font-weight:500;
        }
        .product{
            margin-top:30px;
        }
        .line-1{
            position: relative;
            top: 50%;  
            width: 23em;
            margin: 0 auto;
            border-right: 2px solid rgba(255,255,255,.75);
            font-size: 180%;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            transform: translateY(-50%);    
        }

        /* Animation */
        .anim-typewriter{
        animation: typewriter 4s steps(44) 1s 1 normal both,
                    blinkTextCursor 500ms steps(44) infinite normal;
        }
        @keyframes typewriter{
        from{width: 0;}
        to{width: 24em;}
        }
        @keyframes blinkTextCursor{
        from{border-right-color: rgba(255,255,255,.75);}
        to{border-right-color: transparent;}
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        .owl-stage{
            width:100% !important;
        }
        .owl-item{
            padding:10px;
        }
        .owl-item p{
            font-size:15px;
        }
        .owl-item:hover{
            color : white !important;
            background-color:#800e13;
            transition: all .4s ease-in;
            border-radius : 50px;
        }
        .owl-item:hover p{
            color : white !important;
            /* background-color:#800e13; */
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
            <span id = "buythe_style">Type The</span> <span class = "maroon_color_bold" id = "latest_style">Categories</span>
            {{-- <div class = "row  justify-content-center" style = "text-align:left;border-radius:5px;width:100%;"> --}}
                <div class="owl-carousel" style = "margin-top:40px;display: flex !important;flex-direction: row;justify-content: center;text-align:center;">
                    <div  style = "text-align:center"> <img src= "{{asset('main/images/category/logo_cat1.png')}}" style = "width:70px;height:70px;margin:auto;"><p style = "color:black;">Skirts</p> </div>
                    <div > <img src= "{{asset('main/images/category/logo_cat1.png')}}" style = "width:70px;height:70px;margin:auto;"><p style = "color:black;">Trendy Skirts</p> </div>
                    <div > <img src= "{{asset('main/images/category/logo_cat1.png')}}" style = "width:70px;height:70px;margin:auto;"><p style = "color:black;">T-Shirts</p> </div>
                    <div > <img src= "{{asset('main/images/category/logo_cat1.png')}}" style = "width:70px;height:70px;margin:auto;"><p style = "color:black;">Long Sleeves</p> </div>
                    <div > <img src= "{{asset('main/images/category/logo_cat1.png')}}" style = "width:70px;height:70px;margin:auto;"><p style = "color:black;">Crop Tee</p> </div>
                    <div > <img src= "{{asset('main/images/category/logo_cat1.png')}}" style = "width:70px;height:70px;margin:auto;"><p style = "color:black;">Cardigan</p> </div>
                </div>
            {{-- </div> --}}
            <div class = "product">
                <div class = "row  justify-content-center" style = "text-align:left;">
                    <div class = "col-3">
                        <image src = "{{asset('main/images/product/product1.jpg')}}" style = "width:320px;height:350px;border-radius:7px;"/>
                        <p style = "font-size:17px;margin-top:10px;padding-left:10px;"><b>Trending</b> <span id = "product_category" class = "maroon_color" style = "font-size:20px"><b>Skirts</b></span></p>
                        {{-- <p style = "font-size:13px;margin-top:10px;padding-left:10px;"><b>#TK200153</b></p> --}}
                        <p style = "font-size:21px;margin-top:2px;padding-left:10px;"><b>Long Skirt</b></p>
                        <p style = "font-size:17px;margin-top:10px;padding-left:10px;">Uncover style gems with our chic, mix-ready sets. <br><br><span class = "maroon_color" style = "font-weight:bold;">Read the Spesification <i class="fa fa-angle-right maroon_color" aria-hidden="true"></i></span></p> <i class="bi bi-arrow-right"></i>
                    

                    </div>
                    <div class = "col-3">
                        <image src = "{{asset('main/images/product/product2.jpg')}}" style = "width:320px;height:350px;border-radius:7px;"/>
                        <p style = "font-size:17px;margin-top:10px;padding-left:10px;"><b>Trending</b> <span id = "product_category" class = "maroon_color"><b>Sleeves</b></span></p>
                        {{-- <p style = "font-size:13px;margin-top:10px;padding-left:10px;"><b>#TK200153</b></p> --}}
                        <p style = "font-size:21px;margin-top:2px;padding-left:10px;"><b>Navy Sleeves </b></p>
                        <p style = "font-size:17px;margin-top:10px;padding-left:10px;">Uncover style gems with our chic, mix-ready sets. <br><br><span class = "maroon_color" style = "font-weight:bold;">Read the Spesification <i class="fa fa-angle-right maroon_color" aria-hidden="true"></i></span></p> <i class="bi bi-arrow-right"></i>

                    </div>
                    <div class = "col-3">
                        <image src = "{{asset('main/images/product/product3.jpg')}}" style = "width:320px;height:350px;border-radius:7px;"/>
                        <p style = "font-size:17px;margin-top:10px;padding-left:10px;"><b>Trending</b> <span id = "product_category" class = "maroon_color"><b>Sleeves</b></span></p>
                        {{-- <p style = "font-size:13px;margin-top:10px;padding-left:10px;"><b>#TK200153</b></p> --}}
                        <p style = "font-size:21px;margin-top:2px;padding-left:10px;"><b>Navy Sleeves </b></p>
                        <p style = "font-size:17px;margin-top:10px;padding-left:10px;">Uncover style gems with our chic, mix-ready sets. <br><br><span class = "maroon_color" style = "font-weight:bold;">Read the Spesification <i class="fa fa-angle-right maroon_color" aria-hidden="true"></i></span></p> <i class="bi bi-arrow-right"></i>

                    </div>
                   
                </div>
            </div>
        </div>
        <div class = "topseller_gbr_section" style = "text-align:center; height:450px; background-size: cover;  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('{{asset('main/images/landing_page2.jpg')}}'); margin-top:20px;margin-bottom:20px;">
         <p class="line-1 anim-typewriter"><span style = "color:white;">Have you try on our </span> <span class = "maroon_color_bold" style = "font-size:30px;background-color:#800e13;color:white;padding:10px;">BEST SELLER PRODUCT ?</span></p>
        </div>
        <div class = "topseller_product_section" style = "text-align:center; height:100%;position:relative;margin-top:40px;padding-top:20px;">
            <span class = "maroon_color_bold" style = "font-size:30px;color:#131312;padding:10px;">BEST SELLER <u style = "text-decoration: underline;text-decoration-color: #800e13;  text-decoration-thickness: 3px;text-underline-offset: 10px; ">PRODUCT</u></span>
            <div class = "product" style = "padding-top:30px;">
                <div class = "row  justify-content-center" style = "text-align:left;">
                    <div class = "col-3">
                        <image src = "{{asset('main/images/product/product1.jpg')}}" style = "width:320px;height:350px;border-radius:7px;"/>
                        <p style = "font-size:17px;margin-top:10px;padding-left:10px;"><b>Trending</b> <span id = "product_category" class = "maroon_color" style = "font-size:20px"><b>Skirts</b></span></p>
                        {{-- <p style = "font-size:13px;margin-top:10px;padding-left:10px;"><b>#TK200153</b></p> --}}
                        <p style = "font-size:21px;margin-top:2px;padding-left:10px;"><b>Long Skirt</b></p>
                        <p style = "font-size:17px;margin-top:10px;padding-left:10px;">Uncover style gems with our chic, mix-ready sets. <br><br><span class = "maroon_color" style = "font-weight:bold;">Read the Spesification <i class="fa fa-angle-right maroon_color" aria-hidden="true"></i></span></p> <i class="bi bi-arrow-right"></i>
                    

                    </div>
                    <div class = "col-3">
                        <image src = "{{asset('main/images/product/product2.jpg')}}" style = "width:320px;height:350px;border-radius:7px;"/>
                        <p style = "font-size:17px;margin-top:10px;padding-left:10px;"><b>Trending</b> <span id = "product_category" class = "maroon_color"><b>Sleeves</b></span></p>
                        {{-- <p style = "font-size:13px;margin-top:10px;padding-left:10px;"><b>#TK200153</b></p> --}}
                        <p style = "font-size:21px;margin-top:2px;padding-left:10px;"><b>Navy Sleeves </b></p>
                        <p style = "font-size:17px;margin-top:10px;padding-left:10px;">Uncover style gems with our chic, mix-ready sets. <br><br><span class = "maroon_color" style = "font-weight:bold;">Read the Spesification <i class="fa fa-angle-right maroon_color" aria-hidden="true"></i></span></p> <i class="bi bi-arrow-right"></i>

                    </div>
                    <div class = "col-3">
                        <image src = "{{asset('main/images/product/product3.jpg')}}" style = "width:320px;height:350px;border-radius:7px;"/>
                        <p style = "font-size:17px;margin-top:10px;padding-left:10px;"><b>Trending</b> <span id = "product_category" class = "maroon_color"><b>Sleeves</b></span></p>
                        {{-- <p style = "font-size:13px;margin-top:10px;padding-left:10px;"><b>#TK200153</b></p> --}}
                        <p style = "font-size:21px;margin-top:2px;padding-left:10px;"><b>Navy Sleeves </b></p>
                        <p style = "font-size:17px;margin-top:10px;padding-left:10px;">Uncover style gems with our chic, mix-ready sets. <br><br><span class = "maroon_color" style = "font-weight:bold;">Read the Spesification <i class="fa fa-angle-right maroon_color" aria-hidden="true"></i></span></p> <i class="bi bi-arrow-right"></i>

                    </div>
                   
                </div>
            </div>
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




