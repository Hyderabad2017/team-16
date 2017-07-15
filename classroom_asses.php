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
  @media screen and (max-width: 1000px) {
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
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Classroom Assessment Form</a>
    </div>
	
	</div>
	</nav>
	<br><br>


<div class="container">
  
  <table class="table">
    <thead>
      <tr>
        <th>Question</th>
        <th>Yes</th>
        <th>No</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1) students enjoy their classwork in my class</td>
        <td><input type="radio" name="q1" value ="yes"></td>
        <td><input type="radio" name="q1" value="no"></td>
      </tr>
      <tr>
        <td>2) students are always fighting with each other</td>
        <td><input type="radio" name="q2" value ="yes"></td>
        <td><input type="radio" name="q2" value="no"></td>
      </tr>
      <tr>
        <td>3) students often race to see who finishes first</td>
        <td><input type="radio" name="q3" value ="yes"></td>
        <td><input type="radio" name="q3" value="no"></td>
      </tr>
         <tr>
        <td>4) In our class the work is hard to do</td>
        <td><input type="radio" name="q4" value ="yes"></td>
        <td><input type="radio" name="q4" value="no"></td>
      </tr>
         <tr>
        <td>5) In my class everyone is my friend</td>
        <td><input type="radio" name="q5" value ="yes"></td>
        <td><input type="radio" name="q5" value="no"></td>
      </tr>
         <tr>
        <td>6) Some students are not happy in my class</td>
        <td> <input type="radio" name="q6" value ="yes"></td>
        <td><input type="radio" name="q6" value="no"></td>
      </tr>
         <tr>
        <td>7) Some of the students in our class are mean</td>
        <td><input type="radio" name="q7" value ="yes"></td>
        <td> <input type="radio" name="q7" value="no"></td>
      </tr>
         <tr>
        <td>8) Most of the students want their work to be better than their friends</td>
        <td><input type="radio" name="q8" value ="yes"></td>
        <td><input type="radio" name="q8" value="no"></td>
      </tr>
         <tr>
        <td>9) Most students can do their schoolwork without help</td>
        <td><input type="radio" name="q9" value ="yes"></td>
        <td><input type="radio" name="q9" value="no"></td>
      </tr>
         <tr>
        <td>10)Some people in my class are not my friends.</td>
        <td><input type="radio" name="q10" value ="yes"></td>
        <td><input type="radio" name="q10" value="no"></td>
      </tr>
         <tr>
        <td>11) Students seem to like the class.</td>
        <td><input type="radio" name="q11" value ="yes"></td>
        <td> <input type="radio" name="q11" value="no"></td>
      </tr>
         <tr>
        <td>12) Many students in our class like to fight</td>
        <td> <input type="radio" name="q12" value ="yes"></td>
        <td><input type="radio" name="q12" value="no"></td>
      </tr>
         <tr>
        <td>13) Some students feel bad when they donʼt do as well as the others</td>
        <td><input type="radio" name="q13" value ="yes"></td>
        <td><input type="radio" name="q13" value="no"></td>
      </tr>
         <tr>
        <td>14) Only the smarter students can do their work.</td>
        <td> <input type="radio" name="q14" value ="yes"></td>
        <td><input type="radio" name="q14" value="no"></td>
      </tr>
         <tr>
        <td>15) All students in my class are close friends</td>
        <td> <input type="radio" name="q15" value ="yes"></td>
        <td><input type="radio" name="q15" value="no"></td>
      </tr>
         <tr>
        <td>16) Some of the students do not like the class</td>
        <td><input type="radio" name="q16" value ="yes"></td>
        <td><input type="radio" name="q16" value="no"></td>
      </tr>
         <tr>
        <td>17) Certain students always want to have their way.</td>
        <td><input type="radio" name="q17" value ="yes"></td>
        <td> <input type="radio" name="q17" value="no"></td>
      </tr>
         <tr>
        <td>18) Some students always try to do their work better than the others</td>
        <td> <input type="radio" name="q18" value ="yes"></td>
        <td><input type="radio" name="q18" value="no"></td>
      </tr>
        <tr>
        <td>19) Schoolwork is hard to do</td>
        <td><input type="radio" name="q19" value ="yes"></td>
        <td><input type="radio" name="q19" value="no"></td>
      </tr>
         <tr>
        <td>20) All of the students in my class like each other. </td>
        <td><input type="radio" name="q20" value ="yes"></td>
        <td><input type="radio" name="q20" value="no"></td>
      </tr>
        
         <tr>
        <td>21) This class is fun.</td>
        <td> <input type="radio" name="q21" value ="yes"></td>
        <td><input type="radio" name="q21" value="no"></td>
      </tr>
         <tr>
        <td>22) Students in our class fight a lot.</td>
        <td><input type="radio" name="q22" value ="yes"></td>
        <td><input type="radio" name="q22" value="no"></td>
      </tr>
         <tr>
        <td>23) A few students in my class want to be first all the time.</td>
        <td><input type="radio" name="q23" value ="yes"></td>
        <td><input type="radio" name="q23" value="no"></td>
      </tr>
         <tr>
        <td>24) Most of the students in my class know how to do their work</td>
        <td><input type="radio" name="q24" value ="yes"></td>
        <td><input type="radio" name="q24" value="no"></td>
      </tr>
         <tr>
        <td>25) Students in our class like each other as friends</td>
        <td> <input type="radio" name="q25" value ="yes"></td>
        <td><input type="radio" name="q25" value="no"></td>
      </tr>
    
    </tbody>
  </table>
  <div class="input-group">
		<button type="submit" name="submit" class="butn" onclick="buttonsubmit()">Submit</button>
	</div>
</div>
<script>
function buttonreg()
{
	window.location="#";
}
</script>

</body>
</html>
