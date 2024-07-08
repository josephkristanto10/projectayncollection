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
            top: 40%;  
            /* width: 23em; */
            margin: 0 auto;
            border-right: 2px solid rgba(255,255,255,.75);
            font-size: 180%;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            /* transform: translateY(-50%);     */
        }

        /* Animation */
        .anim-typewriter{
        animation: typewriter 4s steps(44) 1s 1 normal both,
                    blinkTextCursor 500ms steps(44) infinite normal;
        }
        @keyframes typewriter{
        from{width: 0;}
        to{width: 15em;}
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


@media (max-width: 767px) {  

  .code_products{
    font-size:1.9vw !important;
}
.name_products{
    font-size:2.1vw !important;
}
  #spacing_best_seller_mobile{
    display:block !important;
  }
  #tulisan_best_seller{
    font-size:20px !important;
}

  .mycards img{
    height:200px !important;
  }
  .mycards{
  align-items: center;
  margin-left: 10px;
  margin-right: 10px;
  display: grid;
  grid-gap: 10px;
  grid-template-columns: repeat(2,  1fr);
}
  .line-1{
    font-size:140%;
  }
  .garis{
    display:none !important;
  }
  

  #footer_follow_us{
    font-size: 2vw;
  }
  #footer_instagram{
    width:15vw !important;
    font-size:1.5vw !important;
  }
  #footer_tiktok{
    width:15vw !important;
    font-size:1.5vw !important;
  }
  #footer_shopee{
    width:15vw !important;
    font-size:1.5vw !important;
  }

  #footer_contact_us{
    margin-top:20px !important;
    width:105px !important;
    font-size:2vw !important;
  }
  #footer_admin_1{
    width:135px !important;
    font-size:2vw !important;
  }
  #footer_admin_2{
    width:135px !important;
    font-size:2vw !important;
  }
  #footer_ayn_collection{
    font-size: 2.5vw;
  }
  
  #footer_tagline{
    font-size: 2vw !important;
  }
  #kotak_ayn_collection{
    margin-top:20px !important;
  }

  
  .description_product{
    font-size: 1.8vw !important;
  }
  .category_product{
    font-size:3vw !important;
  }
  #limitideas{
    font-size:2.2vw !important;
    bottom:100px !important;left:25px;
  }
  #pesan_wa{
    font-size:10px !important;
  }

}


@media (min-width: 768px) { 
  .code_products{
        font-size:1.2vw !important;
    }
  .mycards{
  align-items: center;
  margin-left: 10px;
  margin-right: 10px;
  display: grid;
  grid-gap: 10px;
  grid-template-columns: repeat(3,  1fr);
}
  .mycards img{
    height:300px !important;
  }
  #spacing_best_seller_mobile{
    display:block !important;
  }
  .line-1{
    font-size:140%;
  }

  #footer_follow_us{
    font-size: 1.5vw;
  }
  #footer_instagram{
    width:105px !important;
    font-size:1vw !important;
  }
  #footer_tiktok{
    width:105px !important;
    font-size:1vw !important;
  }
  #footer_shopee{
    width:105px !important;
    font-size:1vw !important;
  }
  
  #kotak_ayn_collection{
    margin-top:20px ;
  }
  #footer_tagline{
    font-size: 1vw;
  }
  

 }


@media (min-width: 992px) { 
  .mycards{
  align-items: center;
  margin-left: 10px;
  margin-right: 10px;
  display: grid;
  grid-gap: 10px;
  grid-template-columns: repeat(4,  1fr);
}
  #footer_follow_us{
    font-size: 2vw;
  }
  #footer_instagram{
    width:155px !important;
    font-size:1vw !important;
  }
  #footer_tiktok{
    width:135px !important;
    font-size:1vw !important;
  }
  #footer_shopee{
    width:135px !important;
    font-size:1vw !important;
  }
  



 }




/* custom stylings */
.wrapper, .scroll-wrapper {
    padding: 5px;
}
.scroll-wrapper.mac + .scrollBarContainer{
    background-color: transparent;
}
.scrollBarContainer.animate .scroll{
    transition: 2s opacity ease;
    -ms-transition: 2s opacity ease;
    opacity: 0;
}
.scrollBarContainer:hover .scroll{
    opacity: 0.5;
    transition: none;
    -ms-transition: none;
}
.unselectable {
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: -moz-none;
    -o-user-select: none;
    user-select: none;
}

