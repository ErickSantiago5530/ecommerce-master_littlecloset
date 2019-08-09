<template>
  <div class="">
    <form class="" action="index.html" method="post" v-on:submit.prevent="onSubmitActualizaProducto()">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <label for="">ID:</label>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <input class="form-control" type="text" name="titulo" value="" v-model="id" disabled>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <label for="">Nombre</label>

        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <input class="form-control" type="text" name="descripcion" value="" v-model="nombre">
        </div>

      </div>
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
          <input class="form-control" type="textarea" name="descripcion" value="" v-model="descripcion">
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
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          Imagen de Fondo:
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <input type="file" v-on:change="processFile($event)" id="file2" accept=".png,.jpg">
        </div>

      </div>
      <div class="row">
        <button type="submit" class="btn btn-warning btn-sm btn-block" name="button">Actualizar Producto</button>
      </div>
    </form>
  </div>
</template>

<script>
    export default {
        props:['box'],
        data(){
          return {
            id:'',
            nombre:'',
            titulo:'',
            descripcion:'',
            precio:'',
            id_categoria:'',
            imagen:'',
            imagen2:'',
          };
        },
        mounted() {
          console.log('Component mounted EDIT')
          console.log(this.box)
          if (this.box.length>0) {
            this.id = this.box[0].id;
            this.nombre = this.box[0].nombre;
            this.titulo = this.box[0].titulo;
            this.descripcion = this.box[0].descripcion;
          }
        },
        methods:{
          processFile(event) {
            console.log(event);
            if(event.srcElement.id=='file2'){
              this.imagen2 = event.target.files[0]
            }else{
              
              this.imagen = event.target.files[0]
            }
            // console.log(event);
            // this.imagen = event.target.files[0]
          },
          onSubmitActualizaProducto(){
            console.log('emitiendo producto');
            var formData = new FormData();
            var imagefile = document.querySelector('#file');
            var imagefile2 = document.querySelector('#file2');
            formData.append("titulo",this.titulo);
            formData.append("descripcion",this.descripcion);
            formData.append("nombre",this.nombre);
            formData.append("id_categoria",this.id_categoria);            
            formData.append('_method', 'PATCH');
            formData.append("image", imagefile.files[0]);
            formData.append("image2", imagefile2.files[0]);
            console.log('Este es el formData');
            console.log(formData);
            
            axios.post('/boxes/'+this.id,formData,{
              headers: {
                'Content-Type': 'multipart/form-data'
              }
            }).then((response)=>{
              const producto = response.data;
              this.$emit('actualiza',producto);
              $('#modal-form').modal('hide')
            });
          },
        }
    }
</script>
