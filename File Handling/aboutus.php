<DOCTYPE!>
<!DOCTYPE html>
<html>
<head>

	<!--------------------Bootstrap CSS------------------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-------------------- W3 CSS ------------------------>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!-------------------Google fonts--------------------->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

	<!-------------------W3 animations-------------------->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<style>
		.container{
			margin-top: 90px;
		}
		.fontstyle{
			font-family: 'Acme', sans-serif;
			color: #fbe0c4;
		}
		.on-it{
			height: 80%;
		}
		.about-first{
			text-align: center;
			vertical-align: middle;
			margin: auto;
			padding-top: 60px;
		}
		.w3-animate-top{
	    	animation-duration: 1.5s;
	    }
	</style>
	<title>First Page</title>
</head>
<body>
	<font class="fontstyle">
		<?php require_once "./navbar.php" ?>
		<div class="container">
			<div class="on-it w3-container w3-center w3-animate-top" style="background-image: linear-gradient(#248da3, #2c4b52);">
	    		<div class="about-first">
	    			<p style="font-size: 30px;">Project Title: Student Records</p>
	    			<p style="font-size: 18px;">'Student Records' is a single platform for stuents to upload their assignments, view their details and teachers can add student details, update student details, delete student details and search for a student record. The assignments submitted by the students are stored in the project folder.<br>Apart from this, in future we also want to add feature wherein faculty can also upload notes for a particular subject, semester and branch. On the other side the students can download notes. This overall idea, we got because of current scenerio, where evrything is happening online. It is hectic for faculty to create google form for every subject individually and also for students its quite complicated to submit assignments. But having a single platform like this, which is also handy can reduce the complexity.</p>
	    			<p style="font-size: 18px;">The website is built with PHP, HTML, CSS, Javascript, Bootstrap.</p>
	    			<p style="font-size: 18px;">The file structure concepts included are <u>Primary indexing</u> and <u>reclaiming the spaces</u>.</p>
	    			<small style="font-family: 'Uchen', serif;font-size: 12px; text-align:  center;position:absolute;left: 38%; bottom: 5px;">Credits- Monisha M: 1DT18IS056, Harshitha K M: 1DT18IS035</small>
		    	</div>
	    	</div>
		</div>
	</font>
</body>
</html

