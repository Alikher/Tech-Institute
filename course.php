<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>courses</title>
  <style>
    .how{
  border-radius: 3px;
  background-color:MintCream;
  float:left;
  width: 800px;
  height: 750px;
  padding-left: 50px;
  margin-left: 10px;
  color:mediumseagreen;
}
.how h2{
  border-bottom: 5px solid black;

}
.table,th, td{
  border:1px solid black;
}
.form h3{
  font-size: 20px;
}
.form{
  border-radius: 10px;
  background-color:mediumseagreen;
  float:left;
  width: 280px;
  height: 240px;
  padding-left: 50px;
  margin-left: 50px;
  margin-top: 30px;
  color:mintcream;
}
.form ul{
  list-style: none;
}
.form ul li a{
  text-decoration: none;
  font-size: 25px;
  color:maroon;
} 
.cos h1{
  font-size: 25px;
}
.cos{
  border-radius: 10px;
  background-color:mediumseagreen;
  float:left;
  width: 280px;
  height: 230px;
  padding-left: 50px;
  margin-left: 50px;
  margin-top: 50px;
    overflow: visible;
    color:mintcream;
}
.cos ul {
  list-style: none;
}
.cos ul li a {
  padding-right:25px;
  font-size: 25px;
  color:maroon;
  text-decoration: none;
}
.help a{
  text-decoration: none;
  border-radius: 10px;
  background-color:white;
  float:left;
  width: 280px;
  height: 80px;
  padding-left: 50px;
  margin-left: 50px;
  margin-top: 50px;
    overflow: visible;
    color:maroon;
    font-size: 25px;
}
.jumbotron{
	text-align:center;
}

  </style>

</head>
<body>
<?php

	include "header.php";
?>
<div class="container">
<div class="jumbotron">
<h2>List of Our Courses We offer</h2>
</div>
<div class="row">
<div class="col-sm-8">
	 	
<table class="table">
  <tr>
    <th>Courses</th>
    <th>Minimum Entry Requirements</th> 
    <th>Duration</th>
  </tr>
  <tr>
    <td>Information Technology</td>
    <td>K.C.S.E mean grade C+ and minimum grade of C in Mathematics and English; OR a relevant three (3) year Diploma from an Institution recognized by CUE and the University Senate.</td>
    <td>8 Semesters</td>
  </tr>
  <tr>
    <td>Cloud Computing</td>
    <td>K.C.S.E mean grade C+ and minimum grade of C in Mathematics and English; OR a relevant three (3) year Diploma from an Institution recognized by CUE and the University Senate.</td>
    <td>8 Semesters</td>
  </tr>
  <tr>
    <td>Virtualization</td>
    <td>K.C.S.E mean grade C+ and minimum grade of C+ in Mathematics and C in English; OR Recognized Diploma in Computer Science or equivalent qualification recognized by CUE and the University Senate.</td>
    <td>8 semesters</td>
  </tr>
   <tr>
    <td>Networking and Wireless</td>
    <td>K.C.S.E mean grade C+ and minimum grade of C+ in Mathematics and C in English; OR Recognized Diploma in Computer Engineering and Technology or equivalent qualification recognized by CUE and the University Senate.</td>
    <td>8 semesters</td>
  </tr>
   <tr>
    <td>Enterprise Architecture</td>
    <td>K.C.S.E mean grade C- (minus); OR Credit pass in Certificate in IT of Murang’a University Senate; OR an equivalent qualification from an Institution recognized by CUE and the University Senate.</td>
    <td>8 semesters</td>
  </tr>
   <tr>
    <td>Blockchain</td>
    <td>K.C.S.E mean grade C- (minus) and grades C- in Mathematics and D+ (plus) English; OR Certificate in Information Technology; OR Certificate in Computer Maintenance and Repairs; OR Any other qualification recognized by CUE and the University Senate.</td>
    <td>4 semesters</td>
  </tr>
   <tr>
    <td>Application Development</td>
    <td>K.C.S.E mean grade C- (minus) and grades C- in Mathematics and D+ (plus) English OR Certificate in Information technology; OR Certificate in Computer Maintenance and Repairs; OR Any other qualification recognized by the University Senate.</td>
    <td>4 semesters</td>
  </tr>
   <tr>
    <td>Cybersecurity</td>
    <td>K.C.S.E mean grade D+ or an equivalent qualification recognized by CUE and the University Senate.</td>
    <td>2 semesters</td>
  </tr>
   <tr>
    <td>Project Management</td>
    <td>K.C.S.E mean grade D+ or an equivalent qualification recognized by CUE and the University Senate.</td>
    <td>4 semesters</td>
  </tr>
   <tr>
    <td>Unified Communications</td>
    <td>K.C.S.E mean grade D+ or an equivalent qualification recognized by CUE and the University Senate.</td>
    <td>8 semesters</td>
  </tr>
   <tr>
    <td>IT Service Management</td>
    <td>K.C.S.E mean grade C- (minus) and grades C- in Mathematics and D+ (plus) English OR Certificate in Information technology; OR Certificate in Computer Maintenance and Repairs; OR Any other qualification recognized by the University Senate.</td>
    <td>8 semesters</td>
  </tr>
   <tr>
    <td>Data Science</td>
    <td>K.C.S.E mean grade D+ or an equivalent qualification recognized by CUE and the University Senate.</td>
    <td>8 semesters</td>
  </tr>
 
</table>
</div>
	 <div class="col-sm-4">

  <center><h3 > <a href="how.php">Application Procedure</a></h3><center>

   

	 <div class="form">
	 	<h3>Download Application Forms</h3>
	 	<ul>
	 		
	 		<li><a href="documents/under.pdf">Diploma</a></li>
	 		<li ><a href="documents/under.pdf">Certificate</a></li>

	 	</ul>

	 </div>

 	<div class="cos"> 
		<h1>Quick links </h1>
		<ul>
		<li><a href="history.php">About us</a></li>
		<li><a href="contact.php">Contact us</a></li>
		<li><a href="appform.php">Admissions</a></li>
		<li><a href="index.php">Management</a></li>
		<li><a href=""></a></li>
		</ul>
</div>
</div>
</div>
</div>
	 
   <?php
   
		include "footer.php";
   
   
   ?>
	 
</body>

</html>