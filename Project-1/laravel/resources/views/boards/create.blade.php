@extends('boards.template')
@section('content')
 
	<h1>Create New Board</h1>
	<hr/>

	{!! Form::open(['url' => 'boards']) !!}       
	{!! Form::label('title', 'Title: ') !!}  
	{!! Form::text('title', 'default topic',['required' => 'required']) !!}
	{!! $errors->first('title', '<p>:message</p>') !!}

	<br><input type="hidden" name="_token" value="{{ csrf_token() }}"><br>

	{!! Form::label('body', 'Body: ') !!}
	{!! Form::textarea('body', null,['required' => 'required']) !!}
	{!! $errors->first('body', '<p>:message</p>') !!}
	
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
