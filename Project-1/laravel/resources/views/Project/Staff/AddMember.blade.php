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
					<p class="navbar-brand" >saff</p>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active" ><a href="{{ url('project/Staff/home3') }}">การจัดการข้อมูลชมรม</a></li>
						<!--<li><a href="#">Link</a></li> -->
						<li class="active" ><a href="{{ url('project/Staff/Managemember') }}">การจัดการข้อมูลสมาชิกชมรม</a></li>
						<li class="active" ><a href="{{ url('project/Staff/permission') }}">การจัดการจัดข้อมูลปู้อนุมัติตามสิทธิ์</a></li>
						<li class="active" ><a href="{{ url('project/student/index') }}">ตรวจสอบสถานะเอกสาร</a></li>
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

		<h3 class="text-center">เพิ่มข้อมูลสมาชิก</h3> <br>
		<form action="" method="POST" role="form">
			<legend> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กรุณากรอกข้อมูล</legend>
			<div class="container">
			<div class="form-group">
				<label for="">รหัสนักศึกษา : </label>
				<div class="row">
					<div class="col-md-6">
				<input type="text" class="form-control" id="" placeholder=" "> <br>
				<label for="">คำนำหน้าชื่อ : </label>
				<p>
				<select name="formGender">
 				 		<option value="Mr">นาย</option>
 			 			<option value="Miss">นางสาว</option>
 			 			<option value="Mrs">นาง</option>
				</select>
				</p><br>

				<label for="">ชื่อ </label>
				<input type="text" class="form-control" id="" placeholder=" "><br>
				<label for="">นามสกุล</label>
				<input type="text" class="form-control" id="" placeholder=" "><br>
				<label for="">คณะ</label>
				<input type="text" class="form-control" id="" placeholder=" "><br>
				<label for="">สาขา</label>
				<input type="text" class="form-control" id="" placeholder=" "><br>
				
				<label for="">ตำแหน่ง</label>
				<p>
				<select name="formGender">
 				 		<option value=""> &nbsp;ประธานชมรม  &nbsp;  </option>
 			 			<option value=""> &nbsp;รองประธานชมรม  &nbsp;  </option>
 			 			<option value=""> &nbsp;เลขานุการ  &nbsp;  </option>
				</select>
				</p><br>

				<label for="">วันที่เริ่มดำรงตำแหน่ง</label>
				<input type="date" name="" id="input" class="form-control" value="" required="required" title=""><br>

				<label for="">วันสิื้นสุดตำแหน่ง</label>
				<input type="date" name="" id="input" class="form-control" value="" required="required" title=""><br>

				<label for="">เบอร์โทรติดต่อ</label>
				<input type="text" class="form-control" id="" placeholder=" "><br>

				<label for="">อีเมล</label>
				<input type="text" class="form-control" id="" placeholder=" "><br>
				
					</div> <!-- -->
	
        		 <!--<div class="secure">Upload form</div>-->
        		<button type="button" class="btn btn-info">ค้นหา</button>
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

		<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">เพิ่มข้อมูล</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">เพิ่มข้อมูลสำเร็จ</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

		<!--<a href="{{ url('project/index') }}" class="btn btn-success">เพิ่มข้อมูล</a>-->
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

