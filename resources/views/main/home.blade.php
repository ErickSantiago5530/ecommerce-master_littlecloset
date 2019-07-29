@extends('layouts.app')
@section('title','Productos')

@section('content')
  <div>
    <div class="home">
      <!-- Home Slider -->
      <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">

          <!-- Slide -->
          <div class="owl-item">
            <div class="background_image" style="background-image:url(images/home.jpg)"></div>
            <div class="container fill_height">
              <div class="row fill_height">
                <div class="col fill_height">
                  <div class="home_container d-flex flex-column align-items-center justify-content-start">
                    <div class="home_content">
                      <div class="home_title">New Arrivals</div>
                      <div class="home_subtitle">Summer Wear</div>
                      <div class="home_items">
                        <div class="row">
                          <div class="col-sm-3 offset-lg-1">
                            <div class="home_item_side"><a href="product.html"><img src="images/home_1.jpg" alt=""></a></div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                            <div class="product home_item_large">
                              <div class="product_tag d-flex flex-column align-items-center justify-content-center">
                                <div>
                                  <div>from</div>
                                  <div>$3<span>.99</span></div>
                                </div>
                              </div>
                              <div class="product_image"><img src="images/home_2.jpg" alt=""></div>
                              <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                  <div>
                                    <div>
                                      <div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
                                      <div class="product_category">In <a href="category.html">Category</a></div>
                                    </div>
                                  </div>
                                  <div class="ml-auto text-right">
                                    <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                    <div class="product_price text-right">$3<span>.99</span></div>
                                  </div>
                                </div>
                                <div class="product_buttons">
                                  <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                    <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                      <div><div><img src="images/heart.svg" alt=""><div>+</div></div></div>
                                    </div>
                                    <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                      <div><div><img src="images/cart_2.svg" alt=""><div>+</div></div></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="home_item_side"><a href="product.html"><img src="images/home_3.jpg" alt=""></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="home_slider_nav home_slider_nav_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
        <div class="home_slider_nav home_slider_nav_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

        <!-- Home Slider Dots -->

        <div class="home_slider_dots_container">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="home_slider_dots">
                  <ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-center">
                    <li class="home_slider_custom_dot active">01</li>
                    <li class="home_slider_custom_dot">02</li>
                    <li class="home_slider_custom_dot">03</li>
                    <li class="home_slider_custom_dot">04</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section_title text-center">Popular on Little Closet</div>
          </div>
        </div>
        <div class="row page_nav_row">
          <div class="col">
            <div class="page_nav">
              <ul class="d-flex flex-row align-items-start justify-content-center">
                <li class="active"><a href="category.html">Women</a></li>
                <li><a href="category.html">Men</a></li>
                <li><a href="category.html">Kids</a></li>
                <li><a href="category.html">Home Deco</a></li>
              </ul>
            </div>
          </div>
        </div>
        <products-component></products-component>
        <div class="row load_more_row">
          <div class="col">
            <div class="button load_more ml-auto mr-auto"><a href="#">load more</a></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Boxes -->
    @include("boxes.boxes")

    <!-- Features -->

    <div class="features">
      <div class="container">
        <div class="row">

          <!-- Feature -->
          <div class="col-lg-4 feature_col">
            <div class="feature d-flex flex-row align-items-start justify-content-start">
              <div class="feature_left">
                <div class="feature_icon"><img src="images/icon_1.svg" alt=""></div>
              </div>
              <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                <div class="feature_title">Metodo de Pago Seguro</div>
              </div>
            </div>
          </div>

          <!-- Feature -->
          <div class="col-lg-4 feature_col">
            <div class="feature d-flex flex-row align-items-start justify-content-start">
              <div class="feature_left">
                <div class="feature_icon ml-auto mr-auto"><img src="images/icon_2.svg" alt=""></div>
              </div>
              <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                <div class="feature_title">Los mejores Productos de calidad</div>
              </div>
            </div>
          </div>

          <!-- Feature -->
          <div class="col-lg-4 feature_col">
            <div class="feature d-flex flex-row align-items-start justify-content-start">
              <div class="feature_left">
                <div class="feature_icon"><img src="images/icon_3.svg" alt=""></div>
              </div>
              <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                <div class="feature_title">Envios a toda la Republica</div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


@endsection
