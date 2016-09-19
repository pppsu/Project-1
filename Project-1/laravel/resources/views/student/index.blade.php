<html>
<head><title>Student</title>
<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
</head>

<div class="container">
<h1>Students</h1>	
	@foreach ( $students as $s )	
	<div class=row>
	  	<div class="col-md-12">
		  {{ $s->id}} :  {{ $s->name}} : {{ $s->surname}} 
		  		:<a href="student/edit/{{$s->id}}"> แก้ไข </a>
		  		:<a href="student/delete/{{$s->id}}"> ลบ </a>
		</div>	
	</div>
	@endforeach	
	{!! $students->render() !!}

</div>
</html>