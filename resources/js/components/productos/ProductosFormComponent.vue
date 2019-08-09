<template>
  <div class="">
    <form class="" action="index.html" method="post" v-on:submit.prevent="onSubmitNuevoProducto()">

      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <label for="">Titulo</label>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <input class="form-control" type="text" name="titulo" value="" v-model="titulo">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <label for="">Descripcion</label>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <input class="form-control" type="text" name="descripcion" value="" v-model="descripcion">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <label for="">precio</label>

        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <input class="form-control" type="text" name="descripcion" value="" v-model="precio">
        </div>

      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <label for="">Categoria</label>

        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <select class="form-control" name="" v-model="id_categoria">
            <option value="1" selected>Uniformes</option>
            <option value="2">Deportes</option>
            <option value="3">Urbano</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          Imagen:
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <input type="file" v-on:change="processFile($event)" id="file" accept=".png,.jpg">
        </div>

      </div>

      <div class="row p-3">
        <button type="submit" class="btn btn-success btn-sm btn-block" name="button">Agregar Producto</button>
      </div>
    </form>
  </div>
</template>

<script>
    export default {
        props:['producto'],
        data(){
          return {
            id:'',
            titulo:'',
            descripcion:'',
            precio:'',
            id_categoria:'',
            imagen:'',
            file:'',
            imagen:'',
          };
        },
        mounted() {
          console.log('Component mounted FORM')
        },
        methods:{
          processFile(event) {
            console.log(event);
            this.imagen = event.target.files[0]
          },
          onSubmitNuevoProducto(){
            
            var formData = new FormData();
            var imagefile = document.querySelector('#file');
            formData.append("image", imagefile.files[0]);
            formData.append("titulo",this.titulo);
            formData.append("descripcion",this.descripcion);
            formData.append("precio",this.precio);
            formData.append("id_categoria",this.id_categoria);
            axios.post('/products',formData,{
              headers: {
                'Content-Type': 'multipart/form-data'
              }
            }).then((response)=>{
              const producto = response.data;
              this.$emit('new',producto);
            });

            //limpiamos los imput
            this.titulo = '';
            this.descripcion = '';
            this.precio = '';
            this.id_categoria = '';
            this.imagen = '';
            $('#modal-form').modal('hide')
          },
        }
    }
</script>
