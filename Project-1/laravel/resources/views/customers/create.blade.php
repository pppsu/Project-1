@extends('bear.template')
@section('content')
 
	<h1>Create New bear</h1>
	<hr/>
	

	{!! Form::open(['url' => 'bear']) !!}       
	{!! Form::label('name', 'Name:') !!}  
	{!! Form::text('name', null,['required' => 'required']) !!}
	{!! $errors->first('name', '<p>:message</p>') !!}

	<br><input type="hidden" name="_token" value="{{ csrf_token() }}"><br>

	{!! Form::label('weight', 'weight: ') !!}
	{!! Form::text('weight', null,['required' => 'required']) !!}
	{!! $errors->first('weight', '<p>:message</p>') !!}
	
	
	{!! Form::submit('Create') !!}

	{!! Form::close() !!}

	@if ($errors->any())
	    <ul class="alert alert-danger">
	        @foreach ($errors->all() as $error)
	            <li>{{ $error }}</li>
	        @endforeach
	    </ul>
	@endif 
 
 @endsection
