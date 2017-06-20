@extends('layouts.app')
@section('content')
  <br>
  <header>
      <h3>Listado de Clientes</h3>
  </header>
  <nav>
    
      {{-- <p class="navbar-text navbar-right">
      <a class="navbar-link" href="{{ url('clientes.create') }}" >Registrar Cliente</a>
      </p> --}}

      <p>
        <a href="{{ url('clientes.create') }}">Nuevo Cliente</a>
      </p>



  </nav>
  <article>
  <table class="table table-hover">
  <tr>
      <th>Apellidos</th>
      <th>Nombre</th>
      <th>Teléfono</th>
      <th>Ciudad</th>
      <th>DNI</th>
      <th>Email</th>
      <th>Acciones</th>
  </tr>
  @foreach($clientes as $cliente)
    <tr>
        <td>{{$cliente->apellidos}} </td>
        <td>{{$cliente->nombre}}</td>
        <td>{{$cliente->telefono}}</td>
        <td>{{$cliente->ciudad}}</td>
        <td>{{$cliente->dni}}</td>
        <td>{{$cliente->email}}</td>
        <td>
          <div class="btn-group">
          
            <a href="{{ url('clientes.edit', $cliente->id) }}" class="btn btn-link" Title="Editar"><span class="glyphicon glyphicon-edit"></span></a>        

          
            <a href="{{ url('clientes.show', $cliente->id) }}" class="btn btn-link" Title="Mostrar"><span class="glyphicon glyphicon-eye-open" ></span></a>          
                
          
            <a href="{{ url('clientes.destroy', $cliente->id) }}" class="btn btn-link" title="Eliminar"><span class="glyphicon glyphicon-trash"></span></a>

        </div>        
        
        </td>
    </tr>
  @endforeach
  
  </table>  
  

      
  </article>
        
@endsection
