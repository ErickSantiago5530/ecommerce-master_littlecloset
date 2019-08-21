<template>
    <div class="owl-item">
            <div class="background_image" :style="imagen_fondo"></div>
            <div class="container fill_height">
                <div class="row fill_height">
                    <div class="col fill_height">
                        <div class="home_container d-flex flex-column align-items-center justify-content-start">
                            <div class="home_content">
                                <div class="home_title"></div>
                                <div class="home_subtitle"> {{slide.titulo}}</div>
                                <div class="home_items">
                                    <div class="row">
                                        <div class="col-sm-3 offset-lg-1">
                                            <div class="home_item_side"><a href="product.html"><img :src="imagen2" alt=""></a></div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                            <div class="product home_item_large">
                                                <div class="product_tag d-flex flex-column align-items-center justify-content-center">
                                                    <div>
                                                        <div>a solo</div>
                                                        <div>{{precio_oferta}}<span>.{{centavos_oferta}}</span></div>
                                                    </div>
                                                </div>
                                                <div class="product_image"><img :src="imagen1" alt=""></div>
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
                                                            <div class="product_price text-right">{{ precio}}<span>.{{ centavos }}</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="product_buttons">
                                                        <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                                            <div v-on:click="agregarFavoritos" class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                                                <div><div><img src="images/heart.svg" alt=""><div>+</div></div></div>
                                                            </div>
                                                            <div v-on:click="agregaCarrito" class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                                                <div><div><img src="images/cart_2.svg" alt=""><div>+</div></div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="home_item_side"><a href="product.html"><img :src="imagen3" alt=""></a></div>
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
        props:["slide","url"],
        data(){
            return {
                imagen1:"",
                imagen2:"",
                imagen3:"",
                imagen_fondo:"",
                precio:"",
                centavos:"",
                precio_oferta:"",
                centavos_oferta:"",
                ruta:""               
            }
        },
        mounted() {
            console.log(this.slide)
            console.log(this.slide.id_producto1)
            this.agregaPrecios()
            this.agregaImagenes()
        },
        methods:{
            agregaImagenes(){
                this.ruta = this.url+"/images/productos/"
                this.imagen1 = this.ruta+this.slide.imagen1
                this.imagen2 = this.ruta+this.slide.imagen2
                this.imagen3 = this.ruta+this.slide.imagen3
                this.ruta_fondo = this.url+"/images/carrucel/"
                this.imagen_fondo = "background-image:url("+this.ruta_fondo+this.slide.imagen_fondo+")";
                console.log(this.imagen_fondo)
            },
            agregaPrecios(){
                var precio_generado = this.generaPrecio(this.slide.precio);
                this.precio = precio_generado['pesos'];
                this.centavos = precio_generado['centavos'];
                var precio_generado = this.generaPrecio(this.slide.precio_oferta);
                this.precio_oferta = precio_generado['pesos'];
                this.centavos_oferta = precio_generado['centavos'];
            },
            generaPrecio(precio){
                var arr_precio = new Array();
                var pesos = "";
                var centavos = "";
                arr_precio = precio.split('.');
                if (arr_precio.length>1) {
                    pesos = arr_precio[0];
                    centavos = arr_precio[1];
                }else{
                    pesos = arr_precio[0];
                }
                return {pesos:pesos,centavos:centavos}
            },
            agregaCarrito(){
                var dataSend = {id:this.slide.id_producto}
                axios.post('/in_shopping_carts',dataSend).then((response)=>{
                    $("#productCount").text(response.data.products_count);     
                    alertify.success('Se agrego correctamente al Carrito');
                })
            },
            agregarFavoritos(){
                var dataSend = {id_producto:this.slide.id_producto}
                axios.post('/favoritos',dataSend).then((response)=>{
                    alertify.success('Se agrego correctamente a Favoritos');
                }).catch(error => {
                    window.open("/login");
                })
            }
        }
    }
</script>