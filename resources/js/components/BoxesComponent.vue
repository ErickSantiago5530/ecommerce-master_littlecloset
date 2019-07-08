<template>
  <div class="boxes">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="boxes_container d-flex flex-row align-items-start justify-content-between flex-wrap">
            <box-component v-for="box in boxes" :key="box.id" :box="box"></box-component>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style media="screen">
  .container{
    padding-top: 50px;
  }
</style>

<script>
    export default {
      data(){
        return {
          boxes:[]
        };
      },
      mounted() {
        axios.get('/boxes').then((response)=>{
            this.boxes = response.data;
            console.log(this.boxes);
        })
      }

    }
</script>
