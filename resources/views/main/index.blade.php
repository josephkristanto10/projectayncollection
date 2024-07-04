<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Ayn Collection</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" target="_blank" href="{{asset('main/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('fa/css/font-awesome.min.css')}}">

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

        @keyframes fadeIns {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }



        #modal-container {
  position:fixed;
  display:table;
  height:100%;
  width:100%;
  top:0;
  left:0;
  transform:scale(0);
  z-index:1;
  &.six {
    transform:scale(1);
    .modal-background {
      background:rgba(85, 62, 62, 0);
      animation: fadeIn .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
      .modal {
        background-color:transparent;
        animation: modalFadeIn .5s .8s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
        h2,p,#button_admin_modal {
          opacity:0;
          position:relative;
          animation: modalContentFadeIn .5s 1s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
        }
        
        img{
            opacity:0;
            position:relative;
            animation: modalContentFadeIn .5s 1s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
        }
        .modal-svg {
          rect {
            animation: sketchIn .5s .3s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
          }
        }
      }
    }
    &.out {
      animation: quickScaleDown 0s .5s linear forwards;
      .modal-background {
        animation: fadeOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
        .modal {
          animation: modalFadeOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
          h2,p,#button_admin_modal  {
            animation: modalContentFadeOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
          }
          img {
            animation: modalContentFadeOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
          }
          .modal-svg {
            rect {
              animation: sketchOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
            }
          }
        }
      }
    }
  }

  .modal-background {
    display:table-cell;
    background:rgba(0,0,0,.8);
    text-align:center;
    vertical-align:middle;
    .modal {
      background:white;
      width:50%;
      padding:50px;
      display:inline-block;
      border-radius:3px;
      font-weight:300;
      position:relative;
      h2 {
        font-size:25px;
        line-height:25px;
        margin-bottom:15px;
      }
      p {
        font-size:18px;
        line-height:22px;
      }
      .modal-svg {
        text-align:center;
        position:absolute;
        top:0;
        height:100%;
        width:100%;
        border-radius:3px;
        rect {
          stroke: #fff;
          stroke-width: 2px;
          stroke-dasharray: 778;
          stroke-dashoffset: 778;
        }
      }
    }
  }
}

.content {
  min-height:100%;
  height:100%;
  background:white;
  position:relative;
  z-index:0;
  h1 {
    padding:75px 0 30px 0;
    text-align:center;
    font-size:30px;
    line-height:30px;
  }
  .buttons {
    max-width:800px;
    margin:0 auto;
    padding:0;
    text-align:center;
    .button {
      display:inline-block;
      text-align:center;
      padding:10px 15px;
      margin:10px;
      background:red;
      font-size:18px;
      background-color:#efefef;
      border-radius:3px;
      box-shadow:0 1px 2px rgba(0,0,0,.3);
      cursor:pointer;
      &:hover {
        color:white;
        background:#009bd5;
      }
    }
  } 
}

@keyframes unfoldIn {
  0% {
    transform:scaleY(.005) scaleX(0);
  }
  50% {
    transform:scaleY(.005) scaleX(1);
  }
  100% {
    transform:scaleY(1) scaleX(1);
  }
}

@keyframes unfoldOut {
  0% {
    transform:scaleY(1) scaleX(1);
  }
  50% {
    transform:scaleY(.005) scaleX(1);
  }
  100% {
    transform:scaleY(.005) scaleX(0);
  }
}

@keyframes zoomIn {
  0% {
    transform:scale(0);
  }
  100% {
    transform:scale(1);
  }
}

@keyframes zoomOut {
  0% {
    transform:scale(1);
  }
  100% {
    transform:scale(0);
  }
}

@keyframes fadeIn {
  0% {
    background:rgba(0,0,0,.0);
  }
  100% {
    background:rgba(0,0,0,.7);
  }
}

@keyframes fadeOut {
  0% {
    background:rgba(0,0,0,.7);
  }
  100% {
    background:rgba(0,0,0,.0);
  }
}

@keyframes scaleUp {
  0% {
    transform:scale(.8) translateY(1000px);
    opacity:0;
  }
  100% {
    transform:scale(1) translateY(0px);
    opacity:1;
  }
}

@keyframes scaleDown {
  0% {
    transform:scale(1) translateY(0px);
    opacity:1;
  }
  100% {
    transform:scale(.8) translateY(1000px);
    opacity:0;
  }
}

@keyframes scaleBack {
  0% {
    transform:scale(1);
  }
  100% {
    transform:scale(.85);
  }
}

