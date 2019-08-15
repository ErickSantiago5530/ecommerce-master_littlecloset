/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
//  require('./bootstrap');
// $.fn.editable.defaults.mode = 'inline';
// $.fn.editable.defaults.ajaxOptions = {type:'PUT'};

 $(function(){

   // $(".set-guide-number").editable();
   //
   // $(".select-status").editable({
   //   source: [
   //     {value:"creado",text:"Creado"},
   //     {value:"enviado",text:"Enviado"},
   //     {value:"recibido",text:"Recibido"}
   //   ]
   // });
   init()
});
  
function init(){
  console.log('en esta parte inicia todo el init ;)');

}
 $(".add-to-cart").on("submit",function(e){
   e.preventDefault();

   var $form = $(this);
   var $button = $form.find("[type='submit']");

   //peticion ajax
   $.ajax({
     url:$form.attr("action"),
     method:$form.attr("method"),
     data: $form.serialize(),
     dataType:"JSON",
     beforeSend: function(){
       $button.val("Cargando..");
     },
     success: function(data){
       $button.css("background-color","#00c853").val("Agregado");
       console.log(data);

       $(".circle-shopping-cart").html(data.products_count);
       setTimeout(function(){
         restartButton($button);
       },2000);
     },
     error: function(err){
       console.log(err);
       $button.css("background-color","#d50000").val("Hubo error");
       setTimeout(function(){
         restartButton($button);
       },2000);
     }
   });

   return false;
 });

 function restartButton($button){
   $button.val("Agregar al carrito").attr("style","");
 }


window.Vue = require('vue');
window.axios = require('axios');
console.log(window.Vue);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('admin-component', require('./components/AdminComponent.vue'));

//layouts
Vue.component('Home-component', require('./components/layouts/HomeComponent.vue'));
Vue.component('Homeproductos-component', require('./components/layouts/HomeproductosComponent.vue'));
Vue.component('Homeproduct-component', require('./components/layouts/producto/HomeproductComponent.vue'));
Vue.component('Homeboxes-component', require('./components/layouts/HomeboxesComponent.vue'));
Vue.component('Homefeatures-component', require('./components/layouts/HomefeaturesComponent.vue'));
// boxes Admin
Vue.component('boxes-component', require('./components/boxes/BoxesComponent.vue'));
Vue.component('BoxesTable-component', require('./components/boxes/BoxesTableComponent.vue'));
Vue.component('BoxesEdit-component', require('./components/boxes/BoxesEditComponent.vue'));
Vue.component('BoxesForm-component', require('./components/boxes/BoxesFormComponent.vue'));
// Productos Admin
Vue.component('ProductosForm-component', require('./components/productos/ProductosFormComponent.vue'));
Vue.component('ProductosEdit-component', require('./components/productos/ProductosEditComponent.vue'));
Vue.component('ProductosTable-component', require('./components/productos/ProductosTableComponent.vue'));
Vue.component('Productos-component', require('./components/productos/ProductosComponent.vue'));


const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
      message: 'Hello Vue!'
    }
});
