<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::get();
        //return $clientes;
        return view('clientes.index',compact('clientes'));
    }

    public function create(){
        return view('clientes.create');
    }
    
    public function store(request $request){
        $cliente = new Cliente;
        $cliente->dni = $request->dni;
        $cliente->nombres = $request->nombres;
        $cliente->apellido = $request->apellido;
        $cliente->direccion = $request->direccion;
        $cliente->edad = $request->edad;
        $cliente->save();
        return redirect('/clientes');
    }
    public function edit($id){
        $cliente = Cliente::find($id);
        return view('clientes.edit',compact('cliente'));
    }
    public function update(Request $request,$id){
        $cliente = Cliente::find($id);
        $cliente->dni = $request->dni;
        $cliente->nombres = $request->nombres;
        $cliente->apellido = $request->apellido;
        $cliente->direccion = $request->direccion;
        $cliente->edad = $request->edad;
        $cliente->update();
        return redirect('/clientes');
    }
        public function destroy($id){
        $cliente = Cliente::find($id);
        $cliente -> delete ();
        return redirect('/productos');
        
    }
}
