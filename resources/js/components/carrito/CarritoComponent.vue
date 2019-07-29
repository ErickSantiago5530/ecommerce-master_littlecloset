<template>
  <div class="cart_section">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="cart_container">
            
            <!-- Cart Bar -->
            <div class="cart_bar">
              <ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
                <li class="mr-auto">Productos</li>
                <li>Color</li>
                <li>Talla</li>
                <li>Precio</li>
                <li>Cantidad</li>
                <li>Total</li>
              </ul>
            </div>
            <Carritoform-component></Carritoform-component>          

            <!-- Cart Buttons -->
            <div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
              <div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
                <div class="button button_clear trans_200"><a href="categories.html">clear cart</a></div>
                <div class="button button_continue trans_200"><a href="categories.html">continue shopping</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row cart_extra_row">
        <div class="col-lg-6">
          <div class="cart_extra cart_extra_1">
            <div class="cart_extra_content cart_extra_coupon">
              <div class="cart_extra_title">Coupon code</div>
              <div class="coupon_form_container">
                <form action="#" id="coupon_form" class="coupon_form">
                  <input type="text" class="coupon_input" required="required">
                  <button class="coupon_button">apply</button>
                </form>
              </div>
              <div class="coupon_text">Phasellus sit amet nunc eros. Sed nec congue tellus. Aenean nulla nisl, volutpat blandit lorem ut.</div>
              <div class="shipping">
                <div class="cart_extra_title">Shipping Method</div>
                <ul>
                  <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                    <label class="radio_container">
                      <input type="radio" id="radio_1" name="shipping_radio" class="shipping_radio">
                      <span class="radio_mark"></span>
                      <span class="radio_text">Next day delivery</span>
                    </label>
                    <div class="shipping_price ml-auto">$4.99</div>
                  </li>
                  <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                    <label class="radio_container">
                      <input type="radio" id="radio_2" name="shipping_radio" class="shipping_radio">
                      <span class="radio_mark"></span>
                      <span class="radio_text">Standard delivery</span>
                    </label>
                    <div class="shipping_price ml-auto">$1.99</div>
                  </li>
                  <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                    <label class="radio_container">
                      <input type="radio" id="radio_3" name="shipping_radio" class="shipping_radio" checked>
                      <span class="radio_mark"></span>
                      <span class="radio_text">Personal Pickup</span>
                    </label>
                    <div class="shipping_price ml-auto">Free</div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 cart_extra_col">
          <div class="cart_extra cart_extra_2">
            <div class="cart_extra_content cart_extra_total">
              <div class="cart_extra_title">Cart Total</div>
              <ul class="cart_extra_total_list">
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="cart_extra_total_title">Subtotal</div>
                  <div class="cart_extra_total_value ml-auto">$29.90</div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="cart_extra_total_title">Shipping</div>
                  <div class="cart_extra_total_value ml-auto">Free</div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="cart_extra_total_title">Total</div>
                  <div class="cart_extra_total_value ml-auto">$29.90</div>
                </li>
              </ul>
              <div class="checkout_button trans_200"><a href="checkout.html">proceed to checkout</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style media="screen">
  
</style>

<script>
    export default {
      props: ['carrito'],
      data(){
        return {
          
        };
      },
      mounted() {
        
      }

    }
</script>
