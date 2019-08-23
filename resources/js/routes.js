import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
    routes:[
        {path:'/',name: 'home',component: require('./views/Home')},
        {path:'/productos',name: 'productos',component: require('./views/Productos')},
        {path:'/carrito',name: 'carrito',component:require('./views/Carrito'),props:true},
        {path:'*',component: require('./views/Home'),props:true},
    ],
    mode: 'history'
})