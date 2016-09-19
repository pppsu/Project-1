@extends('customers.template')
@section('content')

	<legend>Customer</legend>
	<!--<a href="{{ url('customers/create') }}" >Add New</a>-->
	<div class="btn-group">
  <a href="{{ url('customers/create') }}" class="btn btn-success">Create New</a>
	</div>

	<table border=1 align="center">
		<thead>
		    <tr>
		        <th> -ID- </th><th>Name</th><th>Lastname</th><th>E-mail</th><th>Phone</th><th>address</th><th>Actions</th>
		    </tr>
		</thead>
		<tbody>

	{{-- */$x=0;/* --}}
	@foreach($customers as $item)    
	    <tr>
	        <td>{{ ++$x }}</td>
	        <td><a href="{{ url('customers', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->lastName }}</td><td>{{ $item->email }}</td><td>{{ $item->phone }}</td><td>{{ $item->address }}</td>
	        <td>
	            <a href="{{ url('customers/' . $item->id . '/edit') }}"><button type="submit">Update</button></a>	
	            {!! Form::open(['method'=>'DELETE',
	            				  'url' => ['customers', $item->id] ,
	            				  'style' => 'display:inline' ]) !!}
	            {!! Form::submit('Delete') !!}
	            {!! Form::close() !!}
	        </td>
	    </tr>
	@endforeach
	</table>

	 {!! $customers->render() !!} 
 @endsection
