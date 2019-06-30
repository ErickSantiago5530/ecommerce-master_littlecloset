<template>
  <!-- Preloader -->
  <div class="container">
    <h1>hola admin</h1>
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
        return {};
      },
      mounted() {
          console.log('Component mounted. Admin')
          console.log('hola soy el admin');
          $(function(){
            console.log($.trim(' -algo paso- '));

          });

      }

    }
</script>
