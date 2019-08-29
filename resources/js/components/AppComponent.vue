<template>
    <div>
        <Menu-component></Menu-component>
        <Header-component></Header-component>  
        <div class="super_container">            
            <router-view></router-view>
        </div>        
        <foothercontent-component></foothercontent-component>
    </div>
</template>