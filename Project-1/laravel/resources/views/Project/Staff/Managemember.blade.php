<!DOCTYPE html>

<html lang="">

	<head>
	<span class="label label-warning">Demo</span>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!--popup-->

		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Staff Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


	</head>

	<body>
		<h1 class="text-center">Staff Association Management System</h1>

		<nav class="navbar navbar-light" style="background-color: #e3f2fd;" >


			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header" >
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!--<a class="navbar-brand" href="#">Student</a>-->
					<p class="navbar-brand" >staff</p>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active" ><a href="{{ url('project/Staff/home3') }}">การจัดการข้อมูลชมรม</a></li>
						<!--<li><a href="#">Link</a></li> -->
						<li class="active" ><a href="{{ url('project/Staff/Managemember') }}">การจัดการข้อมูลสมาชิกชมรม</a></li>
						<li class="active" ><a href="{{ url('project/Staff/permission') }}">การจัดการจัดข้อมูลปู้อนุมัติตามสิทธิ์</a></li>
						<li class="active" ><a href="{{ url('project/Staff/status') }}">ตรวจสอบสถานะเอกสาร</a></li>
						<!--<li><a href="#">Link</a></li> -->
					</ul>

					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">PSUpassport</a></li>
						<li><a href="#">Firstname Lastname</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Menu <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#"Staff</a></li>
								<li><a href="{{ url('project/home') }}">Home</a></li>
								<li><a href="#">Logout</a></li>

							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		<center>

		<h3 class="text-center">จัดการข้อมูลสมาชิกชมรม</h3> <br>
		<form action="" method="POST" role="form">
			<legend> </legend>
			<div class="container">
			<div class="form-group">
				<p>
				<select name="formGender">
 				 		<option value="Mr">ชมรมที่ 1</option>
 			 			<option value="Miss">ชมรมที่ 2</option>
 			 			<option value="Mrs">ชมรมที่ 3</option>
				</select>
				</p><br>
				<a href="{{ url('project/Staff/AddMember') }}" class="btn btn-success">เพิ่มข้อมูลสมาชิก</a>


<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>

<h2>ข้อมูลสมาชิกชมรม</h2>

<table>
  <tr>
    <th>StudentID</th>
    <th>Title</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Email</th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td>5630213040</td>
    <td>นาย</td>
    <td>ธงชัย</td>
    <td>ระวังแค้ม</td>
    <td>5630213040@email.psu.ac.th</td>
    <td><button type="button" class="btn btn-danger">Delete</button></td>
    <td><button type="button" class="btn btn-primary">Edit</button></td>
    <td><button type="button" class="btn btn-info">Detail</button></td>
  </tr>

</table>
				</center>
 		<br><br><br>
	</body>

</html>
