<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainController@home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/products', 'ProductsController@index');
// Route::get('/products/{id}', 'ProductsController@edit');
Route::get('/carrito','ShoppingCartsController@index');
Route::post('/carrito','ShoppingCartsController@checkout');
Route::get('/payments/store','PaymentsController@store');
Route::get('products/images/{filename}',function($filename){
  $path = storage_path("app/images/".$filename);
  if (!\File::exists($path)){
    abort(404);
  }
  $file = \File::get($path); //obtener nombre imagen
  $type = \File::mimeType($path); //obtener la extension de la imagen

  $response = Response::make($file,200);
  $response->header("Content-Type",$type);

  return $response;
});
Route::resource('compras','ShoppingCartsController',[
  'only' => ['show']
]);

Route::resource('in_shopping_carts','InShoppingCartsController',[
  'only' => ['store','destroy']
]);

Route::resource('orders','OrdersController',[
  'only' => ['index','update']
]);
Route::resource('boxes','BoxesController',[
  'only' => ['index','update']
]);

// Route::apiResource('products','ProductsController');
Route::Resource('products','ProductsController');
