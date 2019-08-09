<template>
  <!-- Preloader -->
  <div class="containeradmin">
    <h1>hola admin</h1>
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 border">
        <button class="btn btn-primary pading_buton" type="button" name="button" v-on:click="onClickMostrar('productos')">Productos</button>
        <button class="btn btn-primary pading_buton" type="button" name="button" v-on:click="onClickMostrar('boxes')">Boxes</button>

      </div>
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 border">
        <Productos-component v-if="mostrarProductos"></Productos-component>
        <boxes-component v-if="mostrarBoxes"></boxes-component>
      </div>
    </div>
  </div>
</template>

<style media="screen">
  .containeradmin{
    padding-top: 50px;
  }
  .border{
    border-radius: 1px;
  }
  .espacio{
    padding: 30px;
  }
  .espaciotable{
    padding: 2px;
  }
  .pading_buton{
    padding:1px;
  }
</style>

<script>
    export default {
      data(){
        return {
          mostrarProductos :false,
          mostrarBoxes :false,
        };
      },
      mounted() {

      },
      methods:{
        onClickMostrar(component){
          console.log('usted pucho'+component);          
          switch (component) {
            case 'productos':
              this.mostrarProductos=true;
              this.mostrarBoxes =false;
              break;
            case 'boxes':
            this.mostrarProductos=false;
            this.mostrarBoxes =true;
            break;
          
            default:
              this.mostrarProductos=false;
              this.mostrarBoxes =false;
              break;              
          }
        },
        cerrarModalsm(){

        },
        cerrarModalmd(){
          $('#modal-md').modal('hide')
        },
        cerrarModallg(){
          $('#modal-lg').modal('hide')
        }

      }

    }
</script>
