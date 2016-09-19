<!DOCTYPE html>

<html lang="">

	<head>
	<span class="label label-warning">Demo</span>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Student Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<style>
		li {
		color: red;
		}
		li span {
		color: black;
		}
		.pgcolor{
			color: black;
		}

		/*.pg1{
			background-color: red;
			border: 0;
			height: 18px;
			border-radius: 9px;
		}
		.pg2{
			background-color: blue;
			border: 0;
			height: 18px;
			border-radius: 9px;
		}
		.pg3{
			background-color: #f3f3f3;
			border: 0;
			height: 18px;
			border-radius: 9px;
		}*/
		</style>


	</head>

	<body>
		<h1 class="text-center">Student Association Management System</h1>

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
					<p class="navbar-brand" >Student</p>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active" ><a href="#">การจัดการเอกสาร</a></li>
						<!--<li><a href="#">Link</a></li> -->
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
		<div class="text-center">
		<legend>การจัดการเอกสาร</legend><br>



			<a href="{{ url('project/student/form/th') }}" class="btn btn-success">สร้างเอกสารขอจัดทำกิจกรรม</a><br><br><br><br><br><br>
				</div>

				<legend></legend>
				<form  action="" method="POST" role="form">

				<div class="container">
						<div class="text-right">
						<dic class="row">
						<div class="col-sm-6">
						<p >ค้นหาเอกสารตามปี พ.ศ.</p>
						</div>
						<div class="col-sm-2">
						<input type="month" name="" id="input" class="form-control" value="" required="required" title="">
						</div></div>
						</div>
						</div>
					<div class="text-center">
						<a href="{{ url('project/student/index') }}" class="btn btn-success">ค้นหาเอกสาร</a><br>
					</div>

				</form><br>
				<div class="panel panel-default">
					<div class="panel-body">


				<div class="container">
					<table class="table table-hover">
						<tbody>
							<tr>
								<td><b>Project Name</b></td>
								<td></td>
								<td><p><b>Detail</b></p></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>โครงการพี่สอนน้อง 2559</td>
								<td>
								<!--<progress class="pg1" value="100" max="100"></progress>-->
								<div class="col-sm-6">
								<div class="progress">
								<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40"
								aria-valuemin="0" aria-valuemax="100" style="width:100%">success

								</div>
								</div>
								</div>
								<div class="col-sm-6">
									<p>อนุมัติ</p>
								</div>


								</td>

								<div class="modal fade" id="checkSta1" role="dialog">
    								<div class="modal-dialog modal-sm">
     								 <div class="modal-content">
        							<div class="modal-header">
          							<button type="button" class="close" data-dismiss="modal">&times;</button>
          							<h4 class="modal-title">Status</h4>
      								  </div>
       								 <div class="modal-body">

        							</div>

      									</div>
   										 </div>
  											</div>

								<td><a href="{{ url('project/student/form/th/edit') }}" class="btn btn-info">Edit</a></td>
								<td><a href="{{ url('project/student/form/th') }}" class="btn btn-success">view(เอกสารที่แนบ)</a></td>
								<td><a href="#" class="btn btn-danger disabled" data-toggle="modal" data-target="#dete1"  >Delete</a></td>
								<!--<div class="modal fade" id="dete1" role="dialog">

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
                    			</div></div>
              					</div>
         					    </div>-->



							</tr>
							<tr>
								<td>โครงการ SE 2558</td>
								<td>
								<div class="col-sm-6">
								<div class="progress">
								<div class="progress-bar progress-bar-warning progress-bar-striped active " role="progressbar" aria-valuenow="40"
								aria-valuemin="0" aria-valuemax="100" style="width:40%">Edit
								</div>
								</div>
								</div>
								<div class="col-sm-6">
									<a href="#" data-toggle="tooltip" title="2.องค์การบริหาร องค์การนักศึกษา">แก้ไข</a>
								</div>
								</td>

									<div class="modal fade" id="checkSta2" role="dialog">
    								<div class="modal-dialog modal-sm">
     								 <div class="modal-content">
        							<div class="modal-header">
          							<button type="button" class="close" data-dismiss="modal">&times;</button>
          							<h4 class="modal-title">Status</h4>
      								  </div>
       								 <div class="modal-body">

        							</div>

      									</div>
   										 </div>
  											</div>

								<td><a href="{{ url('project/student/form/th/edit') }}" class="btn btn-info">Edit</a></td>
								<td><a href="{{ url('project/student/form/th') }}" class="btn btn-success">view(เอกสารที่แนบ)</a></td>
								<td><a href="#" class="btn btn-danger disabled" data-toggle="modal" data-target="#dete1"  >Delete</a></td>
								<!--<div class="modal fade" id="dete2" role="dialog">
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
         					    </div>-->
							</tr>
							<tr>
								<td>โครงการ IT 2557</td>
								<td><div class="col-sm-6">
								<div class="progress">
								<div class="progress-bar progress-bar-info progress-bar-striped active  pgcolor" role="progressbar" aria-valuenow="40"
								aria-valuemin="0" aria-valuemax="100" style="width:10%">wait

								</div>
								</div>
								</div>
								<div class="col-sm-6">
									<a href="#" data-toggle="tooltip" title="2.องค์การบริหาร องค์การนักศึกษา">รออนุมัติ</a>
								</div></progress></td>
								<div class="modal fade" id="checkSta3" role="dialog">
    								<div class="modal-dialog modal-sm">
     								 <div class="modal-content">
        							<div class="modal-header">
          							<button type="button" class="close" data-dismiss="modal">&times;</button>
          							<h4 class="modal-title">Status</h4>
      								  </div>
       								 <div class="modal-body">

        							</div>

      									</div>
   										 </div>
  											</div>


								<td><a href="{{ url('project/student/form/th/edit') }}" class="btn btn-info">Edit</a></td>
								<td><a href="{{ url('project/student/form/th') }}" class="btn btn-success">view(เอกสารที่แนบ)</a></td>
								<td><a href="#" class="btn btn-danger disabled" data-toggle="modal" data-target="#dete1"  >Delete</a></td>
								<!--<div class="modal fade" id="dete3" role="dialog">
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
         					    </div>-->
							</tr>
							<tr>
								<td>โครงการ E-biz 2557</td>
								<td>
								<div class="col-sm-6">
								<div class="progress">
								<div class="progress-bar progress-bar-danger progress-bar-striped active " role="progressbar" aria-valuenow="40"
								aria-valuemin="0" aria-valuemax="100" style="width:100%">Fail
								</div>
								</div>
								</div>
								<div class="col-sm-6">
									<p>ไม่อนุมัติ</p>
								</div>
								</td>

									<div class="modal fade" id="checkSta2" role="dialog">
    								<div class="modal-dialog modal-sm">
     								 <div class="modal-content">
        							<div class="modal-header">
          							<button type="button" class="close" data-dismiss="modal">&times;</button>
          							<h4 class="modal-title">Status</h4>
      								  </div>
       								 <div class="modal-body">

        							</div>

      									</div>
   										 </div>
  											</div>

								<td><a href="{{ url('project/student/form/th/edit') }}" class="btn btn-info">Edit</a></td>
								<td><a href="{{ url('project/student/form/th') }}" class="btn btn-success">view(เอกสารที่แนบ)</a></td>
								<td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#dete2">Delete</a></td>
								<div class="modal fade" id="dete2" role="dialog">
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
			<script>
			function myFunction() {
			document.getElementById("myBtn").disabled = true;
			}
			</script>
			<script>
			$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();
			});
			</script>
	</body>

</html>