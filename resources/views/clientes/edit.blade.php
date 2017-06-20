@extends('layouts.app')
@section('content')
  <br>
  <header>
      <h3>Editar Cliente</h3>
  </header>
  <nav>
     <p>
        <a href="{{ url('clientes.index') }}">Listado Clientes</a>
      </p>
  </nav>
  <article>
  @include('clientes/partials/errors')
  </article>
  <article>
 
  {{ Form::open(['url'=> ['clientes.update', $cliente->id ] , 'method'=>'PUT']) }}
 
 
          <div class="large-6 small-12 columns">
          <div class="form-group">
          {{Form::label('nombre', 'Nombre:')}}
          {{Form::text('nombre', $cliente->nombre, ['class' => 'form-control', 'required' => 'required'])}}
          </div>
         <div class="form-group">
          {{Form::label('apellidos:', 'Apellidos:')}}
          {{Form::text('apellidos', $cliente->apellidos , ['class' => 'form-control', 'required' => 'required'] ) }}
          </div>
          <div class="form-group">
          {{Form::label('telefono:', 'Teléfono:')}}
          {{Form::tel('telefono', $cliente->telefono, ['class' => 'form-control', 'required' => 'required'] )}}
          </div>
          <div class="form-group">
          {{Form::label('ciudad', 'Ciudad:')}}
          {{Form::text('ciudad', $cliente->ciudad, ['class' => 'form-control'] )}}
          </div>
          <div class="form-group">
          {{Form::label('dni:', 'DNI:')}}
          {{Form::text('dni', $cliente->dni, ['class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly'] ) }}
          </div>
          <div class="form-group">
          {{Form::label('email:', 'Email:')}}
          {{Form::email('email', $cliente->email, ['class' => 'form-control', 'placeholder'=>'nombre@email.es', 'required' => 'required', 'readonly' => 'readonly' ])}}
          </div>
          <div class="form-group">
          {{Form::label('fechaalta', 'Fecha Alta:')}}
          {{Form::text('fechaalta', $cliente->fechaalta, ['class' => 'form-control', 'readonly' => 'readonly']) }}
          </div>
          <div class="form-group">
          {{Form::submit('Actualizar', ['class' => 'btn btn-primary']) }}
          <a href="{{ url('clientes.index') }}" class="btn btn-default">Volver</a>
          </div>
      </div> 
  {{ Form::close() }}


      
  </article>
        
@endsection
