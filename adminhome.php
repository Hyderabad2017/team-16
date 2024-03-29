<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Learning Curve</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      background-color: #f4511e;
      color: #fff;
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
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
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
      background-color: #f4511e;
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
      color: #f4511e;
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


 
  </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">ADMIN</a>
    </div>
</nav>
<div class="container"> 
	<div style="color: #fff;padding-top:100px">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-2">
			<button type="button" class="btn btn-info btn-lg">PROFILE</button>
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-2" style="color:black">	
		
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Student</button>


		</div>
				<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="color:black">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
			<div>
	<label>Student Id</label>
		<input type="text" name="studentid">
		</div>
		
		<div>
	<label>Name of Student</label>
		<input type="text" name="studentname">
		</div>
		
		
	<div>
	<label>Gender</label>	
	<select name="gender" class="text">
		<option value="Male">Male</option>
		<option value="Female">Female</option>
	</select>
	</div>
		
		
		<div>
	<label>Age</label>
		<input type="number" name="age">
		</div>

		<div>
	<label>Family Type</label>	
	<select name="familytype" class="text">
		<option value="Both">Both Parents</option>
		<option value="single">Single parent</option>
		<option value="orphan">Orphan</option>
	</select>
	</div>
		
		<div>
	<label>Siblings</label>
		<input type="number" name="siblings">
		</div>
		
		
	<div>
	<label>Order Of Birth</label>	
	<select name="order of birth" class="text">
		<option value="first born">First born</option>
		<option value="second born">Second Born</option>
		<option value="later">later born</option>
	</select>
	</div>
		
	<div>
	<label>Parent Education</label>	
	<select name="parentedu" class="text">
		<option value="primary">Primary</option>
		<option value="secondary">Secondary</option>
		<option value="higher">Higher Secondary</option>
		<option value="higher">None</option>
	</select>
	</div>
		
		<div>
	<label>FamilyIncome</label>
		<input type="number_format" name="income">
		</div>
		
		</div>
        <div class="modal-footer">
		         <button type="button" class="btn btn-default" onclick="buttonlogin()" >login</button>

		            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
		<div class="col-sm-1"></div>
	<div class="col-sm-2" style="color:black">
		  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Teacher</button>

		<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
			<div class="input-group">
				<label>Full Name</label>
				<input type="text" name="username" required>
			</div>
			<div class="input-group">
				<label>Age</label>
				<input type="number" name="age" required>
			</div>
			<div class="input-group">
				<label>Address</label>
				<input type="text" name="address" required>
			</div>
			<div class="input-group">
				<label>School</label>
				<input type="text" name="school" required>
			</div>
			<div class="input-group">
				<label>Contact</label>
				<input type="number" name="contact" required>
			</div>
			<div class="input-group">
				<button type="submit" name="login" class="butn" onclick="buttonlogin()">login </button>
			</div>
			
		</div>
        <div class="modal-footer">
		
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	
		</div>
		<div class="col-sm-2"></div>
	</div>

		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-2">
				<button type="button" class="btn btn-info btn-lg">Classroom Assessment</button>
			</div>
			<div class="col-sm-2"></div>
            <div class="col-sm-2">
				<button type="button" onclick="myfunc()" class="btn btn-info btn-lg">Final Reports</button>
			</div>
			<div class="col-sm-3"></div>
		</div>
 </div> 
<div class="jumbotron text-center">
  <h1>LEARNING CURVE</h1> 
  <h3>Life Skills Foundation</h3> 
  <p>ADMIN PAGE</p>
</div>
<script >
	function myfunc()

	{
		window.location="http://127.0.0.1:9000/learningcurveapp/finalreport"
	}
</script>

</body>
</html>