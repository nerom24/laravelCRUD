<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Ejemplo Layout.blade.php</title>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  {!! Html::style('css/bootstrap.css') !!}
  {!! Html::style('css/bootstrap-theme.css') !!}
  <!-- Fonts -->
 <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  
 
	
  
 
	
  
  </head>

  <body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">

     <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Gesbank</a>
          </div>
      <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="{{ url('/') }}">Inicio</a></li>
              <li><a href="{{ url('clientes.index') }}">Clientes</a></li>
            </ul>

      </div>
    </div>
    </nav>

    <div class="container">
    
     	@yield('content')

     	<footer>
      	<hr>
        <p>&copy; 2DAW 2016/2017</p>
      </footer>

    </div><!-- /.container -->
  
  <!-- Scripts -->
  {!! Html::script('jquery311/jquery.min.js') !!}
  {!! Html::script('js/bootstrap.min.js') !!}
  </body>
</html>