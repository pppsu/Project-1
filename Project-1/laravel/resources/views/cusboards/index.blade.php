@extends('cusboards.template')
@section('content')

	<h2>CusBoard</h2>
	<a href="{{ url('cusboards/create') }}" >Add New</a>
	<table border=1>
		<thead>
		    <tr>
		        <th> Id </th><th>Name</th><th>Lastname</th><th>E-mail</th><th>Phone</th><th>address></th><th>Actions</th>
		    </tr>
		</thead>
		<tbody>

	{{-- */$x=0;/* --}}
	@foreach($cusboards as $item)    
	    <tr>
	        <td>{{ ++$x }}</td>
	        <td><a href="{{ url('cusboards', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->lastName }}</td><td>{{ $item->email }}</td><td>{{ $item->phone }}</td><td>{{ $item->address }}</td>
	        <td>
	            <a href="{{ url('cusboards/' . $item->id . '/edit') }}"><button type="submit">Update</button></a>	
	            {!! Form::open(['method'=>'DELETE',
	            				  'url' => ['cusboards', $item->id] ,
	            				  'style' => 'display:inline' ]) !!}
	            {!! Form::submit('Delete') !!}
	            {!! Form::close() !!}
	        </td>
	    </tr>
	@endforeach
	</table>

	 {!! $cusboards->render() !!} 
 @endsection
