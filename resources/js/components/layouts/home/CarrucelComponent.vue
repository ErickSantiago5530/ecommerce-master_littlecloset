<template>
    <div class="owl-carousel owl-theme home_slider">
        <!-- Slide -->
        <Slide-component
        v-for="slide in carrucel"
        :key="slide.id"
        :slide = "slide"
        :url= "url"
        ></Slide-component>
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
					this.url = response.data.url_path;
				});
			},
        }
    }
</script>