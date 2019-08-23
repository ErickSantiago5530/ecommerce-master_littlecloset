<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::post('carrito','ShoppingCartsController@checkout');
// Route::get('payments/store','PaymentsController@store');
// Route::resource('compras','ShoppingCartsController',['only' => ['show']]);
// Route::resource('in_shopping_carts','InShoppingCartsController',['only' => ['store','destroy']]);
// Route::resource('orders','OrdersController',['only' => ['index','update']]);

// /*Productos */
// // Route::apiResource('products','ProductsController');
// Route::Resource('products','ProductsController');
// /*Home*/
// Route::get('productsHome','LayoutController@productosHome');
// Route::get('boxesHome','LayoutController@BoxesHome');
// Route::get('carrucelHome','LayoutController@carrucelHome');
// /*Carrito */
// Route::Resource('carrito','ShoppingCartsController');
// /*Boxes */
// Route::resource('boxes','BoxesController');
// /*Favoritos */
// Route::resource('favoritos','FavoritosController',['only' => ['store','destroy']]);

