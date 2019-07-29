<template>

  <div class="col-xl-4 col-md-6">
    <div class="product">
      <div class="product_image"><img :src="this.src_imagen" alt=""></div>
      <!-- <div class="product_image"><img src="/products/images/1.jpg" alt=""></div> -->
      <div class="product_content">
        <div class="product_info d-flex flex-row align-items-start justify-content-start">
          <div>
            <div>
              <div class="product_name"><a href="product.html">{{ product.titulo }}</a></div>
              <div class="product_category">En <a href="category.html">{{ product.nombre_categoria }}</a></div>
            </div>
          </div>
          <div class="ml-auto text-right">
            <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
            <div class="product_price text-right">${{ this.precio }}<span>.{{ this.centavos }}</span></div>
            <!-- <div class="product_price text-right"> {{ this.precio }}</div> -->
          </div>
        </div>
        <div class="product_buttons">
          <div class="text-right d-flex flex-row align-items-start justify-content-start">
            <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
              <div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
            </div>
            <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
              <div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>

</template>

<script>
    export default {
      props: ['product'],
      data(){
        return {
          id:'',
          precio:'60',
          centavos:'',
          titulo:'',
          descripcion:'',
          src_imagen:''
        };
      },
      mounted() {
          this.dividePrecio(this.product.precio);
          this.cargaimagen(this.product.imagen);

      },
      methods:{
        dividePrecio(precio){
          let porciones = precio.split('.');
          this.precio = porciones[0]
          if(porciones.length>0){
            this.centavos = porciones[1]
          }
        },
        cargaimagen(img){
          this.src_imagen = '/products/images/productos/'+this.product.id+"."+this.product.extension 
          console.log(this.src_imagen);         
        }
      }
    }
</script>
