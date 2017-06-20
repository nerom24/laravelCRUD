@extends('layout')
@section ('title')
  Formulario de clientes
@stop
@section('content')
  <br>
  <header>
      <h3>Registro de Clientes</h3>
  </header>
  <nav>
     <p>
        <a href="{{ url('clientes/index') }}">Listado Clientes</a>
      </p>
  </nav>
  <article>
  {{ !! Form::open(array('url'=>'clientes/registro', 'role'=>'form')) !! }}
      <ul>
          @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
      <div class="large-6 small-12 columns">
          {{ !! Field::text('nombre') !!}}
          
          
          {{Field::text('apellidos')}}
          
          {{Field::text('telefono')}}
         
          {{Field::text('ciudad')}}
          
          {{Field::text('dni' )}}
          
          {{Field::email('email', null, array('placeholder'=>'nombre@email.es'))}}
          
          {{Field::date('fechaalta')}}
          {{Form::submit('guardar', ['class' => 'button postfix']) }}
      </div>
  {{ Form::close() }}

{{-- 

  <table class="table table-hover">
  <tr>
      <th>Apellidos</th>
      <th>Nombre</th>
      <th>Teléfono</th>
      <th>Ciudad</th>
      <th>DNI</th>
      <th>Email</th>
  </tr>
  @foreach($clientes as $cliente)
    <tr>
        <td>{{$cliente->apellidos}} </td>
        <td>{{$cliente->nombre}}</td>
        <td>{{$cliente->telefono}}</td>
        <td>{{$cliente->ciudad}}</td>
        <td>{{$cliente->dni}}</td>
        <td>{{$cliente->email}}</td>
    </tr>
  @endforeach
  
  </table>  
  <a href="{{ url('clientes.create') }}">Registrar Cliente</a> --}}

      
  </article>
        
@endsection
