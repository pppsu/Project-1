<!DOCTYPE html>
<html lang="th">
	<head>		   
		<link rel="stylesheet" 
		href="{{URL::asset('/css/bootstrap.min.css')}}">
	</head>
	<body>		
 		<div class="container">
 			<h1>Student</h1>
 			<form action="addStudent" method="post">
			<div class="row">
				<div class="col-md-1">
					Name
				</div>
				<div class="col-md-6">
					<input type="text" name="name" value="John">
				</div>
			</div>
			<div class="row">
				<div class="col-md-1">
					Surname
				</div>
				<div class="col-md-6">
					<input type="text" name="surname" value="Tomsan">
				</div>
			</div>
			<div class="row">
				<div class="col-md-1">		
				</div>
				<div class="col-md-6">
					<input type="hidden" name="_token" 
						value="{{csrf_token()}}">
					<button>Submit</button>
				</div>			
			</div>
			</form>
 		</div>
		
	</body>
</html>