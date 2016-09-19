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
						<li class="active" ><a href="">การจัดการเอกสาร</a></li>
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

		<h3 class="text-center">สร้างเอกสารขอทำกิจกรรมชมรม</h3> <br>
		<form action="" method="POST" role="form">
			<legend>กรุณากรอกข้อมูล</legend>
			<div class="container">
			<div class="form-group">
				<label for="">สถานที่บันทึก</label>
				<div class="row">
					<div class="col-md-6">
				<input type="text" class="form-control" id="" placeholder=" "><br>
				<label for="">วันที่บันทึก</label>
				<input type="date" name="" id="input" class="form-control" value="" required="required" title="">
				<label for="">เรื่อง ขออนุมัติกิจกรรม</label>
				<input type="text" class="form-control" id="" placeholder=" "><br>
				<label for="">กำหนดจัดโครการ</label>
				<input type="text" class="form-control" id="" placeholder=" "><br>
				<label for="">วันที่เริ่มต้นโครงการ</label>
				<input type="date" name="" id="input" class="form-control" value="" required="required" title="">
				<label for="">วันที่สิ้นสุดโครงการ</label>
				<input type="date" name="" id="input" class="form-control" value="" required="required" title="">
				<label for="">สถานที่จัดกิจกรรม ณ</label>
				<input type="text" class="form-control" id="" placeholder=" "><br>
				<label for="">ประเภทงบประมาณ</label>
						<div class="checkbox">
					<label>
						<input type="checkbox" value=""> เงินบำรุงกิจกรรมนักศึกษา
					</label><br>
					<label>
						<input type="checkbox" value=""> เงิบประมาณแหล่งอื่น ๆ (ระบุ)
					</label>
					<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
				</div>
				<label for="">จำนวนเงิน</label>
				<input type="number" name="" id="input" class="form-control" value="" min="{5"} max="" step="" required="required" title=""><br>
				<label for="">ชั่วโมงกิจกรรมประเภทต่าง ๆ (สามารถเลือกได้มากกว่า 1 ข้อ)</label>
				<div class="checkbox">
					<label>
						<input type="checkbox" value="">บังคับเลือก
					</label>
					</div>
								<div class="input-container">
					<p>จำนวน
					<input type="text" name="" id="input" class="" value="" required="required" pattern="" title=""> ชม.</p>
					</div>
					<label>
						<input type="checkbox" value="">จิตสำนึกสาธารณะ คุณธรรมจริยธรรมและความมีวินัย
					</label>
								<div class="input-container">
					<p>จำนวน
					<input type="text" name="" id="input" class="" value="" required="required" pattern="" title=""> ชม.</p>
					</div>
					<label>
						<input type="checkbox" value="">ทักษะทางสังคม วิชาการ วิชาชีพ สมรรถนะสากลบนพื้นฐานความเป็นไทย
					</label>
								<div class="input-container">
					<p>จำนวน
					<input type="text" name="" id="input" class="" value="" required="required" pattern="" title=""> ชม.</p>
					</div><label>
						<input type="checkbox" value="">ความภูมิใจ ในสถานบัน ถือประโยชน์ส่วนตนเป็นที่สอง ประโยชน์ของเพื่อนมนุษย์เป็นกิจที่หนึ่ง
					</label>
								<div class="input-container">
					<p>จำนวน
					<input type="text" name="" id="input" class="" value="" required="required" pattern="" title=""> ชม.</p>
					</div><label>
						<input type="checkbox" value="">พหุวัฒนธรรม ความเป็นประชาธิปไตรอันมีพระมหากษัตริย์เป็นประมุข
					</label>
								<div class="input-container">
					<p>จำนวน
					<input type="text" name="" id="input" class="" value="" required="required" pattern="" title=""> ชม.</p>
					</div><label>
						<input type="checkbox" value="">เสริมสุขภาพ
					</label>
								<div class="input-container">
					<p>จำนวน
					<input type="text" name="" id="input" class="" value="" required="required" pattern="" title=""> ชม.</p>
					</div>
					<label>
						<input type="checkbox" value="">อื่น ๆ
					</label>
					<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
								<div class="input-container"><br>
					<p>จำนวน
					<input type="text" name="" id="input" class="" value="" required="required" pattern="" title=""> ชม.</p>
					</div> <!-- -->
				</div>
				<div class="col-md-5">
				 <label for="">เอกสารโครงการที่แนบ</label>
				 <div class="about-section">
   				 <div class="text-content">
     			 <div class="span7 offset1">
       			 @if(Session::has('success'))
          		 <div class="alert-box success">
         		 <h2>{!! Session::get('success') !!}</h2>
          		 </div>
        		 @endif
        		 <!--<div class="secure">Upload form</div>-->
        		 {!! Form::open(array('url'=>'apply/upload','method'=>'POST', 'files'=>true)) !!}
         		 <div class="control-group">
          		 <div class="controls">
          		 {!! Form::file('image') !!}
	  			 <p class="errors">{!!$errors->first('image')!!}</p>
				 @if(Session::has('error'))
				 <p class="errors">{!! Session::get('error') !!}</p>
				 @endif
        		 </div>
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

		<a href="{{ url('project/student/form2') }}" class="btn btn-success">ขออุมัติทำกิจกรรม</a>
		<!--<a href="{{ url('project/index') }}" class="btn btn-success">ขออุมัติทำกิจกรรม</a>-->
		<a href="{{ url('project/student/index') }}" class="btn btn-info">กลับ</a>
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