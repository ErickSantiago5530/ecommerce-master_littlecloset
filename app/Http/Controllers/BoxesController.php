<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Request;
use App\Product;
use App\Boxes;
use App\Http\Controllers\DB;
use Illuminate\Support\Facades\Auth;

class BoxesController extends Controller
{
    public function __construct(){
      // $this->middleware("auth",["except"=>"show"]);// si no se encuentra logueado el usuario automaticamente lo redireccionara a login
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        //
      // dd($_POST,$_GET);
      $products = Product::all();
      $boxes    = Boxes::all();
      return response()->json($boxes,200);
      // return view('products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product;
        return view('products.create',["product"=>$product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $hasFile  = $request->hasFile('cover')&& $request->cover->isValid();
      $product = new Product;
      $product->titulo = $request->titulo;
      $product->precio = $request->precio;
      $product->descripcion = $request->descripcion;
      $product->id_usuario = Auth::user()->id;

      if ($hasFile) {
        $extension = $request->cover->extension();//devuelve la extension que queremos subir
      }
      $product->extension = $extension;
      if($product->save()){
        if ($hasFile) {
          //la imagen se guardara en una carpeta temp llamada images con el nombre $id.$extension
          $request->cover->storeAs('images',$product->id.".".$extension);
        }

        return redirect("/products");
      }else{
        return view("products.create",['product'=>$product]);
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $product = Product::find($id);
      // return view("products.show",["product"=>$product]);
      return response()->json($product,200);

    }

    public function unsoloproducto($id){
      $products = Product::all();
      foreach ($products as $producto ) {
        if($producto->id == $id){
          return $producto;
        }
      }
      // $resultados = DB::select("SELECT * from products");
      // echo $products;
      // $users = User::all();
      return response()->json($products,200);
      // $id = 5;
        // $product = Product::find($id);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // var_dump($id);die();
      $product = Product::find($id);
      return view("products.edit",["product"=>$product]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $hasFile  = $request->hasFile('cover')&& $request->cover->isValid();
      $product = Product::find($id);
      $product->titulo = $request->titulo;
      $product->precio = $request->precio;
      $product->descripcion = $request->descripcion;
      $product->id_usuario = Auth::user()->id;

      if ($hasFile) {
        $extension = $request->cover->extension();//devuelve la extension que queremos subir
      }
      $product->extension = $extension;

      if($product->save()){
        if ($hasFile) {
          //la imagen se guardara en una carpeta temp llamada images con el nombre $id.$extension
          $request->cover->storeAs('images',$product->id.".".$extension);
        }
        return redirect("/products");
      }else{
        return view("products.edit",['product'=>$product]);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Product::destroy($id);
      return redirect("/products");
    }
}
