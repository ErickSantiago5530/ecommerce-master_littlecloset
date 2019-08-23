<template>    
    <div class="super_container">
        <div class="super_container_inner">
            <div class="super_overlay"></div>
            <!-- Home -->	
            <div class="home">
                <!-- Home Slider -->
                <div class="home_slider_container">
                    <Carrucel-component></Carrucel-component>
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
            <!-- Products -->
            <Homeproductos-component></Homeproductos-component>
            <!-- Boxes -->
            <Homeboxes-component></Homeboxes-component>
            <!-- Features -->
            <Homefeatures-component></Homefeatures-component>
        </div>
    </div>    
</template>
