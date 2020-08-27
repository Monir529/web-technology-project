
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

		color: white;
		padding-left: 20px;
		padding-top: 30px;
		text-align: Left;
		font-size: 35px;

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
	<h7 class="hd1"> Teacher Information Panel</h7>
	<div style="float: right; padding-top: 38px; padding-right: 10px; " >
		
	</div>
</header>

<div class="div0">
	<form action="" method="POST">
		<fieldset style="background-color:#e9e2d0; text-align:center; font-size:20px;">
			<legend><h1>Registration Form</h1></legend>
			<table border="2px" style="border-spacing:10px; margin-left:500px; font-size:25px;">
				<tr>

						<td><label for="FirstName"> First Name</label></td>

						<td>	<input type="text" placeholder="Enter your first name" name="FirstName" required> </td>
					</tr>

					<tr>
						<td><label for="LastName"> Last Name</label></td>
					<td><input type="text" id="LastName" placeholder="Enter your last name" name="LastName" required></td>
					</tr>




					<tr>
						<td>	<label for="FatherName"> Father's Name</label>
						</td>
						<td>
							<input type="text" id="FatherName" placeholder="Enter your father's name" name="FatherName" required>
						</td>
					</tr>

					<tr>
						<td>
							<label for="MotherName"> Mother's Name</label>
						</td>
					<td>
						<input type="text" id="MotherName" placeholder="Enter your mother's name" name="MotherName" required>
					</td>
					</tr>




						<tr>

							<td>
								<label for="DOB"> Date Of Birth </label>
							</td>
					<td>
							<input type="Date" id="DOB" placeholder="Enter your date of birth" name="DOB" required>
					</td>
						</tr>


				<tr>

					<td>
						<label for="Address"> Address </label>
					</td>
				<td>
					<input type="text" id="Address" placeholder="Enter your adress" name="Address" required>
				</td>

				</tr>

					<tr>

									<td><label for="SSCResult"> SSC Result </label></td>
								<td><input type="text" id="SSCResult" placeholder="Enter your ssc result" name="SSCResult" required></td>

					</tr>



					<tr>

						<td>
							<label for="PassingYear"> Passing Year </label>
						</td>
				<td>
						<input type="text" id="PassingYear" placeholder="Enter your passing year" name="PassingYear" required>
				</td>
					</tr>

				<tr>
					<td>
						<label for="Group">Group</label>
					</td>
				<td>
					<select id="Group" name="Group" required >
						<option> Science </option>
						
					</select>
				</td>
				</tr>





						<tr>
							<td>
									<label for="Gender">Gender</label>
							</td>
							<td>
								<input type="radio"  name="Gender" value="Male" required>
								<label for="Male">Male</label>


								<input type="radio"  name="Gender" value="Female" required>
								<label for="Female">Female</label>


								<input type="radio"  name="Gender" value="Others" required>
								<label for="Others">Others</label>
							</td>
						</tr>


					<tr>

						<td>
							<label for="Religion">Religion</label>
						</td>
							<td>
								<select id="Religion" name="Religion" >
									<option> Islam </option>
									<option> Hindu </option>
									<option> Buddhist </option>
									<option> Christian </option>
									<option> Others</option>
								</select>
							</td>
					</tr>




						<tr>

						<td>
								<label for="Email"> Email </label>
						</td>
						<td>
							<input type="text" id="Email" placeholder="enter your email id" name="Email" required>
						</td>
						</tr>





			</table>



					<input type="submit" name="Register" value="Register" style="width:120px; height:40px; margin:30px; font-size: 20px; background:black;color:white">

					<input type="reset" style="width:120px; height:40px; margin:30px; font-size: 20px; background:black;color:white" value="Cancel">



			</tr>
		</fieldset>


	</form>

</div>



	<p>
		<?php

			if(isset($_POST['Register']))
			{
					echo "<div class='registration'>";

				$query="INSERT INTO `registration`(`FirstName`, `LastName`, `Father`, `Mother`, `DOB`, `Address`, `SSCResult`, `PassingYear`, `SSCGroup`, `Gender`, `Religion`, `Email`) VALUES (:FirstName,:LastName,:Father,:Mother,:DOB,:Address,:SSCResult,:PassingYear,:SSCGroup,:Gender,:Religion,:Email)";
				$dns="mysql:host=localhost; dbname=AIC";
				$username="root";
				$password="";

				try{
					$db=new PDO($dns,$username,$password);
					$statement = $db->prepare($query);

					$statement->bindValue(':FirstName',$_POST['FirstName'], PDO::PARAM_STR);
					$statement->bindValue(':LastName',$_POST['LastName'], PDO::PARAM_STR);
					$statement->bindValue(':Father',$_POST['FatherName'], PDO::PARAM_STR);
					$statement->bindValue(':Mother',$_POST['MotherName'], PDO::PARAM_STR);
					$statement->bindValue(':DOB',$_POST['DOB'], PDO::PARAM_STR);
					$statement->bindValue(':Address',$_POST['Address'], PDO::PARAM_STR);
					$statement->bindValue(':SSCResult',$_POST['SSCResult'], PDO::PARAM_STR);
					$statement->bindValue(':PassingYear',$_POST['PassingYear'], PDO::PARAM_STR);
					$statement->bindValue(':SSCGroup',$_POST['Group'], PDO::PARAM_STR);
					$statement->bindValue(':Gender',$_POST['Gender'], PDO::PARAM_STR);
					$statement->bindValue(':Religion',$_POST['Religion'], PDO::PARAM_STR);
					$statement->bindValue(':Email',$_POST['Email'], PDO::PARAM_STR);



					if($statement->execute())
					{
						echo "<h1>Record Inserted successfully!</h1>";
						echo "<h1>Your Registration is complete</h1>";
					}
					else
					{
						echo "<h1>Unable to insert</h1>";
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
