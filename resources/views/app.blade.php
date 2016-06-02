<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>@yield('title', 'Application')</title>

	{!! Html::style('assets/css/bootstrap.css') !!}
	{!! Html::style('assets/css/font-awesome.min.css') !!}
	{!! Html::style('assets/css/bootstrap-table.min.css')!!}

	{{-- TU PROPIO CSS --}}
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Brand</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      @if(Auth::guest())
		      <ul class="nav navbar-nav">
		        <li><a href="{{ url('auth/login') }}">Login</a></li>
		        <li><a href="#">Link</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>
		      </ul>
	      @endif
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Link</a></li>
	        @if(Auth::check())
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ usuarioActual()->name }} <span class="caret"></span></a>
		          <ul class="dropdown-menu">		            
		            <li><a href="{{ route('showUser') }}">Ver Usuarios</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="{{ url('auth/logout') }}">Salir</a></li>
		          </ul>
		        </li>
	        @endif
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		@yield('content')
	</div>

	{!! Html::script('assets/js/jquery-2.1.4.min.js') !!}
	{!! Html::script('assets/js/bootstrap.min.js') !!}
	{!! Html::script('assets/js/bootstrap-table.min.js') !!}
	<script type="text/javascript">
		var url_base = '{{ url("/") }}';
	</script>
	{!! Html::script('assets/js/data-table.js') !!}
</body>
</html>