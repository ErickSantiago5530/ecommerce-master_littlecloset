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
          <input class="form-control" type="number" name="descripcion" value="" v-model="precio">
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
      <div class="row">
        <button type="submit" class="btn btn-warning btn-sm btn-block" name="button">Actualizar Producto</button>
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
          };
        },
        mounted() {
          console.log('Component mounted EDIT')
          console.log(this.producto)
          this.agregarDatos()
        },
        methods:{
          agregarDatos(){
            this.limpiarinputs();
            if (this.producto.length>0) {
              var index = this.producto.length-1;
              this.id = this.producto[index].id;
              this.titulo = this.producto[index].titulo;
              this.descripcion = this.producto[index].descripcion;
              this.precio = this.producto[index].precio;
              this.id_categoria = this.producto[index].id_categoria;
            }
          },
          limpiarinputs(){
            this.id = "";
            this.titulo =  ""; 
            this.descripcion =  ""; 
            this.precio =  ""; 
            this.id_categoria =  ""; 
          },
          processFile(event) {
            console.log(event);
            this.imagen = event.target.files[0]
          },
          onSubmitActualizaProducto(){
            var formData = new FormData();
            var imagefile = document.querySelector('#file');
            formData.append("titulo",this.titulo);
            formData.append("descripcion",this.descripcion);
            formData.append("precio",this.precio);
            formData.append("id_categoria",this.id_categoria);            
            formData.append('_method', 'PATCH');
            formData.append("image", imagefile.files[0]);
            
            axios.post('/products/'+this.id,formData,{
              headers: {
                'Content-Type': 'multipart/form-data'
              }
            }).then((response)=>{
              console.log(response.data);
              $('#modal-form').modal('hide')
              this.$emit('actualiza',response.data.producto);
            });
          },
        }
    }
</script>
