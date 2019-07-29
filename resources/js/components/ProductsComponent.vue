<template>
  <div class="row products_row">
    <!-- Product -->
    <product-component  v-for="product in products" :key="product.id" :product="product"></product-component>
  </div>


</template>

<script>
    export default {
        data(){
          return {
            products:[]
          };
        },

        mounted() {
            console.log('Component mounted. Producs Vue')
            axios.get('/products/').then((response)=>{
                this.products = response.data;
                console.log(response.data)
            })
        }
    }
</script>
