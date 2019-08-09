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
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $ultimoBoxID = Boxes::obtenultimoID();
      $hasFile  = $request->hasFile('image')&& $request->image->isValid();
      $boxes = new Boxes;
      $boxes->titulo = $request->titulo;
      $boxes->nombre = $request->nombre;
      $boxes->descripcion = $request->descripcion;
      // $boxes->id_usuario = Auth::user()->id;     
      $boxes->extension = ".jpg";
      // dd($hasFile);

      if ($hasFile) {
        //la imagen se guardara en una carpeta temp llamada images con el nombre $id.$extension
        $file = $request->file('image');
        $boxes->img1 = $ultimoBoxID.".".$file->getClientOriginalExtension();
        if($request->hasFile('image2')&& $request->image2->isValid()){
          $file2 = $request->file('image2');
          $extension2 = $file2->getClientOriginalExtension();          
          $boxes->img2 = $ultimoBoxID."_fondo.".$extension2;
        }
      }
      if($boxes->save()){
        if ($hasFile) {
          $file = $request->file('image');
          // dd($file->getClientOriginalName());

          //la imagen se guardara en una carpeta temp llamada images con el nombre $id.$extension
          $extension = $file->getClientOriginalExtension();
          $request->image->storeAs('images/boxes/',$boxes->id.".".$extension);
          if($request->hasFile('image2')&& $request->image2->isValid()){
            $file2 = $request->file('image2');
            $extension2 = $file2->getClientOriginalExtension();
            $request->image2->storeAs('images/boxes/',$boxes->id."_fondo.".$extension2);
          }
        }        
        return response()->json($boxes,200);
      }else{
        return response()->json(array('resp'=>'Error al guardar Boxes'),500);
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
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // dd($request,$id);
      $hasFile  = $request->hasFile('image')&& $request->image->isValid();
      $boxes = Boxes::find($id);
      $boxes->titulo = $request->titulo;
      $boxes->nombre = $request->nombre;
      $boxes->descripcion = $request->descripcion;
      // $boxes->id_usuario = Auth::user()->id;

      if ($hasFile) {
        $file = $request->file('image');
        $boxes->img1 = $id.".".$file->getClientOriginalExtension();
        if($request->hasFile('image2')&& $request->image2->isValid()){
          $file2 = $request->file('image2');
          $extension2 = $file2->getClientOriginalExtension();          
          $boxes->img2 = $id."_fondo.".$extension2;
        }
      }

      if($boxes->save()){
        if ($hasFile) {
          //la imagen se guardara en una carpeta temp llamada images con el nombre $id.$extension
          $request->image->storeAs('images',$id.".".$file->getClientOriginalExtension());
          if($request->hasFile('image2')&& $request->image2->isValid()){
            $request->image2->storeAs('images',$id."_fondo.".$extension2);
          }
        }
        return response()->json($boxes,200);        
      }else{
        return response()->json(array('resp'=>'Error al guardar Boxes'),500);
        
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
