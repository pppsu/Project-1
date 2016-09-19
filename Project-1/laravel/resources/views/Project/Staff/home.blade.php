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

		<div class="jumbotron">
			<div class="container">
				<h2 class="text-center">จัดการข้อมูลชมรม</h2>

			</div>
		</div>

		<div class="text-center">
			<a href="{{ url('project/Staff/index') }}" class="btn btn-success">เพิ่มข้อมูลชมรม</a><br><br><br><br><br><br>
		</div>

		<div class="container">
					<table class="table table-hover">
						<tbody>
							<tr>
								<td><b>Name Cup</b></td>
								<td><p><b>Techer Name</b></p></td>
								<td></td>
								<td><p><b>Detail</b></p></td>
								<td></td>
							</tr>
							<tr>
								<td>NameCup 1</td>
								<td>จัตพงษ์ รอดศรี</td>

								<td><a href="{{ url('project/Staff/edit') }}" class="btn btn-info">Edit</a></td>
								<td><a href="{{ url('project/Staff/detail') }}" class="btn btn-success">Detail</a></td>
								<td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#dete1">Delete</a></td>

								<div class="modal fade" id="dete1" role="dialog">
   								 <div class="modal-dialog modal-sm">
                             	 <div class="modal-content">
      	                      		 <div class="modal-header">
                            			 <button type="button" class="close" data-dismiss="modal">&times;</button>
                             			<h4 class="modal-title">Delete !!</h4>
                               			</div>
                                        <div class="modal-body">
                      			  <p class="text-center"><b>You sure delete?</b></p>
                  				 </div>
               					 <div class="modal-footer">
                    			<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                    			 <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    			</div>
              					</div>
         					    </div>



							</tr>
							<tr>
								<td>NameCup 2</td>
								<td>TecherName3</td>

								<td><a href="{{ url('project/Staff/edit') }}" class="btn btn-info">Edit</a></td>
								<td><a href="{{ url('project/Staff/detail') }}" class="btn btn-success">Detail</a></td>
								<td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#dete1">Delete</a></td>

								<div class="modal fade" id="dete1" role="dialog">
   								 <div class="modal-dialog modal-sm">
                             	 <div class="modal-content">
      	                      		 <div class="modal-header">
                            			 <button type="button" class="close" data-dismiss="modal">&times;</button>
                             			<h4 class="modal-title">Delete !!</h4>
                               			</div>
                                        <div class="modal-body">
                      			  <p class="text-center"><b>You sure delete?</b></p>
                  				 </div>
               					 <div class="modal-footer">
                    			<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                    			 <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    			</div>
              					</div>
         					    </div>



							</tr>
								<tr>
								<td>NameCup 3</td>
								<td>TecherName3</td>

								<td><a href="{{ url('project/Staff/edit') }}" class="btn btn-info">Edit</a></td>
								<td><a href="{{ url('project/Staff/detail') }}" class="btn btn-success">Detail</a></td>
								<td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#dete1">Delete</a></td>

								<div class="modal fade" id="dete1" role="dialog">
   								 <div class="modal-dialog modal-sm">
                             	 <div class="modal-content">
      	                      		 <div class="modal-header">
                            			 <button type="button" class="close" data-dismiss="modal">&times;</button>
                             			<h4 class="modal-title">Delete !!</h4>
                               			</div>
                                        <div class="modal-body">
                      			  <p class="text-center"><b>You sure delete?</b></p>
                  				 </div>
               					 <div class="modal-footer">
                    			<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                    			 <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    			</div>
              					</div>
         					    </div>



							</tr>
						</tbody>
					</table>
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