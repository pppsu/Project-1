@extends('cusboards.template')
@section('content')
 
	<h1>Create New CusBoard</h1>
	<hr/>

	{!! Form::open(['url' => 'cusboards']) !!}       
	{!! Form::label('name', 'Name: ') !!}  
	{!! Form::text('name', 'default topic',['required' => 'required']) !!}
	{!! $errors->first('name', '<p>:message</p>') !!}

	<br><input type="hidden" name="_token" value="{{ csrf_token() }}"><br>

	{!! Form::label('lastName', 'Lastname: ') !!}
	{!! Form::textarea('lastName', null,['required' => 'required']) !!}
	{!! $errors->first('lastName', '<p>:message</p>') !!}
	
	<br>
	{!! Form::label('email', 'Email: ') !!}
	{!! Form::text('email', null,['required' => 'required']) !!}
	{!! $errors->first('email', '<p>:message</p>') !!}
	
	<br>
	{!! Form::label('phone', 'Phone: ') !!}
	{!! Form::text('phone', null,['required' => 'required']) !!}
	{!! $errors->first('phone', '<p>:message</p>') !!}
	
	<br>
	{!! Form::label('address', 'Address: ') !!}
	{!! Form::textarea('address', null,['required' => 'required']) !!}
	{!! $errors->first('address', '<p>:message</p>') !!}
	
	<br>
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
