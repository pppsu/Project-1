<!DOCTYPE html>
<html lang="">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Admin Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }
  .jumbotron {
      background-color: #FFFFFF;
      color: black;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #C546C4;
      font-size: 50px;
  }
  .logo-nomal{
        color: #F51F1F;
      font-size: 70px;
  }
  .logo {
      color: #C546C4;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e;
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color:#C546C4;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #CE3CC2;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    }
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  .div-color {
    height: 100px;
    width: 100%;
    background-color: powderblue;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage"><img src="http://goo.gl/MJbSd7" alt="" width="20" height="34"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ผู้ดูแล</a></li>
        <li><a href="#admin1">สิทธิ์ผู้ดูแล</a></li>
        <li><a href="#admin2">สิทธิ์เจ้าหน้าที่กิจกรรมนักศึกษา</a></li>
         <li><a href="#admin3">รายชื่อผู้อนุมัติ</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Student Association Management System</h1>

  <p style="color:red;">Admin</p>

</div>





<!-- Container (About Section) -->
<div id="about" class="container-fluid  bg-grey">
  <div class="row">
    <div class="col-sm-8">
      <h2>รายชื่อผู้ดูแล</h2><br>
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
                <td>Lesorn</td>
                <td>Lesorn</td>
                <td>Chaisane</td>
                <td>iesorn.c@phuket.psu.ac.th</td>
                </tr>
                </tbody>
                </table>

      <br>
     <h2>รายชื่อเจ้าหน้าที่กิจกรรมนักศึกษา</h2>
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
                <td>Surwut</td>
                <td>Mr.Surawut</td>
                <td>Japrang</td>
                <td>surawut.j@phuket.psu.ac.th</td>
                </tr>
                <tr>
                <td>Thawat</td>
                <td>Mr.Thawat</td>
                <td>Musikatham</td>
                <td>thawat.m@phuket.psu.ac.th</td>
                </tr>
                </tbody>
                </table>

    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-list logo"></span>
    </div>
  </div>
</div>



<div id="admin1" class="container-fluid " >
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2> สิทธิ์ผู้ดูแล</h2>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <a href="homes#admin1"><span class="glyphicon glyphicon-import logo-small"  data-toggle="collapse" data-target="#addadmin1"></span></a>
      <h4>เพิ่มสิทธิ์ผู้ดูแล</h4>
      <p>+++</p>
    </div>
    <div class="col-sm-4">
      <a href="homes#admin1"><span class="glyphicon glyphicon-export logo-small" data-toggle="collapse" data-target="#deleteadmin1"></span></a>
      <h4>ลบสิทธิ์ผู้ดูแล</h4>
      <p>---</p>
    </div>


  </div>
    </div>
  </div>
<div class="col-sm-4"></div>
   <div id="addadmin1" class="collapse col-sm-6">
    <form class="navbar-form " role="search">
        <div class="form-group">
          <legend>เพิ่มผู้ดูแลระบบ</legend>
          <div class="navbar-left">
           <label for="">PSU Passport/Firstname/Lastname :</label>
          <input type="text" class="form-control" placeholder="Search">
           <button type="submit" class="btn btn-default">โหลดข้อมูล</button>
           </div><br><br>
           <div class="div-color">
           <label for="">Firstname :</label> <br>
           <label for="">Lastname :</label> <br>
           <label for="">E-mail :</label> <br>
           </div>
        </div><br><br>
           <button type="submit" class="btn btn-success ">บันทึกข้อมูล</button>
      </form>
    </div>
    <div class="col-sm-4">
    <div id="deleteadmin1" class="collapse col-sm-4">
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
                <td>Lesorn</td>
                <td>Lesorn</td>
                <td>Chaisane</td>
                <td>iesorn.c@phuket.psu.ac.th</td>
                 <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </tr>

                </tbody>
                </table>
                </div>
    </div>

</div>


<div id="admin2" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-8">
       <h2>สิทธิ์เจ้าหน้าที่กิจกรรมนักศึกษา</h2><br>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
    <a href="homes#admin2" ><span class="glyphicon glyphicon-import logo-small" data-toggle="collapse" data-target="#addadmin2"></span></a>

      <h4>เพิ่มสิทธิ์ผู้ดูแล</h4>
      <p>+++</p>

    </div>

    <div class="col-sm-4">
      <a href="homes#admin2"><span class="glyphicon glyphicon-export logo-small" data-toggle="collapse" data-target="#deleteadmin2"></span></a>
      <h4>ลบสิทธิ์ผู้ดูแล</h4>
      <p>---</p>
      </div>
    </div>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo"></span>
    </div>
  </div>
         <div id="addadmin2" class="collapse">
    <form class="navbar-form " role="search">
        <div class="form-group">
          <legend>เพิ่มผู้ดูแลระบบ</legend>
          <div class="navbar-left">
           <label for="">PSU Passport/Firstname/Lastname :</label>
          <input type="text" class="form-control" placeholder="Search">
           <button type="submit" class="btn btn-default">โหลดข้อมูล</button>
           </div><br><br>
           <div class="div-color">
           <label for="">Firstname :</label> <br>
           <label for="">Lastname :</label> <br>
           <label for="">E-mail :</label> <br>
           </div>
        </div><br><br>
           <button type="submit" class="btn btn-success ">บันทึกข้อมูล</button>
      </form>


    </div>
        <div id="deleteadmin2" class="collapse col-sm-4">
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
                <td>Surwut</td>
                <td>Mr.Surawut</td>
                <td>Japrang</td>
                <td>surawut.j@phuket.psu.ac.th</td>
                <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </tr>
                <tr>
                <td>Thawat</td>
                <td>Mr.Thawat</td>
                <td>Musikatham</td>
                <td>thawat.m@phuket.psu.ac.th</td>
                <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </tr>

                </tbody>
                </table>
                </div>

</div>

<div id="admin3" class="container-fluid " >
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>รายชื่อผู้อนุมัติ</h2>

  <br>

<div style="width:900px; height:400px; overflow:auto;">
  <label for="" style="color:red;">1.อาจารย์ที่ปรึกษา</label>
  <table class="table table-hover"  >
       <thead>
                <tr>
                <td><b>PSUpassport</b></td>
                <td><b>Firstname</b></td>
                <td><b>Lastname</b></td>
                <td><b>E-mail</b></td>
                </tr>
                </thead>
                <tbody>
                <tr class="info">
                <td>adisak.i</td>
                <td>Adisak </td>
                <td>Intana</td>
                <td>adisak.i@phuket.psu.ac.th</td>
                 <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </tr>
                <tr>
               <td>Surwut</td>
                <td>Mr.Surawut</td>
                <td>Japrang</td>
                <td>surawut.j@phuket.psu.ac.th</td>
                <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </tr>
                <tr class="info">
                <td>Thawat</td>
                <td>Mr.Thawat</td>
                <td>Musikatham</td>
                <td>thawat.m@phuket.psu.ac.th</td>
                 <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </tr>

                <tr>
                <td>Thawat</td>
                <td>Mr.Thawat</td>
                <td>Musikatham</td>
                <td>thawat.m@phuket.psu.ac.th</td>
                 <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </tr>

                </tbody>
                </table>

                  <label for="" style="color:red;">2.องค์การบริหาร องค์การนักศึกษา</label>
                <table class="table table-hover"  >
              <thead>
                <tr>
                <td><b>PSUpassport</b></td>
                <td><b>Firstname</b></td>
                <td><b>Lastname</b></td>
                <td><b>E-mail</b></td>
                </tr>
                </thead>
                <tbody>
                <tr class="info">
                <td>S</td>
                <td>Mr.</td>
                <td>J</td>
                <td>@phuket.psu.ac.th</td>
                 <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </tr>
                </tbody>
                </table>

                <label for="" style="color:red;">3.สภานักศึกษา องค์กรนักศึกษา</label>
                <table class="table table-hover"  >
              <thead>
                <tr>
                <td><b>PSUpassport</b></td>
                <td><b>Firstname</b></td>
                <td><b>Lastname</b></td>
                <td><b>E-mail</b></td>
                </tr>
                </thead>
                <tbody>
                <tr class="info">
                <td>Surwut.j</td>
                <td>Mr.Surawut</td>
                <td>Japrang</td>
                <td>surawut.j@phuket.psu.ac.th</td>
                 <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </tr>
                </tbody>
                </table>
                <label for="" style="color:red;">4.หัวหน้างานกิจกรรมนักศึกษา</label>
                <table class="table table-hover"  >
              <thead>
                <tr>
                <td><b>PSUpassport</b></td>
                <td><b>Firstname</b></td>
                <td><b>Lastname</b></td>
                <td><b>E-mail</b></td>
                </tr>
                </thead>
                <tbody>
                <tr class="info">
                <td>Surwut</td>
                <td>Mr.Surawut</td>
                <td>Japrang</td>
                <td>surawut.j@phuket.psu.ac.th</td>
                 <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </tr>
                </tbody>
                </table>

                <label for="" style="color:red;">5.ผู้อำนวยการกองกิจการนักศึกษา</label>
                <table class="table table-hover"  >
              <thead>
                <tr>
                <td><b>PSUpassport</b></td>
                <td><b>Firstname</b></td>
                <td><b>Lastname</b></td>
                <td><b>E-mail</b></td>
                </tr>
                </thead>
                <tbody>
                <tr class="info">
                <td>thawat.mj</td>
                <td>Mr.Thawat </td>
                <td>Musikatham</td>
                <td>thawat.mj@phuket.psu.ac.th</td>
                 <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </tr>
                </tbody>
                </table>

                 <label for="" style="color:red;">6.ผู้ช่วยอธิการบดีฝ่ายพัฒนานักศึกษา</label>
                <table class="table table-hover"  >
              <thead>
                <tr>
                <td><b>PSUpassport</b></td>
                <td><b>Firstname</b></td>
                <td><b>Lastname</b></td>
                <td><b>E-mail</b></td>
                </tr>
                </thead>
                <tbody>
                <tr class="info">
                <td>Charoen.p</td>
                <td>Mr.Charoen</td>
                <td>Phromrit</td>
                <td>Charoen.p@phuket.psu.ac.th</td>
                 <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </tr>
                </tbody>
                </table>
                <label for="" style="color:red;">7.คำสั่ง รองอธิการบดีวิทยาเขตภูเก็ต</label>
                <table class="table table-hover"  >
              <thead>
                <tr>
                <td><b>PSUpassport</b></td>
                <td><b>Firstname</b></td>
                <td><b>Lastname</b></td>
                <td><b>E-mail</b></td>
                </tr>
                </thead>
                <tbody>
                <tr class="info">
                <td>worawut.w</td>
                <td>Assoc. Prof. Dr.Worawut </td>
                <td>Wisutmethangoon</td>
                <td>worawut.w@phuket.psu.ac.th</td>
                 <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </tr>
                </tbody>
                </table>




                </div>

    </div>
  <div class="row slideanim">
    <div class="col-sm-4">
      <a href="homes#admin3"><span class="glyphicon glyphicon-import logo-small"  data-toggle="collapse" data-target="#addall"></span></a>
      <h4>เพิ่มสิทธิ์ผู้อนุมัติ</h4>
      <p>+++</p>
    </div>
    <div class="col-sm-6">
     <div id="addall" class="collapse">
    <form class="navbar-form " role="search">
        <div class="form-group">
          <legend>เพิ่มผู้ดูแลระบบ</legend>
          <div class="navbar-left">
           <label for="">PSU Passport/Firstname/Lastname :</label>
          <input type="text" class="form-control" placeholder="Search">
           <button type="submit" class="btn btn-default">โหลดข้อมูล</button>
           </div><br><br>
           <div class="div-color">
           <label for="">Firstname :</label> <br>
           <label for="">Lastname :</label> <br>
           <label for="">E-mail :</label> <br>
           </div>
        </div><br><br>
           <button type="submit" class="btn btn-success ">เพิ่มอาจารย์ที่ปรึกษา</button>
           <button type="submit" class="btn btn-success ">เพิ่มผู้ช่วยอธิการบดีฝ่ายพัฒนานักศึกษา</button>
           <button type="submit" class="btn btn-success ">เพิ่มรองอธิการบดีวิทยาเขตภูเก็ต</button>


    </div>














<footer class="container-fluid text-right">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up " ></span>

  </a>
  <p>Top</p>

</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>

