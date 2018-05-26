@extends('layouts/default')

@section('content')
    <br>
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
			<div class="panel-heading">Enregistrez-vous</div>
				<div class="panel-body">
				    {!! Form::open(['url' => 'registration', 'files' => true, 'route' => 'storeUser']) !!}
				  	 	<div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
	        				{!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
	        				{!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
						</div>
	        			<div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
	        				{!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Votre prénom']) !!}
	        				{!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
						</div>
	        			<div class="form-group {!! $errors->has('codepostal') ? 'has-error' : '' !!}">
	        				{!! Form::text('codepostal', null, ['class' => 'form-control', 'placeholder' => 'Votre Code Postal']) !!}
	        				{!! $errors->first('codepostal', '<small class="help-block">:message</small>') !!}
						</div>
	        			<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">	
	        				{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre adresse mail']) !!}	
	        				{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
						</div>
	        			<div class="form-group {!! $errors->has('ville') ? 'has-error' : '' !!}">	
	        				{!! Form::text('ville', null, ['class' => 'form-control', 'placeholder' => 'Votre ville']) !!}
	        				{!! $errors->first('ville', '<small class="help-block">:message</small>') !!}
						</div>
	        				{!! Form::label('image', 'Ajoutez une photo') !!}
	        			<div class="form-group {!! $errors->has('photo') ? 'has-error' : '' !!}">	
	        				{!! Form::file('photo', ['class' => 'form-control'])	 !!}
	        				{!! $errors->first('photo', '<small class="help-block">:message</small>') !!}
						</div>
	        				{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
	    			{!! Form::close() !!}
@endsection

