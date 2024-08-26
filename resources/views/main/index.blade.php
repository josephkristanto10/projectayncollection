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
    <link rel="stylesheet" type="text/css" target="_blank" href="{{asset('main/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('fa/css/font-awesome.min.css')}}">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slim-scroll/1.3.3/slimscroll.js" integrity="sha512-mmciZ0RysaJxNOf+tq0TOGa0EI7MMUEktDT2C4T6isgPu3ulOmLmY6IfebAEAgCPoLXOvOv/ODOlNxT/X/Jgaw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <link rel="stylesheet" href="{{asset('owl/dist/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('owl/dist/assets/owl.theme.default.min.css')}}"> --}}
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" target="_blank" href="{{asset('main/css/index.css')}}" />

</head>

  <body style = "height:100%;">
   
    @include('main.header')
  
    <div class = "containers">
    <div style = "width:100%;height:800px;;background-image:url('{{asset('main/images/background')}}/{{$setting_home[0]->background_pertama}}');background-size:cover;position:relative;">
      <span id = "limitideas" style = "color:white;position:absolute;bottom:20px;left:25px;font-size:1.5vw;background-color:#800e13;border-radius:40px;padding:10px;animation:3.5s fadeIns infinite">Dont limit your outfit <u>ideas</u>.</span>
    </div>
    <div class = "main_content" >
        <div class = "buythelatest_section" style = "text-align:center;padding:20px;">
          
            <span id = "buythe_style">{{$setting_home[0]->text_bacground_pertama}}</span> 
            <div class = "product">
             
                <div class = "row  justify-content-center" style = "text-align:center;margin-bottom:10px;margin-top:10px;" id = "product_list">

                    <?php $id_array=[]; ?>
                    <div class = "mycards">
                    
                      @foreach($array_id as $keys=> $ai)
                      @if($keys < 4)
                    
                        <div class="flex flex-col kotakluarproduk" style = "text-align:left;">
                          <div id="carouselExampleControls"  class="carousel slide car_{{$keys}}" >
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="card_image" id = "gambar_product" src = "{{asset('main/images/product/')}}/{{$array_product[$ai]['detail']['images']}}" style = "width:300px;height:300px !important;border-radius:7px;"/>
                              </div>
                              @if($array_product[$ai]['variant_product'][0] != "tidak ada")
                              @foreach($array_product[$ai]['variant_product'] as $values => $ap)
                              <div class="carousel-item">
                                  <img class="card_image" src = '{{asset("main/images/variant/$ap")}}' style = "width:300px; height:300px !important;border-radius:10px;padding:2px;">
                              </div>
                              @endforeach
                            @endif
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target=".car_{{$keys}}" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target=".car_{{$keys}}" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                          <p style = "font-size:1.4vw;margin-top:10px;padding-left:10px;font-weight:600;" class ="code_product">{{$array_product[$ai]['detail']['code']}}</p>
                          <p style = "margin-top:10px;padding-left:10px; font-size:1.5vw;margin-bottom:0px !important;"><span id = "product_category" class = "maroon_color category_product" style = "font-size:1.5vw"><b>{{$array_product[$ai]['detail']['category_name']}}</b></span></p>
                            @if(session()->has('message') || session()->has('verifyuser'))
                                <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;" class = "for_price">Rp <b>{{$array_product[$ai]['detail']['price']}}</b>  / Piece</p>
                            @else 
                                <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;" class = "contact_for_admin_price">Contact our Admin for prices</p>
                            @endif
                          </div>
                          @endif
                    
                      @endforeach

                      @foreach($array_id as $keys=> $ai)
                      @if($keys < 4)
                      <div class = "row kotakluarprodukmobile" style = "text-align:center;margin-bottom:10px;margin-top:10px;">
                        <div class="col-6 gambar_mobile" style = "text-align:left;" >
                          <div id="carouselExampleControls"  class="carousel slide mobile_car_{{$keys}}  mobile" >
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="card_image" id = "gambar_product" src = "{{asset('main/images/product/')}}/{{$array_product[$ai]['detail']['images']}}" style = "width:175px;height:190px ;border-radius:7px;"/>
                              </div>
                              @if($array_product[$ai]['variant_product'][0] != "tidak ada")
                              @foreach($array_product[$ai]['variant_product'] as $values => $ap)
                              <div class="carousel-item">
                                  <img class="card_image" src = '{{asset("main/images/variant/$ap")}}' style = "width:175px; height:190px ;border-radius:10px;padding:2px;">
                              </div>
                                @endforeach
                              @endif
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target=".mobile_car_{{$keys}}" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target=".mobile_car_{{$keys}}" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                        </div>
                        <div class = "col-6" style = "text-align:left;">
                          <p style = "font-size:1.4vw;margin-top:10px;font-weight:600;" class ="code_product">{{$array_product[$ai]['detail']['code']}}</p>
                          <p style = "margin-top:10px;font-size:1.5vw;margin-bottom:0px !important;"><span id = "product_category" class = "maroon_color category_product" style = "font-size:1.5vw"><b>{{$array_product[$ai]['detail']['category_name']}}</b></span></p>
                          @if(session()->has('message') || session()->has('verifyuser'))
                              <p style = "font-size:1.1vw;margin-top:10px;" class = "for_price">Rp <b>{{$array_product[$ai]['detail']['price']}}</b>  / Piece</p>
                          @else 
                              <p style = "font-size:1.1vw;margin-top:10px;" class = "contact_for_admin_price">Contact our Admin for prices</p>
                          @endif

                          {{-- <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;">Variant :  --}}
                        
                         
                        </div>
                      </div>
                        @endif
                      @endforeach
                    </div>
                  </div>
                  </div>
             
            
            </div>
        </div>
        {{-- {{dd($array_product)}} --}}
        <div class = "topseller_gbr_section" style = "text-align:center; height:450px; background-size: cover;  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('{{asset('main/images/background')}}/{{$setting_home[0]->background_kedua}}'); margin-top:20px;margin-bottom:20px;">
         <p class="line-1 anim-typewriter"><span style = "color:white;">Have you try on our </span> <span id = "spacing_best_seller_mobile" style = "display:none;"><br></span> <span class = "maroon_color_bold" style = "font-size:20px;background-color:#800e13;color:white;padding:10px;">{{$setting_home[0]->text_bacground_kedua}}</span></p>
        </div>
        
        <div class = "topseller_product_section" style = "text-align:center; height:100%;position:relative;margin-top:40px;padding-top:20px;padding:20px;">
            <span class = "maroon_color_bold" style = "font-size:30px;color:#131312;padding:10px;">{{$setting_home[0]->text_bacground_kedua}} <u style = "text-decoration: underline;text-decoration-color: #800e13;  text-decoration-thickness: 3px;text-underline-offset: 10px; "></u></span>
            <div class = "product" style = "padding-top:30px;">
                  <div class = "row  justify-content-center" style = "text-align:center;margin-bottom:10px;margin-top:10px;" id = "product_list">
                    <div class = "mycards">
                      @foreach($array_id_best_seller as $keys=> $ai)
                      <div class="flex flex-col kotakluarproduk" style = "text-align:left; width:100%;">
                        <div id="carouselExampleControls"  class="carousel slide best_car_{{$keys}}">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="card_image" id = "gambar_product" src = "{{asset('main/images/product/')}}/{{$array_product_best_seller[$ai]['detail']['images']}}" style = "width:300px;;height:300px ;border-radius:7px;"/>
                            </div>
                            @if($array_product_best_seller[$ai]['variant_product'][0] != "tidak ada")
                            @foreach($array_product_best_seller[$ai]['variant_product'] as $values => $ap)
                            <div class="carousel-item">
                                <img class="card_image" src = '{{asset("main/images/variant/$ap")}}' style = "width:300px;height:300px !important;border-radius:10px;padding:2px;">
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
             
                        <p style = "font-size:1.4vw;margin-top:10px;padding-left:10px;font-weight:600;" class ="code_product">{{$array_product_best_seller[$ai]['detail']['code']}}</p>
                          <p style = "margin-top:10px;padding-left:10px; font-size:1.5vw;margin-bottom:0px !important;"><span id = "product_category" class = "maroon_color category_product" style = "font-size:1.5vw"><b>{{$array_product_best_seller[$ai]['detail']['category_name']}}</b></span></p>

                         {{-- {{dd($array_product[$ai]["detail"]['name'])}} --}}
                          @if(session()->has('message') || session()->has('verifyuser'))
                              <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;" class = "for_price">Rp <b>{{$array_product_best_seller[$ai]['detail']['price']}}</b>  / Piece</p>
                          @else 
                              <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;" class = "contact_for_admin_price">Contact our Admin for prices</p>
                          @endif
  
                         
                           
                        </div>
                      @endforeach
                </div>
                </div>
            </div>
        </div>

        <div class = "topseller_gbr_section" style = "text-align:center; height:450px; background-size: cover;  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('{{asset('main/images/background')}}/{{$setting_home[0]->background_ketiga}}'); margin-top:20px;margin-bottom:20px;">
          <p class="line-1 anim-typewriter"><span style = "color:white;">Have you try on our </span> <span id = "spacing_best_seller_mobile" style = "display:none;"><br></span> <span class = "maroon_color_bold" style = "font-size:20px;background-color:#800e13;color:white;padding:10px;">{{$setting_home[0]->text_bacground_ketiga}}</span></p>
         </div>
      
         <div class = "topseller_product_section" style = "text-align:center; height:100%;position:relative;margin-top:40px;padding-top:20px;padding:20px;">
          <span class = "maroon_color_bold" style = "font-size:30px;color:#131312;padding:10px;">  {{$setting_home[0]->text_bacground_ketiga}}</span>
          <div class = "product" style = "padding-top:30px;">
                <div class = "row  justify-content-center" style = "text-align:center;margin-bottom:10px;margin-top:10px;" id = "product_list">
                  <div class = "mycards">
                    @foreach($array_id_week_arrival as $keys=> $ai)
                    <div class="flex flex-col kotakluarproduk" style = "text-align:left; width:100%;">
                      <div id="carouselExampleControls"  class="carousel slide arrival_car_{{$keys}}">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="card_image" id = "gambar_product" src = "{{asset('main/images/product/')}}/{{$array_product_week_arrival[$ai]['detail']['images']}}" style = "width:300px;;height:300px ;border-radius:7px;"/>
                          </div>
                          @if($array_product_week_arrival[$ai]['variant_product'][0] != "tidak ada")
                          @foreach($array_product_week_arrival[$ai]['variant_product'] as $values => $ap)
                          <div class="carousel-item">
                              <img class="card_image" src = '{{asset("main/images/variant/$ap")}}' style = "width:300px;height:300px !important;border-radius:10px;padding:2px;">
                          </div>
                          @endforeach
                        @endif
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target=".arrival_car_{{$keys}}" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target=".arrival_car_{{$keys}}" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
           
                      <p style = "font-size:1.4vw;margin-top:10px;padding-left:10px;font-weight:600;" class ="code_product">{{$array_product_week_arrival[$ai]['detail']['code']}}</p>
                        <p style = "margin-top:10px;padding-left:10px; font-size:1.5vw;margin-bottom:0px !important;"><span id = "product_category" class = "maroon_color category_product" style = "font-size:1.5vw"><b>{{$array_product_week_arrival[$ai]['detail']['category_name']}}</b></span></p>

                       {{-- {{dd($array_product[$ai]["detail"]['name'])}} --}}
                        @if(session()->has('message') || session()->has('verifyuser'))
                            <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;" class = "for_price">Rp <b>{{$array_product_week_arrival[$ai]['detail']['price']}}</b>  / Piece</p>
                        @else 
                            <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;" class = "contact_for_admin_price">Contact our Admin for prices</p>
                        @endif

                       
                         
                      </div>
                    @endforeach
              </div>
              </div>
          </div>
        </div>

        <div class = "topseller_gbr_section" style = "text-align:center; height:450px; background-size: cover;  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('{{asset('main/images/background')}}/{{$setting_home[0]->background_keempat}}'); margin-top:20px;margin-bottom:20px;">
          <p class="line-1 anim-typewriter"><span style = "color:white;">Have you try on our </span> <span id = "spacing_best_seller_mobile" style = "display:none;"><br></span> <span class = "maroon_color_bold" style = "font-size:20px;background-color:#800e13;color:white;padding:10px;">{{$setting_home[0]->text_bacground_keempat}}</span></p>
         </div>
      
         <div class = "topseller_product_section" style = "text-align:center; height:100%;position:relative;margin-top:40px;padding-top:20px;padding:20px;">
          <span class = "maroon_color_bold" style = "font-size:30px;color:#131312;padding:10px;"> {{$setting_home[0]->text_bacground_keempat}}</span>
          <div class = "product" style = "padding-top:30px;">
                <div class = "row  justify-content-center" style = "text-align:center;margin-bottom:10px;margin-top:10px;" id = "product_list">
                  <div class = "mycards">
         
                    @foreach($array_id_whats_trending as $keys=> $ai)
                    <div class="flex flex-col kotakluarproduk" style = "text-align:left; width:100%;">
                      <div id="carouselExampleControls"  class="carousel slide best_car_{{$keys}}">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="card_image" id = "gambar_product" src = "{{asset('main/images/product/')}}/{{$array_product_whats_trending[$ai]['detail']['images']}}" style = "width:300px;;height:300px ;border-radius:7px;"/>
                          </div>
                          @if($array_product_whats_trending[$ai]['variant_product'][0] != "tidak ada")
                          @foreach($array_product_whats_trending[$ai]['variant_product'] as $values => $ap)
                          <div class="carousel-item">
                              <img class="card_image" src = '{{asset("main/images/variant/$ap")}}' style = "width:300px;height:300px !important;border-radius:10px;padding:2px;">
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
           
                      <p style = "font-size:1.4vw;margin-top:10px;padding-left:10px;font-weight:600;" class ="code_product">{{$array_product_whats_trending[$ai]['detail']['code']}}</p>
                        <p style = "margin-top:10px;padding-left:10px; font-size:1.5vw;margin-bottom:0px !important;"><span id = "product_category" class = "maroon_color category_product" style = "font-size:1.5vw"><b>{{$array_product_whats_trending[$ai]['detail']['category_name']}}</b></span></p>

                       {{-- {{dd($array_product[$ai]["detail"]['name'])}} --}}
                        @if(session()->has('message') || session()->has('verifyuser'))
                            <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;" class = "for_price">Rp <b>{{$array_product_whats_trending[$ai]['detail']['price']}}</b>  / Piece</p>
                        @else 
                            <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;" class = "contact_for_admin_price">Contact our Admin for prices</p>
                        @endif

                       
                         
                      </div>
                    @endforeach
              </div>
              </div>
          </div>
        </div>

    </div>
   
    </div>
    @include('main.footer')

        </div>
      </div> 
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
          <div class = 'col-12 col-xl-4'>
            {{-- <div class="photo" style = "text-align:center;margin:auto;width:100%;">
              <img id = "gambar_detail_product" src="{{asset('main/images/logo.png')}}">
            </div> --}}
          </div>
          <div class = 'col-12 col-xl-8'>
            <div class="description"style = "text-align: left !important;;width:100%;">
              <h3 id = "modal_title_product" style = 'width:100%;'>Product Name</h3>
              <h4 id = "modal_code_product">Product Code</h4>
              <br>
              <h5 id = "modal_variants_product">Variant : </h5>
              <br>
              <h5>Price : </h5>
              @if(session()->has('verifyuser'))
           
              <h1 id = "modal_price_product" style = "padding-top:0px;">Rp -</h1>
              @else
              <h4 id = "">Click <b>see price</b> to ask admin</h4><br>
              @endif
              <h5 style = "padding-top:20px;">Description : </h5>
              <p id = "modal_desc_product" style = "overflow-y:auto;height:150px;margin-bottom:10px;    text-align: left !important;">Classic Peace Lily is a spathiphyllum floor plant arranged in a bamboo planter with a blue & red ribbom and butterfly pick.</p>
              
            
              
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
<script src="{{asset('main/js/script.js')}}"></script>
<script src="{{asset('owl/dist/owl.carousel.min.js')}}"></script>

<script>
  $(document).ready(function () {
    $('.carousel').carousel({
        pause: true,
        interval: false
    });
  });
  
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
