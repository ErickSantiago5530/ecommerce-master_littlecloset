<template>
  <div class="">
      <button class="btn btn-success" type="button" name="button" v-on:click="onClickAgregarProducto"><i class="fa fa-plus"></i> Agregar</button>
      <div class="row p-4">
        <table>
          <thead>
            <td class="espacio border">ID</td>
            <td class="espacio border">Nombre</td>
            <td class="espacio border">Descripcion</td>
            <td class="espacio border">Precio</td>
            <td class="espacio border">Categoria</td>
            <td class=" border">Editar</td>
            <td class=" border">Eliminar</td>
          </thead>
          <tbody>
            <ProductosTable-component
              v-for="(producto, index) in productos"
              :key="producto.id"
              :producto="producto"
              @delete='eliminarProducto(index,)'
              @update='actualizarProducto(index)'
              @actualizar='actualizarFormProducto(index)'
              >
            </ProductosTable-component>
          </tbody>
       </table>
      </div>

      <div class="modal fade"  id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modalCrudPhalconLabel" aria-hidden="true" style=" display: none;" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header encabezado_modal">
              <div class="modal-title titulo_modal">
                <h3 v-if="mostrarProductosForm">Agregar Productos</h3>
                <h3 v-else>Actualiza Productos</h3>
              </div>
              <button type="button" class="close" aria-hidden="true" v-on:click="cerrarmodalForm">×</button>
            </div>
            <div class="modal-body">
              <ProductosForm-component v-if="mostrarProductosForm" @new='agregarProducto'></ProductosForm-component>
              <ProductosEdit-component v-else :producto="producto_edit" @new='agregarProducto'></ProductosEdit-component>
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
            productos:[],
            producto_edit:[],
            mostrarProductosForm:true
          };
        },
        mounted() {
          console.log('Component mounted. Admin')
          // productos_form.style.visibility = "hidden"
          axios.get('/products').then((response)=>{
            console.log(response);
            this.productos = response.data;
          });
        },
        methods:{
          agregarProducto(producto){
            this.productos.push(producto)
          },
          eliminarProducto(index){
            this.productos.splice(index,1);
          },
          actualizarProducto(index,producto){
            this.productos[index] = producto;
          },
          onClickAgregarProducto(){
            this.producto_edit.splice(1,this.producto_edit.length);
            console.log(this.producto_edit);
            this.mostrarProductosForm = true;
            $('#modal-form').modal('show')
            console.log(this.mostrarProductosForm);
          },
          cerrarmodalForm(){
            $('#modal-form').modal('hide')
          },
          cerrarModallg(){

          },
          actualizarFormProducto(index){
            // this.producto_edit.push(this.productos[index]);
            this.producto_edit[0] = this.productos[index];
            this.mostrarProductosForm = false;
            $('#modal-form').modal('show')

          },
        }
    }
</script>
