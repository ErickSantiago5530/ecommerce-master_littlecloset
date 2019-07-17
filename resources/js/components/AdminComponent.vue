<template>
  <!-- Preloader -->
  <div class="container">
    <h1>hola admin</h1>
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 border">
        <button class="btn btn-primary" type="button" name="button" v-on:click="onClickMostrarProductos()">Productos</button>
      </div>
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 border">
        <Productos-component v-if="mostrarProductos"></Productos-component>
      </div>
    </div>
    <div class="modal fade" id="modal-lg" tabindex="-1" role="dialog" aria-labelledby="modalCrudPhalconLabel" aria-hidden="true" style=" display: none;" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header encabezado_modal">
            <div class="modal-title titulo_modal"></div>
            <button type="button" class="close" aria-hidden="true" v-on:click="cerrarModallg">×</button>
          </div>
          <div class="modal-body"> </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modal-md" tabindex="-1" role="dialog" aria-labelledby="modalCrudPhalconLabel" aria-hidden="true" style=" display: none;" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header encabezado_modal">
            <div class="modal-title titulo_modal"></div>
            <button type="button" class="close" aria-hidden="true" v-on:click="cerrarModalmd">×</button>
          </div>
          <div class="modal-body"> </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modal-sm" tabindex="-1" role="dialog" aria-labelledby="modalCrudPhalconLabel" aria-hidden="true" style=" display: none;" data-backdrop="static" data-keyboard="false">
      	<div class="modal-dialog modal-sm">
      		<div class="modal-content">
      			<div class="modal-header encabezado_modal">
              <div class="modal-title titulo_modal"></div>
      				<button type="button" class="close" aria-hidden="true" v-on:click="cerrarModalsm">×</button>
      			</div>
      			<div class="modal-body"> </div>
      		</div>
      	</div>
      </div>
  </div>
</template>

<style media="screen">
  .container{
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
</style>

<script>
    export default {
      data(){
        return {
          mostrarProductos :false,
        };
      },
      mounted() {
      },
      methods:{
        onClickMostrarProductos(){
          this.mostrarProductos = true;
        },
        cerrarModalsm(){
          $('#modal-sm').modal('hide')
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
