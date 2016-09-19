<!DOCTYPE html>

<html lang="">

	<head>
	<span class="label label-warning">Demo</span>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
					<p class="navbar-brand" >Staff</p>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active" ><a href="{{ url('project/Staff/home') }}">การจัดการข้อมูลชมรม</a></li>
						<!--<li><a href="#">Link</a></li> -->
						<li class="active" ><a href="{{ url('project/Staff/Managemember') }}">การจัดการข้อมูลสมาชิกชมรม</a></li>
						<li class="active" ><a href="{{ url('project/Staff/permission') }}">การจัดการจัดข้อมูลปู้อนุมัติตามสิทธิ์</a></li>
						<li class="active" ><a href="{{ url('project/Staff/status') }}">ตรวจสอบสถานะเอกสาร</a></li>
					</ul>

					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">PSUpassport</a></li>
						<li><a href="#">Firstname Lastname</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Menu <b class="caret"></b></a>
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

		<h3 class="text-center">เพิ่มข้อมูลชมรม</h3> <br>
		<form action="" method="POST" role="form">

			<div class="container">
			<div class="form-group">
				<label for="">ชื่อชมรม</label>
				<div class="row">

				<input type="text" class="form-control" id="" placeholder=" "><br>
				<label for="">อักษรย่อชมรม</label>
				<input type="text" class="form-control" id="" placeholder=" "><br>
				<label for="">PSU Passport อ.ที่ปรึกษา</label>
				<input type="text" class="form-control" id="" placeholder=" "><br>
				<label for="">คำนำหน้าชื่อ อ.ที่ปรึกษา</label>
				<p>
				<select name="formGender">
 				 		<option value="Mr">นาย</option>
 			 			<option value="Miss">นางสาว</option>
 			 			<option value="Mrs">นาง</option>
				</select>
				</p><br>
				<label for="">ชื่อ อ.ที่ปรึกษา</label>
				<input type="text" class="form-control" id="" placeholder=" "><br>
				<label for="">นามสกุล อ.ที่ปรึกษา</label>
				<input type="text" class="form-control" id="" placeholder=" "><br>
				<label for="">Email อ.ที่ปรึกษา</label>
				<input type="text" class="form-control" id="" placeholder=" "><br>
				<label for="">วันที่เริ่มต้นดำรงตำแหน่ง</label>
				<input type="date" name="" id="input" class="form-control" value="" required="required" title=""><br>
				<label for="">วันที่เสิ้นสุดดำรงตำแหน่ง</label>
				<input type="date" name="" id="input" class="form-control" value="" required="required" title="">

				</div>

        		 <div id="success"> </div>

      			 <!--{!! Form::submit('Submit', array('class'=>'send-btn')) !!}-->
      			 {!! Form::close() !!}
      			 </div>
   				 </div>
   				 </div> <!--Upload file-->
  				</div>

			</div>
			</div>
			</div>
			</div>





		</form>
		<div class="container">
		<div class="row">
		<div class="col-md-5">

		<!-- ด้านล่างต้องเปลี่ยนเปล่าตรง url -->
		<a href="{{ url('project/Staff/home') }}" class="btn btn-success">เพิ่มข้อมูลชนรม</a>
		<!--<a href="{{ url('project/index') }}" class="btn btn-success">ขออุมัติทำกิจกรรม</a>-->

		</div>
		</div>
		</div>
		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>

 		<br><br><br>



	</body>

</html>