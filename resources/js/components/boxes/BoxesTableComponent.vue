<template>
    <tr>
    <td class="espaciotable border">
      
      <p> {{box.id}}</p>
    </td>
    <td class="espaciotable border">
      
      <p> {{box.nombre}}</p>
    </td>
    <td class="espaciotable border">
      
      <p> {{box.titulo}}</p>
    </td>
    <td class="espaciotable border">
      
      <p> {{box.descripcion}}</p>
    </td>
    <td class="espaciotable border">
      
      <p> {{box.img1}}</p>
    </td>
    <td class="espaciotable border">      
      <p> {{box.img2}}</p>
    </td>
    <td class="espaciotable border">
      <button  type="button" name="button" class="btn btn-warning btn-xs" v-on:click="onClickEditForm"><i class="fas fa-edit"></i></button>
    </td>
    <td class="espaciotable border"><button type="button" name="button" class="btn btn-danger btn-xs" v-on:click="onClickDelete"><i class="fas fa-trash-alt"></i></button></td>
  </tr>
</template>

<script>
    export default {
        props:['box'],
        data(){
          return {
            
          };
        },
        mounted() {
        },
        methods:{          
          onClickEditForm(){
            this.$emit('actualizar',this.box)
            this.mostrarBoxesForm =false
            $('#modal-form').modal('show')
          },
          onClickDelete(){
            this.$emit('delete',this.box)
          }
        }
    }
</script>
