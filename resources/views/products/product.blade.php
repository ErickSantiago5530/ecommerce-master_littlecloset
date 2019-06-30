{{-- <div class="product_image"><img  src="{{url("images/product_1.jpg")}}" alt="{{$product->id.".".$product->extension}}"></div> --}}
{{-- <div class="product_image"><img src="{{url("/products/images/".$product->id.".".$product->extension) }}" alt="{{$product->id.".".$product->extension}}"></div> --}}
{{-- <div class="product_image"><img width='42.03px' height='470.59' src="{{url("/products/images/".$product->id.".".$product->extension)}}" alt="{{$product->id.".".$product->extension}}"></div> --}}
<div class="product_content">
  <div class="product_info d-flex flex-row align-items-start justify-content-start">
    <div>
      <div>
        <div class="product_name"><a href="product.html">{{ $product->titulo }}</a></div>
        <div class="product_name"><a href="{{url("/products/unsoloproducto/".$product->id) }}">{{ $product->titulo }}</a></div>
        <div class="product_category">In <a href="category.html">{{ $product->descripcion }}</a></div>
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
