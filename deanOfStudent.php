<!DOCTYPE html>
<html>
<head>
	<title>Dean of Students</title>
	<style>
		.jumbotron{
		text-align:center;
		}
		.jumbotron h2{
			color:green;
			font-size:40px;
		}
		
		.row .col-sm-3 h3{
			color:green;
		}
		.row .col-sm-3 li{
			line-height:40px;
			list-style:decimal;
			
		}
		.row .col-sm-3 li a{
			color:111;
			text-decoration:none;
		}
	</style>
</head>
<body>
<?php

	include "header.php";


?>
<div class="container">
	<div class="jumbotron">
		<h2>Dean Of Students</h2>
		
	</div>
	<div class="row">
		<div class="col-sm-6">
		<div class="row">	
		<div class="col-sm-6">
				<h3 style="color:green">Dean Of Students</h3>
				<a href="#" class="thumbnail home-thumb" style="width:220px">
                <center><img src="gallery/dean.jpg" alt="" style="height:250px;width:200px"></center>
				
            </a>
			<h4>Dr. Ombok Sammy</h4>
			</div>
			<div class="col-sm-6">
			<h3 style="color:green">Dean message</h3>
				<p>The Office of the Dean of Students is committed to supporting education centered on student growth in order to reach their full potential both inside and outside the lecture rooms. We achieve this by nurturing students' intellectual and personal growth; helping them explore and experience the different aspects of college life and caring about students and their studies, social growth and well-being and is committed to helping students enjoy a great experience. Our mandate is to provide care for academicand co-curricular needs of our students.</P>

                
			</div>
			</div>
		</div>
		<div class="col-sm-3">
			<h3>Services Offered</h3>
				<li><a href="#">COUNSELLING SERVICES</a></li>
				<li><a href="#">CHAPLAINCY SERVICES</a> </li>
				<li><a href="#">CLUBS AND SOCIETIES</a></li>
		</div>
		<div class="col-sm-3">
			<h3>Facilities & support</h3>
				<li><a href="pure.html" >Health care </a></li>
				<li><a href="pure.html" >One shilling foundation </a></li>
				<li><a href="pure.html" >Dream Alive </a></li>
				<li><a href="pure.html" >Research Centre </a></li>
				
			
		</div>
		
	</div>
	
</div>
<?php

	include "footer.php";

?>

</body>
</html>