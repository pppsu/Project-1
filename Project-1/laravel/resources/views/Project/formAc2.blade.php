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
			.pp{
				border-bottom: 2px solid red;
    			background-color: white;
			}
			.tb{
				border-style: solid;
				border-top-color: white;
			}
			.tb2{
				border-style: solid;
				border-bottom-color: white;
			}
			.pf{
				font-size: 12pt;
			}
			.ipt{
				border-bottom: 2px solid red;
				border-top-color: 	transparent;
				border-right-color: 	transparent;
				border-left-color: 	transparent;
				background-color: 	transparent;

			}
			.flag-icon-th{
				display: inline-block;
				width: 16px;
				height: 11px;
				background: url('logo/th.png') ;
}


.flag.flag-th {
    background-position: 0 0;
}

			}
			.flag-icon-en{
					display: inline-block;
					width: 16px;
					height: 11px;
					background: url('en.png') no-repeat;
			}



.flag.flag-gb {
    background-position: 0 0;
}


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
						<li class="active" ><a href="{{ url('project/student/index') }}">การจัดการเอกสาร</a></li>
						<!--<li><a href="#">Link</a></li> -->
					</ul>

					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">PSUpassport</a></li>
						<li><a href="#">Firstname Lastname</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Menu <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{{ url('project/home') }}">Home</a></li>
								<li><a href="#">Student</a></li>
								<li><a href="{{ url('project/student/form/th') }}">Thai</a></li>
								<li><a href="{{ url('project/student/form/en') }}">Eng</a></li>
								<li><a href="#">Logout</a></li>

							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		<div class="jumbotron">
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
								<div class="text-center">
									<img src="http://goo.gl/MJbSd7" width="51" height="86"><br><br>  <!-- http://goo.gl/MJbSd7-->

									<p><span style="font-size: 16pt;"><b>แบบฟอร์มขออนุมัติจัดกิจกรรมนักศึกษา</b></span></p>
									<p><span style="font-size: 16pt;"><b>สำหรับองค์การบริหาร องค์การนักศึกษา / สภานักศึกษา / ชมรม / กลุ่มกิจกรรม</b></span></p>

								</div><br>


									<form class="navbar-form pull-left">
										<label class="pf ">ชื่อองค์กรกิจกรรม </label> <input type="text" style="width: 900px;" class="ipt">

									</form>

								<div class="row">
								<div class="col-sm-6">
								<label class="pf">ที่ <input type="text" style="width: 300px;" class="ipt"></label> </div>
								<div class="col-sm-6">
								<label class="pf">	วันที่ : </label><strong>
								<span id="time"></span>
								</strong></div>
								<!--<marquee behavior="scroll"  width="30%">
								<strong>
								<span id="time"></span>
								</strong>
								</marquee>-->
								</div>
								<label class="pf">เรื่อง ขออนุมัติจัดกิจรรม </label> <input type="text" style="width: 300px;" class="ipt">

						</h3>
					</div>
					<div class="panel-body">
					<label for="">เรียน	รองอธิการบดีวิทยาเขตภูเก็ต</label><br>
					<p style="font-size: 12pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ด้วย (ชื่อองค์กร) ได้มีกำหนดจัดโครงการ (ชื่อโครงการ) ในระหว่าง วันที่ (วัน เดือน ปี) ถึง วันที่ (วัน เดือน ปี)สถานที่จัดกิจกรรม ณ (สถานที่จัดกิจกรรม)</p>
						<p style="font-size: 12pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในการนี้ จึงใคร่ขออนุมัติจัดโครงการตามกำหนดการและสถานที่ดังกล่าวข้างต้น <a data-toggle="collapse" data-target="#fileUp">(ตามเอกสารโครงการที่แนบ)</a> โดยใช้งบประมาณจาก</p>
						<!--Upload file-->
					<div id="fileUp" class="collapse navbar-right">
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
   				 		</div>
					</div>

						<div class="checkbox-inline">
										<label class="checkbox-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<input type="checkbox" value="">เงินบำรุงกิจกรรมนักศึกษา

										</label>
										<label class="checkbox-inline">
										<input type="checkbox" value="" data-toggle="collapse" data-target="#demo">งบประมาณแหล่งอื่นๆ <input type="text" style="width: 300px;" class="ipt" placeholder="ระบุ">
										</label>



										<br>


										</div>
										<div class="container">
										<div class="row">
										<div class="col-sm-9">
										<p style="font-size: 12pt" class="text-right">จำนวนเงิน </p></div>

										<div class="col-sm-3">
										<input type="text" style="width: 150px;" class="ipt"> <p style="font-size: 10pt"><u>(ห้าหมื่นบาทถ้วน) </u></p></div></div></div>


					<p><span style="font-size: 12pt;"><b>โดยขอชั่วโมงกิจกรรมประเภทต่างๆ ดังนี้</b></span></p>


						<div class="container-fluid">
  							<div class="row">
   							 <div class="col-sm-10">
    						  <p style="font-size: 12pt;">บังคับเลือก</p>
   							 </div>
   								<div class="col-sm-2" >
      							 <p style="font-size: 12pt;">จำนวน <input type="text" style="width: 30px;" class="ipt"> ชม.</p>
   								</div>
  							 </div>
  							 <div class="row">
   							 <div class="col-sm-10">
    						  <p style="font-size: 12pt;">จิตสำนึกสาธารณะ คุณธรรมจริยธรรมและความมีวินัย </p>
   							 </div>
   								<div class="col-sm-2" >
      							 <p style="font-size: 12pt;">จำนวน <input type="text" style="width: 30px;" class="ipt"> ชม.</p>
   								</div>
  							 </div>
  							 <div class="row">
   							 <div class="col-sm-10">
    						  <p style="font-size: 12pt;">ทักษะทางสังคม วิชาการ วิชาชีพ สมรรถนะสากลบนพื้นฐานความเป็นไทย </p>
   							 </div>
   								<div class="col-sm-2" >
      							 <p style="font-size: 12pt;">จำนวน <input type="text" style="width: 30px;" class="ipt"> ชม.</p>
   								</div>
  							 </div>
  							 <div class="row">
   							 <div class="col-sm-10">
    						  <p style="font-size: 12pt;">ความภูมิใจ ในสถาบัน ถือประโยชน์ส่วนตัวเป็นที่สอง ประโยชน์ของเพื่อนมนุษย์เป็นกิจที่หนึ่ง</p>
   							 </div>
   								<div class="col-sm-2" >
      							 <p style="font-size: 12pt;">จำนวน <input type="text" style="width: 30px;" class="ipt"> ชม.</p>
   								</div>
  							 </div>
  							 <div class="row">
   							 <div class="col-sm-10">
    						  <p style="font-size: 12pt;">พหุวัฒนธรรม ความเป็นประชาธิปไตยอันมีพระมหากษัตริย์เป็นประมุข</p>
   							 </div>
   								<div class="col-sm-2" >
      							 <p style="font-size: 12pt;">จำนวน <input type="text" style="width: 30px;" class="ipt"> ชม.</p>
   								</div>
  							 </div>
  							  <div class="row">
   							 <div class="col-sm-10">
    						  <p style="font-size: 12pt;">เสริมสร้างสุขภาพ</p>
   							 </div>
   								<div class="col-sm-2" >
      							 <p style="font-size: 12pt;">จำนวน <input type="text" style="width: 30px;" class="ipt"> ชม.</p>
   								</div>
  							 </div>
						</div>


						<div class="container">

							<p style="font-size: 12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จึงเรียนมาเพื่อโปรดพิจารณาอนุมัติ จักเป็นพระคุณยิ่ง</p>
							<div class="row">
							<div class="col-sm-9"></div>
							<div class="col-sm-3">
							<label for="">ลงชื่อ </label><a href="#"> Thongchai</a>
							</label><br><a href="#">(Thongchai Rawangkhaem)</a>
							</div>
							</div>

						</div>

					</div>
					</div>

						<div class="panel panel-default">
							<div class="panel-body">
								<div class="container">
									<div class="row">
									   <div class="col-sm-6">
									   	    <p style="font-size: 10pt;" class="text-center">กระบวนการพิจารณาโครงการขององค์การนักศึกษา</p>
									   	    <table class="table table-hover">
									   	      			<thead>
									   	      				<tr>
									   	      					<th>1.อาจารย์ที่ปรึกษา</th>
									   	      				</tr>
									   	      			</thead>
									   	      			<tbody style="border-style: solid; ">
									   	      				<tr>
									   	      					<td>
									   	      						<div class="checkbox">
									   	      							<label>
									   	      								<input type="checkbox" value="">อนุมัติ

									   	      							</label>
									   	      							<label>
									   	      								<input type="checkbox" value="">ไม่อนุมัติ

									   	      							</label>
									   	      							<label>
									   	      								<input type="checkbox" value="" data-toggle="collapse" data-target="#edit1">แก้ไข
									   	      								<div id="edit1" class="collapse">
																				<textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="ระบุ"></textarea>
																			</div>
									   	      							</label>
									   	      						</div>
									   	      						<div class="col-sm-2">
									   	      						<p style="font-size: 10pt;">ลงชื่อ</p></div>
									   	      						<div class="col-sm-8">
									   	      						<select name="" id="input" class="form-control" required="required">
									   	      							<option value="">---</option>
									   	      							<option value="">อาจารย์</option>
									   	      						</select><br>
									   	      						</div>

									   	      					</td>
									   	      				</tr>
									   	      				<tr><td >
									   	      						<div class="col-sm-2">
									   	      						<p style="font-size: 10pt;">วันที่</p></div>
									   	      						<div class="col-sm-5">

									   	      						<input type="date" name="" id="input" class="form-control" value="" required="required" title="">

									   	      						</div>


									   	      				</td></tr>
									   	      			</tbody>
									   	      			<tr><td></td></tr>

									   	      			<thead>
									   	      				<tr>
									   	      					<th>2.องค์การบริหาร องค์การนักศึกษา</th>
									   	      				</tr>
									   	      			</thead>
									   	      			<tbody style="border-style: solid; ">
									   	      				<tr>
									   	      					<td>
									   	      						<div class="checkbox">
									   	      							<label>
									   	      								<input type="checkbox" value="">อนุมัติ

									   	      							</label>
									   	      							<label>
									   	      								<input type="checkbox" value="">ไม่อนุมัติ

									   	      							</label>
									   	      							<label>
									   	      								<input type="checkbox" value="" data-toggle="collapse" data-target="#edit2">แก้ไข
									   	      								<div id="edit2" class="collapse">
																				<textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="ระบุ"></textarea>
																			</div>
									   	      							</label>
									   	      						</div>
									   	      						<div class="col-sm-2">
									   	      						<p style="font-size: 10pt;">ลงชื่อ</p></div>
									   	      						<div class="col-sm-8">
									   	      						<select name="" id="input" class="form-control" required="required">
									   	      							<option value="">---</option>
									   	      							<option value="">อาจารย์</option>
									   	      						</select><br>
									   	      						</div>

									   	      					</td>
									   	      				</tr>
									   	      				<tr><td >
									   	      						<div class="col-sm-2">
									   	      						<p style="font-size: 10pt;">วันที่</p></div>
									   	      						<div class="col-sm-5">
									   	      						<input type="date" name="" id="input" class="form-control" value="" required="required" title="">

									   	      						</div>


									   	      				</td></tr>
									   	      			</tbody>
															<tr ><td></td></tr>


															<thead>
									   	      				<tr>
									   	      					<th>3.สภานักศึกษา องค์กรนักศึกษา</th>
									   	      				</tr>
									   	      			</thead>
									   	      			<tbody style="border-style: solid; ">
									   	      				<tr>

									   	      					<td>
									   	      						<div class="checkbox">
									   	      							<label>
									   	      								<input type="checkbox" value="">อนุมัติ

									   	      							</label>
									   	      							<label>
									   	      								<input type="checkbox" value="">ไม่อนุมัติ

									   	      							</label>
									   	      							<label>
									   	      								<input type="checkbox" value="" data-toggle="collapse" data-target="#edit3">แก้ไข
									   	      								<div id="edit3" class="collapse">
																				<textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="ระบุ"></textarea>
																			</div>
									   	      							</label>
									   	      						</div>
									   	      						<div class="col-sm-2">
									   	      						<p style="font-size: 10pt;">ลงชื่อ</p></div>
									   	      						<div class="col-sm-8">
									   	      						<select name="" id="input" class="form-control" required="required">
									   	      							<option value="">---</option>
									   	      							<option value="">อาจารย์</option>
									   	      						</select><br>
									   	      						</div>

									   	      					</td>
									   	      				</tr>
									   	      				<tr><td >
									   	      						<div class="col-sm-2">
									   	      						<p style="font-size: 10pt;">วันที่</p></div>
									   	      						<div class="col-sm-5">
									   	      						<input type="date" name="" id="input" class="form-control" value="" required="required" title="">

									   	      						</div>


									   	      				</td></tr>
									   	      			</tbody>



									   	      		</table>
									   </div>
									   <div class="col-sm-6">
									   		 <p style="font-size: 10pt;" class="text-center">กระบวนการพิจารณาโครงการของมหาวิทยาลัย</p>
									   		 <table class="table table-hover">
									   		 	<thead>
									   		 		<tr>
									   		 			<th>4.หัวหน้างานกิจกรรมนักศึกษา</th>
									   		 			<th></th>
									   		 		</tr>
									   		 	</thead>
									   		 	<tbody class="tb2">
									   		 		<tr>
									   		 			<td>บังคับเลือก</td>
									   		 			<td>จำนวน............ชม.</td>
									   		 		</tr>
									   		 		<tr>
									   		 			<td>จิตสำนึกสาธารณะ คุณธรรมจริยธรรมและความมีวินัย </td>
									   		 			<td>จำนวน............ชม.</td>
									   		 		</tr>
									   		 		<tr>
									   		 			<td>ทักษะทางสังคม วิชาการ วิชาชีพ สมรรถนะสากลบนพื้นฐานความเป็นไทย </td>
									   		 			<td>จำนวน............ชม.</td>
									   		 		</tr>
									   		 		<tr>
									   		 			<td>ความภูมิใจ ในสถาบัน ถือประโยชน์ส่วนตัวเป็นที่สอง ประโยชน์ของเพื่อนมนุษย์เป็นกิจที่หนึ่ง </td>
									   		 			<td>จำนวน............ชม.</td>
									   		 		</tr>
									   		 		<tr>
									   		 			<td>พหุวัฒนธรรม ความเป็นประชาธิปไตยอันมีพระมหากษัตริย์เป็นประมุข </td>
									   		 			<td>จำนวน............ชม.</td>
									   		 		</tr>
									   		 		<tr>
									   		 			<td>เสริมสร้างสุขภาพ </td>
									   		 			<td>จำนวน............ชม.</td> <!--  <input type="text" style="width: 30px;" class="ipt">   -->
									   		 		</tr>

									   		 	</tbody>
									   		 </table>
									   		 <table class="table table-hover">
									   	      			<thead>
									   	      				<tr>
									   	      					<th></th>

									   	      				</tr>

									   	      			</thead>
									   	      			<tbody class="tb">
									   	      				<tr>
									   	      					<td>
									   	      						<div class="checkbox">
									   	      							<label>
									   	      								<input type="checkbox" value="">อนุมัติ

									   	      							</label>
									   	      							<label>
									   	      								<input type="checkbox" value="">ไม่อนุมัติ

									   	      							</label>
									   	      							<label>
									   	      								<input type="checkbox" value="" data-toggle="collapse" data-target="#edit4">แก้ไข
									   	      								<div id="edit4" class="collapse">
																				<textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="ระบุ"></textarea>
																			</div>
									   	      							</label>
									   	      						</div>
									   	      						<div class="col-sm-2">
									   	      						<p style="font-size: 10pt;">ลงชื่อ</p></div>
									   	      						<div class="col-sm-8">
									   	      						<select name="" id="input" class="form-control" required="required">
									   	      							<option value="">---</option>
									   	      							<option value="">นายสุรวุฒิ   จาปรัง</option>
									   	      						</select>
									   	      						<label class="navbar-right"> ( นายสุรวุฒิ   จาปรัง ) </label><br>
									   	      						</div>

									   	      					</td>
									   	      				</tr>
									   	      				<tr><td >
									   	      						<div class="col-sm-2">
									   	      						<p style="font-size: 10pt;">วันที่</p></div>
									   	      						<div class="col-sm-5">
									   	      						<input type="date" name="" id="input" class="form-control" value="" required="required" title="">

									   	      						</div>


									   	      				</td></tr>
									   	      			</tbody>
									   	      			<tr><td></td></tr>

									   	      			<thead>
									   	      				<tr>
									   	      					<th>5.ผู้อำนวยการกองกิจการนักศึกษา</th>
									   	      				</tr>
									   	      			</thead>
									   	      			<tbody style="border-style: solid; ">
									   	      				<tr>
									   	      					<td>
									   	      						<div class="checkbox">
									   	      							<label>
									   	      								<input type="checkbox" value="">อนุมัติ

									   	      							</label>
									   	      							<label>
									   	      								<input type="checkbox" value="">ไม่อนุมัติ

									   	      							</label>
									   	      							<label>
									   	      								<input type="checkbox" value="" data-toggle="collapse" data-target="#edit5">แก้ไข
									   	      								<div id="edit5" class="collapse">
																				<textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="ระบุ"></textarea>
																			</div>
									   	      							</label>
									   	      						</div>
									   	      						<div class="col-sm-2">
									   	      						<p style="font-size: 10pt;">ลงชื่อ</p></div>
									   	      						<div class="col-sm-8">
									   	      						<select name="" id="input" class="form-control" required="required">
									   	      							<option value="">---</option>
									   	      							<option value="">นายธวัช  มุสิกธรรม</option>
									   	      						</select><label class="navbar-right">  ( นายธวัช  มุสิกธรรม )  </label><br>
									   	      						</div>

									   	      					</td>
									   	      				</tr>
									   	      				<tr><td >
									   	      						<div class="col-sm-2">
									   	      						<p style="font-size: 10pt;">วันที่</p></div>
									   	      						<div class="col-sm-5">
									   	      						<input type="date" name="" id="input" class="form-control" value="" required="required" title="">

									   	      						</div>


									   	      				</td></tr>
									   	      			</tbody>
									   	      			<tr><td></td></tr>


									   	      			<thead>
									   	      				<tr>
									   	      					<th>6.ผู้ช่วยอธิการบดีฝ่ายพัฒนานักศึกษา</th>
									   	      				</tr>
									   	      			</thead>
									   	      			<tbody style="border-style: solid; ">
									   	      				<tr>
									   	      					<td>
									   	      						<div class="checkbox">
									   	      							<label>
									   	      								<input type="checkbox" value="">อนุมัติ

									   	      							</label>
									   	      							<label>
									   	      								<input type="checkbox" value="">ไม่อนุมัติ

									   	      							</label>
									   	      							<label>
									   	      								<input type="checkbox" value="" data-toggle="collapse" data-target="#edit6">แก้ไข
									   	      								<div id="edit6" class="collapse">
																				<textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="ระบุ"></textarea>
																			</div>
									   	      							</label>

									   	      						</div>
									   	      						<div class="col-sm-2">
									   	      						<p style="font-size: 10pt;">ลงชื่อ</p></div>
									   	      						<div class="col-sm-8">
									   	      						<select name="" id="input" class="form-control" required="required">
									   	      							<option value="">---</option>
									   	      							<option value="">นายเจริญ  พรหมฤทธิ์</option>
									   	      						</select><label class="navbar-right"> ( นายเจริญ  พรหมฤทธิ์ ) </label><br>
									   	      						</div>

									   	      					</td>
									   	      				</tr>
									   	      				<tr><td >
									   	      						<div class="col-sm-2">
									   	      						<p style="font-size: 10pt;">วันที่</p></div>
									   	      						<div class="col-sm-5">
									   	      						<input type="date" name="" id="input" class="form-control" value="" required="required" title="">

									   	      						</div>


									   	      				</td></tr>
									   	      			</tbody>
									   	      			<tr><td></td></tr>

									   	      			<thead>
									   	      				<tr>
									   	      					<th>7.คำสั่ง รองอธิการบดีวิทยาเขตภูเก็ต</th>
									   	      				</tr>
									   	      			</thead>
									   	      			<tbody style="border-style: solid; ">
									   	      				<tr>
									   	      					<td>
									   	      						<div class="checkbox">
									   	      							<label>
									   	      								<input type="checkbox" value="">อนุมัติ
									   	      							</label>
									   	      							<label>
									   	      								<input type="checkbox" value="">ไม่อนุมัติ

									   	      							</label>
									   	      							<label>
									   	      								<input type="checkbox" value="" data-toggle="collapse" data-target="#edit7">แก้ไข
									   	      								<div id="edit7" class="collapse">
																				<textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="ระบุ"></textarea>
																			</div>
									   	      							</label>

									   	      						</div>
									   	      						<div class="col-sm-2">
									   	      						<p style="font-size: 10pt;">ลงชื่อ</p></div>
									   	      						<div class="col-sm-8">
									   	      						<select name="" id="input" class="form-control" required="required">
									   	      							<option value="">---</option>
									   	      							<option value="">รศ.ดร.วรวุธ วิสุทธิ์เมธางกูร</option>
									   	      						</select><label class="navbar-right"> (รศ.ดร.วรวุธ วิสุทธิ์เมธางกูร) </label><br>
									   	      						</div>

									   	      					</td>
									   	      				</tr>
									   	      				<tr><td >
									   	      						<div class="col-sm-2">
									   	      						<p style="font-size: 10pt;">วันที่</p></div>
									   	      						<div class="col-sm-5">

									   	      						<input type="date" name="" id="input" class="form-control" value="" required="required" title="">

									   	      						</div>


									   	      				</td></tr>
									   	      			</tbody>
									   	      		</table>
									   </div>
									</div>
								</div>
							</div>
								<div class="panel-footer">
									Prince of Songkla University, Phuket Campus
								<span id="datetime"></span>
								</div>
						</div>

				</div>
				<div class="text-center">
				<a href="{{ url('project/student/index') }}" class="btn btn-success">OK</a>
				<a href="{{ url('project/student/index') }}" class="btn btn-danger">Cancel</a>
				</div>
					<div class="container-fluid text-right">
						<a href="#" title="To Top">
						<span class="glyphicon glyphicon-chevron-up " ></span>
						</a>
						<p>Top</p></div>
			</div>

		</div>







		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
		<script>var today = new Date();
				document.getElementById('time').innerHTML=today;</script>


						<script>
						var dt = new Date();
						document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"/"+ (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
						</script>




	</body>

</html>