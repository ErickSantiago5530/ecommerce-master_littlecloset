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
Route::get('/products', 'ProductsController@index');
Route::get('/products/create', 'ProductsController@create');//muestra formulario nuevo producto
Route::post('/products/', 'ProductsController@store');//guarda producto
Route::get('/products/{id}/edit', 'ProductsController@edit');//obtiene los datos para actualizar prooducto
Route::patch('/products/{id}', 'ProductsController@update');//actualiza el producto
Route::delete('/products/{id}', 'ProductsController@destroy');//elimina producto
// Route::get('/products/{id}', 'ProductsController@show');//muestra detalles producto
Route::get('/carrito','ShoppingCartsController@index');
Route::post('/carrito','ShoppingCartsController@checkout');
Route::get('/payments/store','PaymentsController@store');
// Route::get('/products/unsoloproducto','ProductsController@unsoloproducto');
Route::get('products/unsoloproducto/{id}',"ProductsController@unsoloproducto");
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
