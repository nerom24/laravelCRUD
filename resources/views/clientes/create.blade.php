@extends('layouts.app')

@section('content')
  <br>
  <header>
      <h3>Registro de Clientes</h3>
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
  {{ Form::open(['url'=>'clientes.store', 'method'=>'post']) }}
     
   
      <div class="large-6 small-12 columns">
          <div class="form-group">
          {{Form::label('nombre', 'Nombre:')}}
          {{Form::text('nombre', old('nombre'), ['class' => 'form-control', 'required' => 'required'])}}
          </div>
          <div class="form-group">
          {{Form::label('apellidos:', 'Apellidos:')}}
          {{Form::text('apellidos', old('apellidos'), ['class' => 'form-control', 'required' => 'required'] )}}
          </div>
          <div class="form-group">
          {{Form::label('telefono:', 'Teléfono:')}}
          {{Form::tel('telefono', old('telefono'), ['class' => 'form-control', 'required' => 'required'] )}}
          </div>
          <div class="form-group">
          {{Form::label('ciudad', 'Ciudad:')}}
          {{Form::text('ciudad', old('ciudad'), ['class' => 'form-control'] )}}
          </div>
          <div class="form-group">
          {{Form::label('dni:', 'DNI:')}}
          {{Form::text('dni', old('dni'), ['class' => 'form-control', 'required' => 'required'] )}}
          </div>
          <div class="form-group">
          {{Form::label('email:', 'Email:')}}
          {{Form::email('email', old('email'), ['class' => 'form-control', 'placeholder'=>'nombre@email.es', 'required' => 'required' ])}}
          </div>
          <div class="form-group">
          {{Form::label('fechaalta', 'Fecha Alta:')}}
          {{Form::date('fechaalta', old('fechaalta'), ['class' => 'form-control'] )}}
          </div>
          <div class="form-group">
          {{Form::submit('Registrar', ['class' => 'btn btn-primary']) }}
          {{Form::reset('Borrar', ['class' => 'btn btn-default']) }}
          <a href="{{ url('clientes.index') }}" class="btn btn-default">Volver</a>
          </div>
      </div>
  {{ Form::close() }}


      
  </article>
        
@endsection