.scroll{
    border-radius: 10px;
}
.wrapper + .scrollBarContainer{
    background-color: #eee9ee;
}
.scrollBar {
    background-color: #60F509;
    border-radius: 10px;
    opacity: 0.5;
}
.scroll-bar{
    background-color: #14D1E0;
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
    /* height: 100%; */
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
    <div style = "width:100%;height:800px;;background-image:url('{{asset('main/images/landing_page.jpg')}}');background-size:cover;position:relative;">
      <span id = "limitideas" style = "color:white;position:absolute;bottom:20px;left:25px;font-size:1.5vw;background-color:#800e13;border-radius:40px;padding:10px;animation:3.5s fadeIns infinite">Dont limit your outfit <u>ideas</u>.</span>
    </div>
    <div class = "main_content" >
        <div class = "buythelatest_section" style = "text-align:center;padding:20px;">
            <span id = "buythe_style">Buy The</span> <span class = "maroon_color_bold" id = "latest_style">Latest</span>
            <div class = "product">
             
                <div class = "row  justify-content-center" style = "text-align:center;margin-bottom:10px;margin-top:10px;" id = "product_list">
                  <div class = "mycards">
              @foreach($latest_product as $lp)
        
              <div class="flex flex-col" style = "text-align:left;"><image id = "gambar_product" src = "{{asset('main/images/product/')}}/{{$lp->images}}" style = "width:100% !important;max-width:500px;;height:300px;border-radius:7px;"/>
                <p style = "margin-top:10px;padding-left:10px; font-size:1.5vw;margin-bottom:0px !important;"><span id = "product_category" class = "maroon_color category_product" style = "font-size:1.5vw"><b>{{$lp->category_name}}</b></span></p>
                <p class = 'name_products' style = "font-size:1.4vw;margin-top:2px;padding-left:10px;font-weight:bold;margin-bottom:0px !important;">{{$lp->name}}</p>
                <p class = 'code_products' style = "font-size:1.1vw;margin-top:10px;padding-left:10px;">#{{$lp->code}}</p>
                @if(session()->has('verifyuser'))
                <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;">Rp {{number_format($lp->price)}} / Piece</p>
                
                @endif
                <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px; " class = "description_product"><span class = "maroon_color" style = "font-weight:bold;" data-kode = "{{$lp->code}}" data-id = "{{$lp->id}}" onclick = "openmodal(this)">Read the Spesification <i class="fa fa-angle-right maroon_color" aria-hidden="true"></i></span></p> <i class="bi bi-arrow-right"></i>
               </div>
                @endforeach
              </div>
              </div>
            
            </div>
        </div>
        <div class = "topseller_gbr_section" style = "text-align:center; height:450px; background-size: cover;  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('{{asset('main/images/landing_page2.jpg')}}'); margin-top:20px;margin-bottom:20px;">
         <p class="line-1 anim-typewriter"><span style = "color:white;">Have you try on our </span> <span id = "spacing_best_seller_mobile" style = "display:none;"><br></span> <span class = "maroon_color_bold" style = "font-size:30px;background-color:#800e13;color:white;padding:10px;">BEST SELLER PRODUCT ?</span></p>
        </div>
        <div class = "topseller_product_section" style = "text-align:center; height:100%;position:relative;margin-top:40px;padding-top:20px;padding:20px;">
            <span class = "maroon_color_bold" style = "font-size:30px;color:#131312;padding:10px;">BEST SELLER <u style = "text-decoration: underline;text-decoration-color: #800e13;  text-decoration-thickness: 3px;text-underline-offset: 10px; ">PRODUCT</u></span>
            <div class = "product" style = "padding-top:30px;">
                  <div class = "row  justify-content-center" style = "text-align:center;margin-bottom:10px;margin-top:10px;" id = "product_list">
                    <div class = "mycards">
                @foreach($latest_product as $lp)
          
                <div class="flex flex-col" style = "text-align:left;"><image id = "gambar_product" src = "{{asset('main/images/product/')}}/{{$lp->images}}" style = "width:100% !important;max-width:500px;;height:300px;border-radius:7px;"/>
                  <p style = "margin-top:10px;padding-left:10px; font-size:1.5vw;margin-bottom:0px !important;"><span id = "product_category" class = "maroon_color category_product" style = "font-size:1.5vw"><b>{{$lp->category_name}}</b></span></p>
                  <p style = "font-size:1.4vw;margin-top:2px;padding-left:10px;font-weight:bold;margin-bottom:0px !important;">{{$lp->name}}</p>
                  <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;">#Ayn - {{$lp->code}}</p>
                  @if(session()->has('verifyuser'))
                  <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px;">Rp {{number_format($lp->price)}} / Piece</p>
                  
                  @endif
                  <p style = "font-size:1.1vw;margin-top:10px;padding-left:10px; " class = "description_product"><span class = "maroon_color" style = "font-weight:bold;" data-kode = "{{$lp->code}}" data-id = "{{$lp->id}}" onclick = "openmodal(this)">Read the Spesification <i class="fa fa-angle-right maroon_color" aria-hidden="true"></i></span></p> <i class="bi bi-arrow-right"></i>
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
<script>
  $(document).ready(function () {
    // $('#kartu_detail').slimScroll({ height:"200px" });
    // const ps = PerfectScrollbar('#kartu_detail');

  
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