@keyframes scaleForward {
  0% {
    transform:scale(.85);
  }
  100% {
    transform:scale(1);
  }
}

@keyframes quickScaleDown {
  0% {
    transform:scale(1);
  }
  99.9% {
    transform:scale(1);
  }
  100% {
    transform:scale(0);
  }
}

@keyframes slideUpLarge {
  0% {
    transform:translateY(0%);
  }
  100% {
    transform:translateY(-100%);
  }
}

@keyframes slideDownLarge {
  0% {
    transform:translateY(-100%);
  }
  100% {
    transform:translateY(0%);
  }
}

@keyframes moveUp {
  0% {
    transform:translateY(150px);
  }
  100% {
    transform:translateY(0);
  }
}

@keyframes moveDown {
  0% {
    transform:translateY(0px);
  }
  100% {
    transform:translateY(150px);
  }
}

@keyframes blowUpContent {
  0% {
    transform:scale(1);
    opacity:1;
  }
  99.9% {
    transform:scale(2);
    opacity:0;
  }
  100% {
    transform:scale(0);
  }
}

@keyframes blowUpContentTwo {
  0% {
    transform:scale(2);
    opacity:0;
  }
  100% {
    transform:scale(1);
    opacity:1;
  }
}

@keyframes blowUpModal {
  0% {
    transform:scale(0);
  }
  100% {
    transform:scale(1);
  }
}

@keyframes blowUpModalTwo {
  0% {
    transform:scale(1);
    opacity:1;
  }
  100% {
    transform:scale(0);
    opacity:0;
  }
}

@keyframes roadRunnerIn {
  0% {
    transform:translateX(-1500px) skewX(30deg) scaleX(1.3);
  }
  70% {
    transform:translateX(30px) skewX(0deg) scaleX(.9);
  }
  100% {
    transform:translateX(0px) skewX(0deg) scaleX(1);
  }
}

@keyframes roadRunnerOut {
  0% {
    transform:translateX(0px) skewX(0deg) scaleX(1);
  }
  30% {
    transform:translateX(-30px) skewX(-5deg) scaleX(.9);
  }
  100% {
    transform:translateX(1500px) skewX(30deg) scaleX(1.3);
  }
}

@keyframes sketchIn {
	0% {
		stroke-dashoffset: 778;
        opacity :1;
	}
	100% {
		stroke-dashoffset: 0;
        opacity :0;
	}
}

@keyframes sketchOut {
	0% {
		stroke-dashoffset: 0;
       
	}
	100% {
		stroke-dashoffset: 778;
        
	}
}

@keyframes modalFadeIn {
  0% {
    background-color:transparent;
  }
  100% {
    background-color:white;
  }
}

@keyframes modalFadeOut {
  0% {
    background-color:white;
  }
  100% {
    background-color:transparent;
  }
}

@keyframes modalContentFadeIn {
  0% {
    opacity:0;
    top:-20px;
  }
  100% {
    opacity:1;
    top:0;
  }
}

@keyframes modalContentFadeOut {
  0% {
    opacity:1;
    top:0px;
  }
  100% {
    opacity:0;
    top:-20px;
  }
}

@keyframes bondJamesBond {
  0% {
    transform:translateX(1000px);
  }
  80% {
    transform:translateX(0px);
    border-radius:75px;
    height:75px;
    width:75px;
  }
  90% {
    border-radius:3px;
    height:182px;
    width:247px;
  }
  100% {
    border-radius:3px;
    height:162px;
    width:227px;
  }
}

@keyframes killShot {
  0% {
    transform:translateY(0) rotate(0deg);
    opacity:1;
  }
  100% {
    transform:translateY(300px) rotate(45deg);
    opacity:0;
  }
}

@keyframes fadeToRed {
  0% {
    background-color:rgba(black,.6);
  }
  100% {
    background-color:rgba(red,.8);
  }
}

@keyframes slowFade {
  0% {
    opacity:1;
  }
  99.9% {
    opacity:0;
    transform:scale(1);
  }
  100% {
    transform:scale(0);
  }
}

.dot {
  height: 15px;
  width: 15px;
  background-color: #bbb;
  border-radius: 50%;
  margin-top:10px;
  display: inline-block;
}
/* .card{
  width: 30%;
}
.card img{
  width:100%;
} */

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style-type: none;
}

.card_item {
  position: relative;
  display: block;
  height: 100%;  
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
}

.card__image {      
  width: 100%;
  height: auto;
}

