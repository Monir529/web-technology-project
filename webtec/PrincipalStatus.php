<!DOCTYPE html>
<html>

<head>
	<title>Principal Status</title>




	<style>
* {box-sizing: border-box}

		body {

				margin: 5px;


		}

		.Admin {
			color:  #fff;
			height: 120px;
			background-color: #787A9E;
			margin: 0px;

			padding-top: 100px;
			padding-left: 150px;
			padding-top: 20px;



		}

.header {

	height: 220px;
	width:  150px:;
	background-color: #373B84;
	margin: 0px;
	border: 5px solid black;

}
.hd1{


	padding-left: 20px;
	padding-top: 38px;
	text-align: Left;
	font-size: 35px;
	color: white;
}

.div5{
	background-color: grey;
}


.container{
	text-align: center;
	margin-top: 360px;
}
.button {
	display: inline-block;
	border-radius: 4px;
	background-color: #5458B1;
	border: 5px solid black;
	color: #FFFFFF;
	text-align: center;
	font-size: 28px;
	height: 145px;
	padding: 20px;
	width: 400px;
	transition: all 0.5s;
	cursor: pointer;
	margin: 5px;
	margin-top: 10px;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

.button span {
	cursor: pointer;
	display: inline-block;
	position: relative;
	transition: 0.5s;
}

.button span:after {
	content: '\00bb';
	position: absolute;
	opacity: 0;
	top: 0;
	right: -20px;
	transition: 0.5s;
}

.button:hover span {

	padding-right: 25px;

}

.button:hover span:after {
	opacity: 1;
	right: 0;
}
.clear{

	clear: both;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border: none;
	border-radius: 5px;
}

.teacher{
	text-align: center;
	font-size: 20px;
}
	</style>




</head>

<body class="">

	<header class="header" >
<h1 class="hd1" style="font-size: 45px; margin-bottom:10px;"> <strong>American International College-Bangladesh</strong> </h1>
	<h7 class="hd1"> Teacher Information Panel</h7>
	<div style="float: right; padding-top: 38px; padding-right: 10px; " >
		<input type="button" name="button" value="Logout" class="btn" onclick="window.location.href = 'login.php';" >
	</div>
</header>


	<section class="teacher">
		<?php

	  $query = "SELECT * FROM principalstatus;";
		$dns="mysql:host=localhost; dbname=AIC";
		$username="root";
		$password="";

		try{
			$db=new PDO($dns,$username,$password);
			$statement = $db->prepare($query);
			$statement->execute();

			while($principalstatus = $statement->fetch()){
				$name = $principalstatus['Name'];
				echo "<br />";
				echo "<strong>Name : </strong>".$name;
				echo "<br />";
				echo "<br />";
				$Graduation = $principalstatus['Graduation'];
				echo "<strong>Graduation : </strong>".$Graduation;
				echo "<br />";
				echo "<br />";
				$Institute = $principalstatus['Institute'];
				echo "<strong>Institute : </strong>".$Institute;
				echo "<br />";
				echo "<br />";
				$PostGraduation = $principalstatus['PostGraduation'];
				echo "<strong>Post Graduation: </strong>".$PostGraduation;
				echo "<br />";
				echo "<br />";
				$PGInstitute = $principalstatus['PGInstitute'];
				echo "<strong>Post Graduation Institute : </strong>".$PGInstitute;
				echo "<br />";
				echo "<br />";
				$Gender = $principalstatus['Gender'];
				echo "<strong>Gender : </strong>".$Gender;
				echo "<br />";
				echo "<br />";
				$Email = $principalstatus['Email'];
				echo "<strong>Email : </strong>".$Email;
				echo "<br />";
				echo "<br />";
				$Phone = $principalstatus['Phone'];
				echo "<strong>Phone Number : </strong>".$Phone;
				echo "<br />";
				echo "<br />";
				$Address = $principalstatus['Address'];
				echo "<strong>Address : </strong>".$Address;
				echo "<br />";

			}

			$statement->closeCursor();

		}  catch(Exception $e){
			$error_message = $e->getMessage();
			echo "<p> Error Message: $error_message</p>";
		}


		?>
	</section>


	<div class="Admin">
	  <p>Posted by: Hege Refsnes</p>
	  <p>Contact information: <a href="mailto:someone@example.com">
	  someone@example.com</a>.</p>
	</div>

</body>

</html>
