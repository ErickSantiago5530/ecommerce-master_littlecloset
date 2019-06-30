<div class="menu">

  <!-- Search -->
  <div class="menu_search">
    <form action="#" id="menu_search_form" class="menu_search_form">
      <input type="text" class="search_input" placeholder="Search Item" required="required">
      <button class="menu_search_button">
        <img src="{{ url('images/search.png') }}" alt="">
      </button>
    </form>
  </div>
  <!-- Navigation -->
  <div class="menu_nav">
    <ul>
      <li><a href="#">Women</a></li>
      <li><a href="#">Men</a></li>
      <li><a href="#">Kids</a></li>
      <li><a href="#">Home Deco</a></li>
      <li><a href="#">Contact</a></li>
      @guest
          <li>
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
              <li>
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
          {{-- <li class="nav-item dropdown"> --}}
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> --}}
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              {{-- </div> --}}
          {{-- </li> --}}
      @endguest
    </ul>
  </div>
  <!-- Contact Info -->
  <div class="menu_contact">
    <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
      <div><div><img src="{{ url('images/phone.svg') }}" alt=""></div></div>
      <div>+1 912-252-7350</div>
    </div>
    <div class="menu_social">
      <ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
</div>

<header class="header">
  <div class="header_overlay"></div>
  <div class="header_content d-flex flex-row align-items-center justify-content-start">
    <div class="logo">
      <a href="{{ url('/') }}">
        <div class="d-flex flex-row align-items-center justify-content-start">
          <div><img src=" {{ url('images/logo_1.png') }}" alt=""></div>
          <div>Ecommerce - Little Closet</div>
        </div>
      </a>
    </div>
    <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
    <nav class="main_nav">
      <ul class="d-flex flex-row align-items-start justify-content-start">
        <li class="active"><a href="#">Women</a></li>
        <li><a href="#">Men</a></li>
        <li><a href="#">Kids</a></li>
        <li><a href="#">Home Deco</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
      <!-- Search -->
      <div class="header_search">
        <form action="#" id="header_search_form">
          <input type="text" class="search_input" placeholder="Buscar Producto" required="required">
          <button class="header_search_button"><img src=" {{ url('images/search.png') }}" alt=""></button>
        </form>
      </div>
      <!-- User -->
       @guest
       @else
         <div class="user"><a href="{{ url('/home') }}"><div><img class="svg" src=" {{ url('images/user.svg') }}" alt=""><div>{{ strtoupper(substr(Auth::user()->name,0,1)) }}</div></div></a></div>
       @endguest
      <div class="user"><a href="cart.html"><div><img class="svg" src=" {{ url('images/cart.svg') }}" alt=""><div>{{ $productsCount }}</div></div></a></div>
      <!-- Cart -->
      {{-- <div class="cart"><a href="cart.html"><div><img class="svg" src=" {{ url('images/cart.svg') }}" alt=""></div></a></div> --}}
      <!-- Phone -->
      <div class="header_phone d-flex flex-row align-items-center justify-content-start">
        <div><div><img src=" {{ url('images/phone.svg') }}" alt=""></div></div>
        <div>+1 912-252-7350</div>
      </div>
    </div>
  </div>
</header>
