<template>
    <div class="box">
        <div class="background_image" :style="imagen1"></div>
        <!-- <div class="background_image" style="background-image:url(images/box_3.jpg)"></div> -->
        <div class="box_content d-flex flex-row align-items-center justify-content-start">
            <div class="box_left">
                <div class="box_image">
                    <a href="category.html">
                        <div class="background_image" :style="imagen2"></div>
                    </a>
                </div>
            </div>
            <div class="box_right text-center">
                <div class="box_title">{{box.titulo}}</div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['box',"url"],
		data(){
			return {
                titulo:"",
                nombre:"",
                imagen1:"",
                imagen2:"",
                ruta_image:""
			}
		},
        mounted() {
            console.log('Component mounted.')
            this.ruta_image = this.url+"/images/boxes/";
            this.imagen1 = "background-image:url("+this.ruta_image+this.box.img1+")";
            this.imagen2 = "background-image:url("+this.ruta_image+this.box.img2+")";
            console.log(this.imagen1);
            console.log(this.imagen2);
		},
		methods:{
			
		}
		
    }
</script>
