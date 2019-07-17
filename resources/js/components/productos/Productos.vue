<template>
  <div class="">
      <button class="btn btn-success" type="button" name="button" v-on:click="onClickAgregarProducto()"><i class="fa fa-plus"></i> Agregar</button>
      <div class="row p-4">
        <table>
          <thead>
            <td class="espacio border">ID</td>
            <td class="espacio border">Nombre</td>
            <td class="espacio border">Descripcion</td>
            <td class="espacio border">Precio</td>
            <td class="espacio border">Categoria</td>
            <td class="espacio border">Editar</td>
            <td class="espacio border">Eliminar</td>
          </thead>
          <tbody>
            <ProductosTable-component
              v-for="(producto, index) in productos"
              :key="producto.id"
              :producto="producto"
              @delete='eliminarProducto(index,)'
              @update='actualizarProducto(index)'
              >
            </ProductosTable-component>
          </tbody>
       </table>
      </div>
      <ProductosForm-component id="productos_form" @new='agregarProducto'></ProductosForm-component>

  </div>
</template>

<script>
    export default {
        data(){
          return {
            productos:[],
            mostrarProductosForm:false
          };
        },
        mounted() {
          console.log('Component mounted. Admin')
          productos_form.style.visibility = "hidden"
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
            productos_form.style.visibility = "visible"
            $("#modal-md .modal-title").html("Nuevo Producto");
            $("#modal-md .modal-body").html(productos_form);
            $("#modal-md").modal("show");
          }
        }
    }
</script>
