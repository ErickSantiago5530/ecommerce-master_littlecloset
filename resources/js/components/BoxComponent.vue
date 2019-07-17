<template>
  <div class="box">
    <div class="background_image" style="backgroundImage:url(images/box_1.jpg)"></div>
    <!-- <div class="background_image" :style="imagen_fondo"></div> -->
    <!-- <div class="background_image" :style="backgroundImage:'url("images/'+img1+'")'"></div> -->
    <div class="box_content d-flex flex-row align-items-center justify-content-start">
      <div class="box_left">
        <div class="box_image">
          <a href="category.html">
            <div class="background_image" :style="imagen_muestra"></div>
            <!-- <div class="background_image" :style="background-image:'url(images/'+img1+')'"></div> -->
          </a>
        </div>
      </div>
      <div class="box_right text-center">
        <div class="box_title">{{ box.descripcion }}</div>
        <!-- {{ box }} -->
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
      props: ['box'],
      data(){
        return {
          // imagen_fondo: {background:'red',color: 'red',fontSize: '13px'}
          // arr_box:props.box,
          // box:{
          //   id:'',
          //   descripcion:'',
          //   img1:'',
          //   img2:''
          // },
          arr_box:[],
          img1:"box_1.jpg",
          img2:"",
          imagen_fondo: {backgroundImage:'url(images/box_1.jpg)'},
          imagen_muestra: {backgroundImage:'url(images/box_1_img.jpg)'}
        };
      },
      mounted() {
        // console.log(box);
        // this.arr_box = arr_box;
      }

    }
</script>
