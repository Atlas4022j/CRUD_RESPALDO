<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index(){
        $productos = Producto::get();
        return view('productos.index',compact('productos'));
    }
    public function create(){
        return view('productos.create');
    }
    public function store(Request $request){
        
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->codigo = $request->codigo;
        $producto->save();
        return redirect('/productos');
    }
    public function edit($id){
        $producto = Producto::find($id);
        return view('productos.edit',compact('producto'));
    }
    public function update($id,Request $request){
        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->codigo = $request->codigo;
        $producto->update();
        return redirect('/productos');
    }

    public function destroy($id){
        $producto = Producto::find($id);
        $producto -> delete ();
        return redirect('/productos');
        
    }

}
