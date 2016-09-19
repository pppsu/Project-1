<!DOCTYPE html>

<html lang="">

	<head>
	<span class="label label-warning">Demo</span>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<style>
			.headAd{
				color:red;
				text-decoration: underline;
			}
			.nomalfont{
				color:black;
			}
			.add{
				font-weight: bold;
				color: green;
				text-align: center;
			}
			.delete{
				font-weight: bold;
				color: red;
				text-align: center;

			}
			.centerT{
				text-align: center;
				font-size: 12pt;

			}

		</style>

	</head>

	<body>


		<h1 class="text-center">Student Association Management System</h1>

		<nav class="navbar navbar-light" style="background-color: #FFFF99;" >


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
					<p class="navbar-brand"><b class="headAd">Admin</b></p>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class ="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="nomalfont"> สิทธิ์ผู้ดูแลระบบ </b><b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{{ url('project/admin/addAdmin') }}" ><p  class="add" >เพิ่มสิทธิ์</p></a></li>
								<legend></legend>
								<li><a href="{{ url('project/home') }}"><p class="delete">ลบสิทธิ์</p></a></li>

							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="nomalfont">สิทธ์เจ้าหน้าที่งานกิจกรรมนักศึกษา</b><b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#"><p  class="add">เพิ่มสิทธิ์</p></a></li>
								<legend></legend>
								<li><a href="{{ url('project/home') }}"><p class="delete">ลบสิทธิ์</p></a></li>
							</ul>
						</li>
					</ul>

					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">PSUpassport</a></li>
						<li><a href="#">Firstname Lastname</a></li>
						<li class="dropdown">
							<a href ="#" class="dropdown-toggle" data-toggle="dropdown"> Menu <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Student</a></li>
								<li><a href="{{ url('project/home') }}">Home</a></li>
								<li><a href="#">Logout</a></li>

							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		<div class="jumbotron">
			<div class="container">
				<h2 class="text-center">ยินดีต้อนรับสู่การจัดการเอกสารสำหรับขอจัดกิจกรรมชมรม</h2>


			</div>
		</div>
				<div class="centerT">

					<div class="panel panel-default">
						<div class="panel-body">
								<legend><b>รายชื่อผู้ดูแล</b></legend>

										<div class="container">

								<table class="table table-hover">
								<thead>
								<tr>
								<td><b>PSUpassport</b></td>
								<td><b>Firstname</b></td>
								<td><b>Lastname</b></td>
								<td><b>E-mail</b></td>
								</tr>
								</thead>
								<tbody>
								<tr>
								<td></td>
								<td>Iesorn</td>
								<td>Chaisane</td>
								<td>iesorn.c@phuket.psu.ac.th</td>
								</tr>
								</tbody>
								</table>
									   </div><br>

							    <legend><b>รายชื่อเจ้าหน้าที่กิจกรรมนักศึกษา</b></legend>
							    <div class="container">
							    <table class="table table-hover">
								<thead>
								<tr>
								<td><b>PSUpassport</b></td>
								<td><b>Firstname</b></td>
								<td><b>Lastname</b></td>
								<td><b>E-mail</b></td>
								</tr>
								</thead>
								<tbody>
								<tr>
								<td>5630213040</td>
								<td>Mr.Surawut</td>
								<td>Japrang</td>
								<td>@email.psu.ac.th</td>
								</tr>
								<tr>
								<td>5630213040</td>
								<td>Mr.Thawat</td>
								<td>Musikatham</td>
								<td>thawat.m@phuket.psu.ac.th</td>
								</tr>
								</tbody>
								</table>
								</div>
						</div>
					</div>

				</div>

		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>



	</body>

</html>