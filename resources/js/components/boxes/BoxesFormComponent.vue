<template>
  <div class="">
    <form class="" action="index.html" method="post" v-on:submit.prevent="onSubmitNuevoBox()">

      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <label for="">Nombre</label>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <input class="form-control" type="text" name="nombre" value="" v-model="nombre">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <label for="">Titulo</label>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <input class="form-control" type="text" name="Titulo" value="" v-model="titulo">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <label for="">Descripcion</label>

        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <input class="form-control" type="textarea" name="descripcion" value="" v-model="descripcion">
        </div>

      </div>
      <!-- <div class="row">
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
      </div> -->
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          Imagen:
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <input type="file" v-on:change="processFile($event)" id="file" accept=".png,.jpg">
        </div>

      </div>

      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          Imagen De Fondo:
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <input type="file" v-on:change="processFile($event)" id="file2" accept=".png,.jpg">
        </div>

      </div>

      <div class="row p-3">
        <button type="submit" class="btn btn-success btn-sm btn-block" name="button">Agregar Box</button>
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
            nombre:'',
            titulo:'',
            descripcion:'',
            precio:'',
            id_categoria:'',
            imagen:'',
            file:'',
            imagen:'',
            imagen2:'',
          };
        },
        mounted() {
          console.log('Component mounted FORM')
        },
        methods:{
          processFile(event) {
            console.log(event);
            if(event.srcElement.id=='file2'){
              this.imagen2 = event.target.files[0]
            }else{
              
              this.imagen = event.target.files[0]
            }
          },
          onSubmitNuevoBox(){
            var formData = new FormData();
            var imagefile = document.querySelector('#file');
            var imagefile2 = document.querySelector('#file2');
            formData.append("image", imagefile.files[0]);
            formData.append("image2", imagefile2.files[0]);
            formData.append("titulo",this.titulo);
            formData.append("descripcion",this.descripcion);
            formData.append("precio",this.precio);
            formData.append("nombre",this.nombre);
            axios.post('/boxes/'+this.id,formData,{
              headers: {
                'Content-Type': 'multipart/form-data'
              }
            }).then((response)=>{
              console.log(response);
              const producto = response.data;
              this.$emit('new',producto);
            });

            //limpiamos los imput
            this.titulo = '';
            this.descripcion = '';
            this.nombre = '';
            this.id_categoria = '';
            this.imagen = '';
            this.imagen2 = '';
            $('#modal-form').modal('hide')
          },
        }
    }
</script>
