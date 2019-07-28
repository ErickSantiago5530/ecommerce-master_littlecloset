<template>
  <tr>
    <td class="espaciotable border">
      <input v-if="modoEditar" class="form-control" type="text" name="" value="" v-model="producto.id">
      <p v-else> {{producto.id}}</p>
    </td>
    <td class="espaciotable border">
      <input v-if="modoEditar" class="form-control" type="text" name="" value="" v-model="producto.titulo">
      <p v-else> {{producto.titulo}}</p>
    </td>
    <td class="espaciotable border">
      <input v-if="modoEditar" class="form-control" type="text" name="" value="" v-model="producto.descripcion">
      <p v-else> {{producto.descripcion}}</p>
    </td>
    <td class="espaciotable border">
      <input v-if="modoEditar" class="form-control" type="text" name="" value="" v-model="producto.precio">
      <p v-else> {{producto.precio}}</p>
    </td>
    <td class="espaciotable border">
      <input v-if="modoEditar" class="form-control" type="text" name="" value="" v-model="producto.id_categoria">
      <p v-else> {{producto.id_categoria}}</p>
    </td>
    <td class="espaciotable border">
      <!-- <button v-if="modoEditar" type="button" name="button" class="btn btn-success btn-xs" v-on:click="onClickUpdate">Guardar Cambios</button>
      <button v-else type="button" name="button" class="btn btn-warning btn-xs" v-on:click="onClickEdit">Edit</button> -->
      <button  type="button" name="button" class="btn btn-warning btn-xs" v-on:click="onClickEditForm">Edit</button>
    </td>
    <td class="espaciotable border"><button type="button" name="button" class="btn btn-danger btn-xs" v-on:click="onClickDelete">Delete</button></td>
  </tr>
</template>

<script>
    export default {
        props:['producto'],
        data(){
          return {modoEditar:false};
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
          onClickEdit(){
            console.log('eshora de editar');
            this.modoEditar = true;
          },
          onClickUpdate(){
            const params = {
              titulo: this.producto.titulo,
              descripcion:this.producto.descripcion,
              precio:this.producto.precio,
              id_categoria:this.producto.id_categoria
            }
            axios.put('/products/'+this.producto.id,params).then((response)=>{
              console.log(response);
              this.modoEditar = false;
              const producto = response.data.producto;
              this.$emit('update',producto)
              alert(response.data.rs)
            })

          },
          onClickDelete(){
            axios.delete('/products/'+this.producto.id).then((response)=>{
              console.log(response);
              this.modoEditar = false;
              this.$emit('delete') //nombre del evento y objeto
              alert(response.data.rs)
            })
          },
          onClickEditForm(){
            console.log(this.producto);
            this.$emit('actualizar',this.producto)
          }
        }
    }
</script>