.card__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;      
  border-radius: calc(var(--curve) * 1px);    
  background-color: var(--surface-color);      
  transform: translateY(100%);
  transition: .2s ease-in-out;
}

.card:hover .card__overlay {
  transform: translateY(0);
}

.card__header {
  position: relative;
  display: flex;
  align-items: center;
  gap: 2em;
  padding: 2em;
  border-radius: calc(var(--curve) * 1px) 0 0 0;    
  background-color: var(--surface-color);
  transform: translateY(-100%);
  transition: .2s ease-in-out;
}

.card__arc {
  width: 80px;
  height: 80px;
  position: absolute;
  bottom: 100%;
  right: 0;      
  z-index: 1;
}

.card__arc path {
  fill: var(--surface-color);
  d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
}       

.card_item:hover .card__header {
  transform: translateY(0);
}

.card__thumb {
  flex-shrink: 0;
  width: 50px;
  height: 50px;      
  border-radius: 50%;      
}

.card__title {
  font-size: 1em;
  margin: 0 0 .3em;
  color: #6A515E;
}

.card__tagline {
  display: block;
  margin: 1em 0;
  font-family: "MockFlowFont";  
  font-size: .8em; 
  color: #D7BDCA;  
}

.card__status {
  font-size: .8em;
  color: #D7BDCA;
}

