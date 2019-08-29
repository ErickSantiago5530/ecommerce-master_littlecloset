<template>            
    <header class="header">
        <div class="header_overlay"></div>
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div class="logo">
            <a href="/">
                <div class="d-flex flex-row align-items-center justify-content-start">
                <div><img src=" images/logo_1.png" alt=""></div>
                <div>Ecommerce - Little Closet</div>
                </div>
            </a>
            </div>
            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
            <nav class="main_nav">
            <ul class="d-flex flex-row align-items-start justify-content-start">      

                <li class="active"><router-link :to="{name:'home'}">Inicio</router-link></li>
                <li><router-link :to="{name:'productos'}">Productos</router-link></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            </nav>
            <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
            <!-- Search -->
            <div class="header_search">
                <form action="#" id="header_search_form">
                <input type="text" class="search_input" placeholder="Buscar Producto" required="required">
                <button class="header_search_button"><img src=" images/search.png" alt=""></button>
                </form>
            </div>
            <!-- User -->            
            <div class="user"><a href="/home"><div><img class="svg" src=" images/user.svg" alt=""><div>E</div></div></a></div>
            <div class="user"><a href="cart.html"><div><img class="svg" src=" images/cart.svg" alt=""><div id="productCount">0</div></div></a></div>
            <!-- Cart -->
            <!-- {{-- <div class="cart"><a href="cart.html"><div><img class="svg" src=" images/cart.svg" alt=""></div></a></div> --}} -->
            <!-- Phone -->
            <div class="header_phone d-flex flex-row align-items-center justify-content-start">
                <div><div><img src=" images/phone.svg" alt=""></div></div>
                <div>+1 912-252-7350</div>
            </div>
            </div>
        </div>
    </header> 
</template>