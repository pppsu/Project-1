@extends('boards.template')
@section('content')

	<h2>Board</h2>
	<a href="{{ url('boards/create') }}" >Add New</a>
	<table border=1>
		<thead>
		    <tr>
		        <th> Id </th><th>Title</th><th>Body</th><th>Actions</th>
		    </tr>
		</thead>
		<tbody>

	{{-- */$x=0;/* --}}
	@foreach($boards as $item)    
	    <tr>
	        <td>{{ ++$x }}</td>
	        <td><a href="{{ url('boards', $item->id) }}">{{ $item->title }}</a></td><td>{{ $item->body }}</td>
	        <td>
	            <a href="{{ url('boards/' . $item->id . '/edit') }}"><button type="submit">Update</button></a>	
	            {!! Form::open(['method'=>'DELETE',
	            				  'url' => ['boards', $item->id] ,
	            				  'style' => 'display:inline' ]) !!}
	            {!! Form::submit('Delete') !!}
	            {!! Form::close() !!}
	        </td>
	    </tr>
	@endforeach
	</table>

	 {!! $boards->render() !!} 
 @endsection
