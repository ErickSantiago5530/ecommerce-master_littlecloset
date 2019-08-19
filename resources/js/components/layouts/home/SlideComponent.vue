<template>
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
</template>

<script>
    export default {
        mounted() {
            console.log('Component Home.')
        }
    }
</script>