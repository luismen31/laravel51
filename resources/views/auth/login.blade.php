@extends('app')

@section('content')
	
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">Iniciar Sesión</div>
				<div class="panel-body">

					@include('partials.errores')

					{!! Form::open(['url' => 'auth/login', 'method' => 'POST']) !!}    

					    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					        <label class="control-label">Email</label>
					        {!! Form::text('email', null, ['class' => 'form-control']) !!}
					    </div>

					    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					        <label class="control-label">Contraseña</label>
					        {!! Form::password('password', ['class' => 'form-control']) !!}	        
					    </div>

					    <div class="form-group">
					        <input type="checkbox" name="remember"> Recordarme
					    </div>

					    <div class="form-group">
					        <button type="submit" class="btn btn-success btn-block">Iniciar</button>
					    </div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@stop