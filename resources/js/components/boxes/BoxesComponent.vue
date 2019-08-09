<template>
  <div class="">
      <button class="btn btn-success" type="button" name="button" v-on:click="onClickAgregarBox"><i class="fa fa-plus"></i> Agregar Boxes</button>
      <div class="row p-4">
        <table>
          <thead>
            <td class="espacio border">ID</td>
            <td class="espacio border">Nombre</td>
            <td class="espacio border">Titulo</td>
            <td class="espacio border">Descripcion</td>
            <td class="espacio border">Imagen1</td>
            <td class="espacio border">Imagen2</td>
            <td class=" border">Editar</td>
            <td class=" border">Eliminar</td>
          </thead>
          <tbody>
            <BoxesTable-component
              v-for="(box,index) in Boxes"
              :key="box.id"
              :box="box"
              @actualizar='actualizarFormProducto(index)'
              @delete='deleleteProducto(index)'
              >
            </BoxesTable-component>
          </tbody>
       </table>
      </div>

      <div class="modal fade"  id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modalCrudPhalconLabel" aria-hidden="true" style=" display: none;" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header encabezado_modal">
              <div class="modal-title titulo_modal">
                <h3 v-if="mostrarBoxesForm">Agregar Boxes</h3>
                <h3 v-else>Actualiza Productos Boxes</h3>
              </div>
              <button type="button" class="close" aria-hidden="true" v-on:click="cerrarmodalForm">×</button>
            </div>
            <div class="modal-body">
              <BoxesForm-component v-if="mostrarBoxesForm" @new='agregarBoxes'></BoxesForm-component>
              <BoxesEdit-component v-else :box="box_edit" @actualiza='editaBoxes'></BoxesEdit-component>
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
            Boxes:[],
            mostrarBoxesForm:true,
            box_edit:[],
          };
        },
        mounted() {
          console.log('Component mounted. Admin')
          // Boxes_form.style.visibility = "hidden"
          axios.get('/boxes').then((response)=>{
            console.log(response);
            this.Boxes = response.data;
          });
        },
        methods:{          
          cerrarmodalForm(){
            this.box_edit = new Array()
            console.log(this.box_edit)
            $('#modal-form').modal('hide')
          },
          agregarBoxes(boxes){
            this.Boxes.push(boxes)
          },
          onClickAgregarBox(){
            $('#modal-form').modal('show')
            this.mostrarBoxesForm =true
          },actualizarFormProducto(index){
            this.box_edit[0] = this.Boxes[index];
            this.mostrarBoxesForm = false;
            $('#modal-form').modal('show')
          },
          deleleteProducto(index){
            this.Boxes.splice(index,1)
          },
          editaBoxes(boxes){
            for (let index = 0; index < this.Boxes.length; index++) {
              if (this.Boxes[index].id==boxes.id) {
                this.Boxes[index] = boxes;
              }              
            }
            axios.get('/boxes').then((response)=>{
              console.log(response);
              this.Boxes = response.data;
            });
            console.log(this.Boxes)
          }          
        }
    }

    
</script>
