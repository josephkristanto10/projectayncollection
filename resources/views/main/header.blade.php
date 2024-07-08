<nav>
    <div class="logo">
      <a  href="{{url('/')}}"><img src="{{asset('main/images/logo.png')}}" alt="logo" /></a>
      {{-- <h2 style = "color:#800e13 !important;font-weight:200px !important;">Ayn Collection</h2> --}}
    </div>
    <ul>
        <li><a  href="{{url('/')}}">
            <span id = "store_name" style = "color:#800e13 ;font-weight:200px !important;">Ayn Collection</span></a></li>
      <li>
        <a href="{{url('/')}}" id = "m1" class = "active"> Home</a>
      </li>
  
      <li>
        <a href="#" id = "m3">About us</a>
      </li>
      <li>
        <a href="#" id = "m4">Contact Us</a>
      </li>
      <li>
        <a href="{{url('/product')}}" id = "m2" class = "special_nav">Product</a>
      </li>
    </ul>
    <div class="hamburger">
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
    </div>
  </nav>
  <div class="menubar">
    <ul>
      <li><a  href="{{url('/')}}">
          <span id = "store_name_mobile" style = "color:#800e13 ;font-weight:200px !important;">Ayn Collection</span></a></li>
    <li>
      <a href="{{url('/')}}" id = "m1" class = "active"> Home</a>
    </li>

    <li>
      <a href="#" id = "m3">About us</a>
    </li>
    <li>
      <a href="#" id = "m4">Contact Us</a>
    </li>
    <li>
      <a href="{{url('/product')}}" id = "m2_mobile" class = "special_nav">Product</a>
    </li>
  </ul>
  </div>