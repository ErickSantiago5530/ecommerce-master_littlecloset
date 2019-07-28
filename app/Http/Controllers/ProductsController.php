<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Request;
use App\Product;
use App\Http\Controllers\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class ProductsController extends Controller
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
    {
        //
        // dd(auth()->id());
        $products = Product::all();
        // $id_usuario = auth()->id();
        // $products = Product::where('id_usuario',auth()->id());
        // dd($products);
        return response()->json($products,200);

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

      // $this->validate($request, [
      //     'photo' => 'required|image'
      // ]);    

      
      $product = new Product;
      $product->titulo = $request->titulo;
      $product->descripcion = $request->descripcion;
      $product->precio = $request->precio;
      $product->id_categoria = $request->id_categoria;
      $product->id_usuario = auth()->id();
      $product->extension = 'jpg';

      $hasFile  = $request->hasFile('image')&& $request->image->isValid();
      if($hasFile) {                
        $file = $request->file('image');
        $product->extension = $file->getClientOriginalExtension();
      }
      if ($product->save()) {    
        if($hasFile) {        
          $extension = $file->getClientOriginalExtension();
          $fileName = $product->id. '.' . $extension;
          // $path = public_path('images/products/'.$fileName);
          
          // Image::make($file)->fit(144, 144)->save($path);
          $file->storeAs('images/productos/',$product->id.".".$extension);
        }    
        return response()->json($product,200);
      }else{
        return response()->json(array('resp'=>'Error al guardar Producto'),500);
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
      // return view("products.edit",["product"=>$product]);
      return response()->json($product,200);

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
      $hasFile=$request->hasFile('image')&& $request->image->isValid();
      
      // dd($hasFile);
      $return = array();
      $product = Product::find($id);
      $product->titulo = $request->titulo;
      $product->descripcion = $request->descripcion;
      $product->precio = $request->precio;
      $product->id_categoria = $request->id_categoria;
      $product->extension = "jpg";
      $product->id_usuario = auth()->id();
      if($hasFile) {     

        $file = $request->file('image');
        $product->extension = $file->getClientOriginalExtension();
        $fileName = $product->id. '.' . $product->extension;
        // $path = public_path('images/products/'.$fileName);
        
        // Image::make($file)->fit(144, 144)->save($path);
        $file->storeAs('images/productos/',$product->id.".".$product->extension);
      }
      $return['producto'] = $product;
      $product->save();
      $return['rs'] = "Se Actualizo satisfactoriamete el producto";
      return response()->json($return,200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // Product::destroy($id);
      // return redirect("/products");
      $return = array();
      $product = Product::find($id);
      $return['producto'] = $product;
      $product->delete();
      $return['rs'] = "Se elimino satisfactoriamete el producto";
      return response()->json($return,200);

    }
}
