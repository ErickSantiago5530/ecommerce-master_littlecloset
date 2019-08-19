<template>
    <div class="col-xl-4 col-md-6">
        <div class="product">
            <!-- <div class="product_image"><img src="images/product_1.jpg" alt=""></div> -->
            <div class="product_image"><img :src="imagen" alt=""></div>
            <div class="product_content">
                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                    <div>
                        <div>
                            <div class="product_name"><a href="product.html">{{producto.titulo}}</a></div>
                            <div class="product_category">En <a href="category.html">{{producto.nombre_categoria}}</a></div>
                        </div>
                    </div>
                    <div class="ml-auto text-right">
                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                        <div class="product_price text-right">{{ producto.precio}}<span>{{ producto.centavos }}</span></div>
                    </div>
                </div>
                <div class="product_buttons">
                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                        <div v-on:click="agregarFavoritos" class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                            <div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
                        </div>
                        <div v-on:click="agregaCarrito" class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                            <div><div><img src="images/cart.svg" class="svg" alt="" ><div>+</div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['producto',"url"],
        data(){
            return{
                id:"",
                titulo:"",
                descripcion:"",
                precio:"",
                centavos:"",
                extension:"",
                nombre_categoria:"",
                ruta_image:"",
                imagen:""
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.ruta_image = this.url+"/images/productos/";
            this.imagen= this.ruta_image+"/"+this.producto.id+"."+this.producto.extension;
            this.generaPrecio(this.producto.precio)
        },
        methods:{
            generaPrecio(precio){
                var arr_precio = new Array();
                arr_precio = precio.split('.');
                if (arr_precio.length>1) {
                    this.precio = arr_precio[0];
                    this.centavos = arr_precio[1];
                }else{
                    this.precio = arr_precio[0];
                }     
            },
            agregaCarrito(){
                console.log(this.producto.id)
                var dataSend = {id:this.producto.id}
                axios.post('/in_shopping_carts',dataSend).then((response)=>{
                    $("#productCount").text(response.data.products_count);     
                    alertify.success('Se agrego correctamente al Carrito');
                })
            },
            agregarFavoritos(){
                var dataSend = {id_producto:this.producto.id}
                axios.post('/favoritos',dataSend).then((response)=>{
                    alertify.success('Se agrego correctamente a Favoritos');
                }).catch(error => {
                    window.open("/login");
                })
            }
        }        
    }
</script>
