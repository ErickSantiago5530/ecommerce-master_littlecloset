import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
    routes:[
        {path:'/',name: 'layout',component: require('./views/Layout')},
        {path:'/productos',name: 'productos',component: require('./views/Productos')},
        {path:'/carrito',name: 'carrito',component:require('./views/Carrito'),props:true},
        {path:'*',component: require('./views/Home')},
    ],
    mode: 'history'
})