<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>

	<style media="screen">


	* {box-sizing: border-box}

			body {

					margin: 5px;


			}

			.Admin {
				color:  #fff;

				height: 200px;
				background-color: #787A9E;
				margin-top: 300px;

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
		padding-top: 30px;
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


		.Anchor {
			color: black;
			width: auto;
			padding-left: 300px;

		}

		.anchor-tag {
			text-decoration: none;
		}

		.label{
			background-color: white;
			height:auto;
			width: auto;
		}

		.info{
			background-color: #dae1e7;
			width: auto;
			height: auto;
			font-size: 25px;
			text-align: center;
			text-decoration: bold;

		}


		#p{
			padding-left: 500px;
			padding-right: 500px;
		}
		.div5{
			background-color: #373B84;
		}

		.fieldset{
			background-color: white;
		}

		.div1{

			color: black;
			float: left;
			background-color: #1eb2a6;
			height: 320px;
			width: 250px;
			text-align: center;
			padding-top: 80px;
			margin-top: 50px;
			margin-left: 50px;
			margin-right: 20px;
			border: 2px black solid;
		}

		.div2 {
			color: black;
			float: left;
			background-color: #1eb2a6;
			height: 320px;
			width: 250px;
			text-align: center;
			padding-top: 80px;
			margin-top: 50px;
			margin-left: 20px;
			margin-right: 5px;
			border: 2px black solid;
		}

		.div3 {
			color: black;
			float: right;
			background-color: #1eb2a6;
			height: auto;
			width: 300px;
			text-align:center;
			padding-top: 80px;
			margin-top: 50px;
			margin-left: 20px;
			margin-right: 550px;
			border: 2px black solid;
			font-size: 20px;
		}
	.div4 {
		color: black;
		float: right;
		background-color: #1eb2a6;
		height: auto;
		width: 300px;
		text-align: center;
		padding-top: 80px;
		margin-top: 50px;
		margin-left: 50px;
		margin-right: 550px;
		border: 2px black solid;
		font-size: 20px;
	}

	.registration{

			float:left;
			background-color:#1eb2a6;
			height: 200px;
			width: 1000px;

			margin-left: 220px;
			margin-top: 30px;
			padding-top: 20px;
			margin-bottom: 50px;
			text-align: center;
			border: 5px black solid;\
			font-size: 100px;
			font-style: italic;

	}

	</style>



</head>
<body class="">
	<header class="header" >
<h1 class="hd1" style="font-size: 45px; margin-bottom:10px;"> <strong>American International College-Bangladesh</strong> </h1>
	<h7 class="hd1"> Recruitment Panel</h7>
	<div style="float: right; padding-top: 38px; padding-right: 10px; " >
		<input type="button" name="button" value="Logout" class="btn" onclick="window.location.href = 'login.php';" >
	</div>
</header>

<div class="div0">
	<form action="" method="POST">
		<fieldset style="background-color:#e9e2d0; text-align:center; font-size:20px;">
			<legend><h2>Registration Form</h2></legend>
			<p>
				<label for="Name"> Name </label>
			<input type="text" placeholder="Enter name" name="name" required>
			</p>



			<p>
				<label for="Department">Department</label>

			<select name="department" id="department">
                <option value="Bangla">Bangla</option>
                <option value="English">English</option>
                <option value="Math">Math</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Biology">Biology</option>
                <option value="Ict">ICT</option>
            </select>

			</p>

			<p>
				<label for="Graduation">Graduation</label>
			<input type="text" id="Graduation" placeholder="Graduation" name="graduation" required>
			</p>



			<p>
				<label for="Institute"> Institute </label>
			<input type="text" id="Institute" placeholder="Enter institute" name="institute" required>
			</p>




			<p>
				<label for="Address"> Address  </label>
			<input type="text" id="Address" placeholder="Enter address" name="address" required>
			</p>


			<fieldset>
				<legend>Gender</legend>
				<p>

					<input type="radio"  name="gender" value="Male" required>
					<label for="Male">Male</label>


					<input type="radio"  name="gender" value="Female" required>
					<label for="Female">Female</label>


					<input type="radio"  name="gender" value="Others" required>
					<label for="Others">Others</label>
				</p>

			</fieldset>

      <p>
				<label for="Phone"> Phone </label>
			<input type="text" id="Phone" placeholder="Enter phone no" name="phone" required>
			</p>
			<p>
				<label for="Email"> Email </label>
			<input type="text" id="Email" placeholder="Enter email id" name="email" required>
			</p>

	<input type="submit" name="Recruit" value="Recruit">
	<button type="button" onclick="window.location.href = 'principal.php';" >Cancel</button>


		</fieldset>


	</form>

</div>



	<p>
		<?php

			if(isset($_POST['Recruit']))
			{
					echo "<div class='registration'>";

				$query="INSERT INTO `teacher`(`id`, `name`, `department`, `graduation`, `institute`, `address`, `gender`, `phone`, `email`) VALUES (:ID,:Name,:Department,:Graduation,:Institute,:Address,:Gender,:Phone,:Email)";
				$dns="mysql:host=localhost; dbname=AIC";
				$username="root";
				$password="";

				try{
					$db=new PDO($dns,$username,$password);
					$statement = $db->prepare($query);

					$statement->bindValue(':ID',"", PDO::PARAM_INT);
					$statement->bindValue(':Name',$_POST['name'], PDO::PARAM_STR);
					$statement->bindValue(':Department',$_POST['department'], PDO::PARAM_STR);
					$statement->bindValue(':Graduation',$_POST['graduation'], PDO::PARAM_STR);
					$statement->bindValue(':Institute',$_POST['institute'], PDO::PARAM_STR);
					$statement->bindValue(':Address',$_POST['address'], PDO::PARAM_STR);


					$statement->bindValue(':Gender',$_POST['gender'], PDO::PARAM_STR);
					$statement->bindValue(':Phone',$_POST['phone'], PDO::PARAM_STR);
					$statement->bindValue(':Email',$_POST['email'], PDO::PARAM_STR);



					if($statement->execute())
					{
						echo "<h1>Recruit successful!</h1>";
						echo "<h1>Teacher Recruitment is complete</h1>";
					}
					else
					{
						echo "<h1>Unable to recruit</h1>";
					}







				} catch(Exception $e){
					$error_message = $e->getMessage();
					echo "<p> Error Message: $error_message</p>";
				}


					echo "</div>";


			}



			?>

	</p>

	<div class="Admin">
		<p>Posted by: Hege Refsnes</p>
		<p>Contact information: <a href="mailto:someone@example.com">
		someone@example.com</a>.</p>
	</div>



</body>
</html>
