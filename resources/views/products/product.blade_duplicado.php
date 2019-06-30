<div class="col-sm-12 col-sm-12 col-xs-12 text-center">
  <div class="card product text-left">
    <h1>{{ $product->titulo }}</h1>
    <div class="row">
      <div class="col-sm-6 col-xs-12">
        @if($product->extension)
          <img src="{{url("/products/images/".$product->id.".".$product->extension)}}" alt="{{$product->id.".".$product->extension}}" class="product-avatar">
        @endif
      </div>
      <div class="col-sm-6 col-xs-12">
        <p>Descripcion</p>
        <p>{{ $product->descripcion}}</p>
        <p> @include("in_shopping_carts.form",['product'=>$product]) </p>
      </div>

    </div>
    {{-- para que los botones de editar y eliminar aparescan si el usuario es el creador  --}}
    @if(Auth::check() && $product->id_usuario == Auth::user()->id)
      <div class="actions">
        <div class="row right-text">
          <div class="col-sm-1 col-xs-3 ">
            <a class="btn btn-warning btn-xs" href="{{ url('products/'.$product->id.'/edit') }}"><i class="fas fa-edit"></i></a>
          </div>
          <div class="col-sm-1 col-xs-3">
            @include('products.delete',['product'=>$product])
          </div>
        </div>
      </div>
    @endif()
  </div>
</div>


<div class="product_image"><img src="{{url("/products/images/".$product->id.".".$product->extension)}}" alt="{{$product->id.".".$product->extension}}"></div>
<div class="product_content">
  <div class="product_info d-flex flex-row align-items-start justify-content-start">
    <div>
      <div>
        <div class="product_name"><a href="product.html">{{ $product->titulo }}</a></div>
        <div class="product_category">In <a href="category.html">{{ $product->descripcion}}</a></div>
      </div>
    </div>
    <div class="ml-auto text-right">
      <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
      <div class="product_price text-right">$3<span>.99</span></div>
    </div>
  </div>
  <div class="product_buttons">
    <div class="text-right d-flex flex-row align-items-start justify-content-start">
      <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
        <div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
      </div>
      <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
        <div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
      </div>
    </div>
  </div>
</div>
