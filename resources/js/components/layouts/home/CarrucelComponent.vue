<template>  
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">
            <Slide-component
                v-for="slide in carrucel"
                :key="slide.id"
                :slide = "slide"
                :url= "url"
            ></Slide-component>
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
    
</template>

<script>
    export default {
        data(){
            return {
                carrucel:[],
                url:""
            }
        },
        mounted() {
            console.log('Component CARRUCEL.')
            this.obtenCarrucel()
        },
        methods:{
            obtenCarrucel(){
				axios.get('/carrucelHome').then((response)=>{
                    this.carrucel = response.data.carrucel;
                    console.log(this.carrucel)
					this.url = response.data.url_path;
				});
			},
        }
    }
</script>