<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;

use App\Http\Requests\CrearClientesRequest;
use App\Http\Requests\EditarClientesRequest;

class inicioController extends Controller
{
    //
    private $path='clientes';

    public function index(){
    	
        $clientes = Clientes::All();
     
        return view($this->path.'.index', compact('clientes'));
    }

    public function create() {

        return view($this->path.'.create');

    }

    public function store(CrearClientesRequest $request) {
        /*
         * Validar Formulario
         * Mediante App\Http\Requests\CrearClientesRequest
         */
        
        $cliente = new Clientes;
        
        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->telefono = $request->telefono;
        $cliente->ciudad = $request->ciudad;
        $cliente->dni = $request->dni;
        $cliente->email = $request->email;
        $cliente->fechaalta = $request->fechaalta;

        $cliente->save();

        return redirect($this->path.'.index');
       
    }

    public function destroy($id) {
    
        $cliente = Clientes::find($id);
        $cliente->delete();
        return redirect($this->path.'.index');            
        
    }

    public function edit($id){

        $cliente = Clientes::find($id);

        return view($this->path.'.edit',compact('cliente'));

    }

    public function show($id){

        $cliente = Clientes::find($id);

        return view($this->path.'.show',compact('cliente'));

    }

    public function update(EditarClientesRequest $request, $id){

        /*
         * Validar Formulario
         * Mediante App\Http\Requests\EditarClientesRequest
         */
    	
        $cliente = Clientes::find($id);

        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->telefono = $request->telefono;
        $cliente->ciudad = $request->ciudad;
        $cliente->dni = $request->dni;
        $cliente->email = $request->email;
        $cliente->fechaalta = $request->fechaalta;

        $cliente->save();

        return redirect($this->path.'.index');
    }

}

