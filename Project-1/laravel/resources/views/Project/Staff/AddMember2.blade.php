@extends('Project.Staff.template')

@section('content')
<h1>เพิ่มข้อมูลสมาชิก</h1>
 			<form action="addStudent" method="post">
 			<br>

				<div class="row">
				<div class="col-md-2">	
				</div> 
				<div class="col-md-2">	
				</div> 
				<div class="col-md-3">
					รหัสนักศึกษา : &nbsp; &nbsp; &nbsp;
					<button type="button" class="btn btn-warning">เพิ่มไฟล์</button>

					&nbsp; &nbsp; ไม่ได้เลือกไฟล์ใด

				</div>
				
			</div> 
			<br>
			<div class="row">
				<div class="col-md-2">	
				</div> 
				<div class="col-md-2">	
				</div> 
				<div class="col-md-3">
					<button type="button" class="btn btn-success">นำเข้าข้อมูลด้วยไฟล์ Excel</button>

				</div>
				
			</div> 

</div>
@endsection