.card__description {
  padding: 0 2em 2em;
  margin: 0;
  color: #D7BDCA;
  font-family: "MockFlowFont";   
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
}    


        
    </style>
  </head>
  <body style = "height:100%;">
    @include('main.header')
    <div class = "containers">
    <div style = "width:100%;height:1000px;background-image:url('{{asset('main/images/landing_page.jpg')}}');background-size:cover;">
    </div>
    <div class = "main_content" >
        <div class = "buythelatest_section" style = "text-align:center;padding:20px;">
            <span id = "buythe_style">Buy The</span> <span class = "maroon_color_bold" id = "latest_style">Latest</span>
            <div class = "product">
                <div class = "row  justify-content-center" style = "text-align:left;">
                    <div class = "col-4 col-lg-4 col-xs-6">
                        <image src = "{{asset('main/images/product/product1.jpg')}}" style = "max-width:100%;;height:auto;border-radius:7px;"/>
                        <p style = "margin-top:10px;padding-left:10px; font-size:1.5vw;"><b>Trending</b> <span id = "product_category" class = "maroon_color" style = "font-size:2vw"><b>Skirts</b></span></p>
                        {{-- <p style = "font-size:13px;margin-top:10px;padding-left:10px;"><b>#TK200153</b></p> --}}
                        <p style = "font-size:2vw;margin-top:2px;padding-left:10px;"><b>Long Skirt</b></p>
                        <p style = "font-size:1.3vw;margin-top:10px;padding-left:10px;">Uncover style gems with our chic, mix-ready sets. <br><br><span class = "maroon_color" style = "font-weight:bold;" onclick = "openmodal()">Read the Spesification <i class="fa fa-angle-right maroon_color" aria-hidden="true"></i></span></p> <i class="bi bi-arrow-right"></i>
                    

                    </div>
                    <div class = "col-4">
                        <image src = "{{asset('main/images/product/product2.jpg')}}" style = "width:100%;height:auto;border-radius:7px;"/>
                        <p style = "font-size:1.5vw;;margin-top:10px;padding-left:10px;"><b>Trending</b> <span id = "product_category" class = "maroon_color" style = "font-size:2vw"><b>Sleeves</b></span></p>
                        {{-- <p style = "font-size:13px;margin-top:10px;padding-left:10px;"><b>#TK200153</b></p> --}}
                        <p style = "font-size:2vw;margin-top:2px;padding-left:10px;"><b>Navy Sleeves </b></p>
                        <p style = "font-size:1.3vw;margin-top:10px;padding-left:10px;">Uncover style gems with our chic, mix-ready sets. <br><br><span class = "maroon_color" style = "font-weight:bold;">Read the Spesification <i class="fa fa-angle-right maroon_color" aria-hidden="true"></i></span></p> <i class="bi bi-arrow-right"></i>

                    </div>
                    <div class = "col-4">
                        <image src = "{{asset('main/images/product/product3.jpg')}}" style = "width:100%;height:auto;border-radius:7px;"/>
                        <p style = "font-size:1.5vw;margin-top:10px;padding-left:10px;"><b>Trending</b> <span id = "product_category" class = "maroon_color"><b>Sleeves</b></span></p>
                        {{-- <p style = "font-size:13px;margin-top:10px;padding-left:10px;"><b>#TK200153</b></p> --}}
                        <p style = "font-size:2vw;margin-top:2px;padding-left:10px;"><b>Navy Sleeves </b></p>
                        <p style = "font-size:1.3vw;margin-top:10px;padding-left:10px;">Uncover style gems with our chic, mix-ready sets. <br><br><span class = "maroon_color" style = "font-weight:bold;">Read the Spesification <i class="fa fa-angle-right maroon_color" aria-hidden="true"></i></span></p> <i class="bi bi-arrow-right"></i>

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
                        <image src = "{{asset('main/images/product/product1.jpg')}}" style = "width:100%;height:auto;border-radius:7px;"/>
                        <p style = "font-size:1em;margin-top:10px;padding-left:10px;"><b>Trending</b> <span id = "product_category" class = "maroon_color" style = "font-size:20px"><b>Skirts</b></span></p>
                        {{-- <p style = "font-size:13px;margin-top:10px;padding-left:10px;"><b>#TK200153</b></p> --}}
                        <p style = "font-size:21px;margin-top:2px;padding-left:10px;"><b>Long Skirt</b></p>
                        <p style = "font-size:17px;margin-top:10px;padding-left:10px;">Uncover style gems with our chic, mix-ready sets. <br><br><span class = "maroon_color" style = "font-weight:bold;">Read the Spesification <i class="fa fa-angle-right maroon_color" aria-hidden="true"></i></span></p> <i class="bi bi-arrow-right"></i>
                    

                    </div>
                    <div class = "col-3">
                        <image src = "{{asset('main/images/product/product2.jpg')}}" style = "width:100%;height:auto;border-radius:7px;"/>
                        <p style = "font-size:17px;margin-top:10px;padding-left:10px;"><b>Trending</b> <span id = "product_category" class = "maroon_color"><b>Sleeves</b></span></p>
                        {{-- <p style = "font-size:13px;margin-top:10px;padding-left:10px;"><b>#TK200153</b></p> --}}
                        <p style = "font-size:21px;margin-top:2px;padding-left:10px;"><b>Navy Sleeves </b></p>
                        <p style = "font-size:17px;margin-top:10px;padding-left:10px;">Uncover style gems with our chic, mix-ready sets. <br><br><span class = "maroon_color" style = "font-weight:bold;">Read the Spesification <i class="fa fa-angle-right maroon_color" aria-hidden="true"></i></span></p> <i class="bi bi-arrow-right"></i>

                    </div>
                    <div class = "col-3">
                        <image src = "{{asset('main/images/product/product3.jpg')}}" style = "width:100%;height:auto;border-radius:7px;"/>
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

    <div id="modal-container">
 
        <div class="modal-background">
          <div class="card" style = "margin:auto;width:350px;height:500px;;">
            <img src="{{asset('main/images/product/product1.jpg')}}" alt="Avatar" style="width:100%;height:350px;border-radius:5px;">
            <div class="container" style = "padding:5px;position:relative">
              <h2 style = "margin-top :20px;">Long Skirt</h2>
              <p>Variant : <span class="dot" style = "background-color:pink;"></span>&nbsp;<span class="dot" style = "background-color:navy;"></span></p>
              <p>Uncover style gems with our chic, mix-ready setsasdasdsadsadsa.Uncover style gems with our chic, mix-ready setsasdasdsadsadsa</p>
              <button id  ="button_admin_modal" style = "background-color:#800e13; color:white;">Ask Admin</button>
              <button id  ="button_admin_modal" style = "background-color:#800e13; color:white;">See price</button> 
              <br>
            </div>
          </div> 
          {{-- <div class="modal"> --}}
            
            {{-- <img src = "{{asset('main/images/product/product1.jpg')}}" style = "width:240px;height:270px;border-radius:7px;"/>

            <h2 style = "margin-top :20px;">Long Skirt</h2>
           
            <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
                                      <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
            </svg>
            <button id  ="button_admin_modal" style = "background-color:#800e13; color:white;">Ask Admin</button>
            <button id  ="button_admin_modal" style = "background-color:#800e13; color:white;">See price</button> --}}
          {{-- </div> --}}
        </div>
      </div>
      
  </body>
</html>
<script src="{{asset('main/js/script.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script>
    function openmodal(){
        var buttonId = "six";
            $('#modal-container').removeAttr('class').addClass(buttonId);
            $('body').addClass('modal-active');
    }
    $('#modal-container').click(function(){
            $(this).addClass('out');
            $('body').removeClass('modal-active');
        });
</script>
