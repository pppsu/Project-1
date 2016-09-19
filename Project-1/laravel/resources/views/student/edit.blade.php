<html>

<head><title>Edit Student</title>
<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
</head>

<h2> Edit Student </h2>

<div class="container">

	<form action="../update/{{ $student->id}}" method="post">
	<div class="row">						
	    <div class="col-md-1">
	    <input type="text" name="name" value="{{$student->name}}"></div>
	    <div class="col-md-1"><input type="text" name="surname" 
	    		value="{{$student->surname}}"></div>
	    <div class="col-md-1"><input type="hidden" name="_token" 
			    value="{{ csrf_token() }}"> </div>
	    <div class="col-md-1"><input type="submit" class="btn btn-primary"> </div>
	</div>
	</form>
	<a href=../../student> Back </a>
</div>

</html>