@extends('layouts.app')

@section("content")
  <div class="super_container_inner">
    <div class="super_overlay"></div>
    <Carrito-component><Carrito-component>
  </div>
  <div class="text-rigth">
    @include("shopping_carts.form")
  </div>
</div>
@endsection()
