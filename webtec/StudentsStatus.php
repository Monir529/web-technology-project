<!DOCTYPE html>
<html>

<head>
	<title>Student Status</title>
	<style media="screen">
	* {box-sizing: border-box}

			body {

					margin: 5px;


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

	.Admin {
		color:  #fff;
		height: 120px;
		background-color: #787A9E;
		margin: 0px;

		padding-top: 100px;
		padding-left: 150px;
		padding-top: 20px;



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
	</style>
</head>

<body class="">
	<header class="header" >
<h1 class="hd1" style="font-size: 45px; margin-bottom:10px;"> <strong>American International College-Bangladesh</strong> </h1>
	<h7 class="hd1"> Admin Panel</h7>
	<div style="float: right; padding-top: 38px; padding-right: 10px; " >
		<input type="button" name="button" value="Logout" class="btn" onclick="window.location.href = 'login.php';" >
	</div>
</header>
    <div class="label">
<form action="" method="post">

	<fieldset style="background-color:#e9e2d0; font-size:25px;">
		<legend> <strong>Find Student</strong></legend>

		<p>
			<bold>ID :</bold> <input type="text" name="ID" >
			<br>
			<br>
			<fieldset class="fieldset">
				<legend> CLASS </legend>
				<p>
					<input type="radio" name="CLASS" value="CLASSXI">
				<label for="CLASSXI">CLASSXI</label>

				<input type="radio" name="CLASS" value="CLASSXII">
			<label for="CLASSXII">CLASSXII</label>
				<br>
				<br>
			<input type="submit" name="FIND" value="FIND">

				</p>
			</fieldset>

		</p>


	</fieldset>
<br>
<br>

<fieldset  class="fieldset" id="p"  style="background-color:#e9e2d0; font-size:25px;">
	<legend> <strong>All Students Information</strong></legend>
	<input type="submit" name="classxi" value="Show all students Information of class xi">
	<br />
	<br>
	<input type="submit" name="classxii" value="show all students information of class xii">

</fieldset>
<br>
<br>

</form>
    </div>

		<div class="info">

			<?php


			if(isset($_POST['ID']) && isset($_POST['CLASS']))
			{

			$CID= $_POST['ID'];
			$class=$_POST['CLASS'];
			if($class=="CLASSXI")

			{


		$query = "SELECT * FROM studentsxi where ID=$CID;";
		$dns="mysql:host=localhost; dbname=AIC";
		$username="root";
		$password="";

		try{
			$db=new PDO($dns,$username,$password);
			$statement = $db->prepare($query);
			$statement->execute();
			//$row=$statement->fetchColumn();

			if($statement->rowCount()<1)
			{
				echo "No info found!";

			}
		 else {


				while($studentsxi = $statement->fetch()){




					echo "<hr />";
					$ID = $studentsxi['ID'];
					echo "ID : ".$ID;
					echo "<br />";

					$FirstName = $studentsxi['FirstName'];
          echo "First name: ".$FirstName;
          echo "<br />";
          $LastName = $studentsxi['LastName'];
          echo "Last name: ".$LastName;
          echo "<br />";
          $Father = $studentsxi['Father'];
          echo "Last name: ".$Father;
          echo "<br />";

          $Mother = $studentsxi['Mother'];
          echo "Last name: ".$Mother;
          echo "<br />";

          $DOB = $studentsxi['DOB'];
          echo "Last name: ".$DOB;
          echo "<br />";

          $Gender = $studentsxi['Gender'];
          echo "Gender:".$Gender;
          echo "<br />";

          $Address = $studentsxi['Address'];
          echo "Last name: ".$Address;
          echo "<br />";
          $SSCResult = $studentsxi['SSCResult'];
          echo "SSC Result: ".$SSCResult;
          echo "<br />";
          $PassingYear = $studentsxi['PassingYear'];
          echo "Last name: ".$PassingYear;
          echo "<br />";
          $SSCGroup = $studentsxi['SSCGroup'];
          echo "SSC Group: ".$SSCGroup;
          echo "<br />";
          $Religion = $studentsxi['Religion'];
          echo "SSC Group: ".$Religion;
          echo "<br />";
          $Email= $studentsxi['Email'];
          echo "Email: ".$Email;
          echo "<br />";



				}
			}


				$statement->closeCursor();

			}

		 catch(Exception $e){
				$error_message = $e->getMessage();
				echo "<p> Error Message: $error_message</p>";
			}

		}


		if($class=="CLASSXII")

		{


	$query = "SELECT * FROM studentsxii where ID=$CID;";
	$dns="mysql:host=localhost; dbname=AIC";
	$username="root";
	$password="";

	try{
		$db=new PDO($dns,$username,$password);
		$statement = $db->prepare($query);
		$statement->execute();
		//$row=$statement->fetchColumn();

		if($statement->rowCount()<1)
		{
			echo "<p style='margin-bottom:10px; font-size:20px; padding:10px; ''>
			No info found!
			</p>";

		}
	 else {


			while($studentsxii = $statement->fetch()){


				echo "<hr />";
				$ID = $studentsxii['ID'];
				echo "ID : ".$ID;
				echo "<br />";

				$FirstName = $studentsxii['FirstName'];
				echo "First name : ".$FirstName;
				echo "<br />";
				$LastName = $studentsxii['LastName'];
				echo "Last name : ".$LastName;
				echo "<br />";
				$Father = $studentsxii['Father'];
				echo "Father name : ".$Father;
				echo "<br />";

				$Mother = $studentsxii['Mother'];
				echo "Mother name : ".$Mother;
				echo "<br />";

				$DOB = $studentsxii['DOB'];
				echo "Date of Birth : ".$DOB;
				echo "<br />";

				$Gender = $studentsxii['Gender'];
				echo "Gender:".$Gender;
				echo "<br />";

				$Address = $studentsxii['Address'];
				echo "Address : ".$Address;
				echo "<br />";
				$SSCResult = $studentsxii['SSCResult'];
				echo "SSC Result : ".$SSCResult;
				echo "<br />";
				$PassingYear = $studentsxii['PassingYear'];
				echo "Passing Year : ".$PassingYear;
				echo "<br />";
				$SSCGroup = $studentsxii['SSCGroup'];
				echo "SSC Group : ".$SSCGroup;
				echo "<br />";
				$Religion = $studentsxii['Religion'];
				echo "Religion : ".$Religion;
				echo "<br />";
				$Email= $studentsxii['Email'];
				echo "Email: ".$Email;
				echo "<br />";



			}
		}


			$statement->closeCursor();

		}

	 catch(Exception $e){
			$error_message = $e->getMessage();
			echo "<p> Error Message: $error_message</p>";
		}

	}


}



		//Showing All studentsxi info using table

if(isset($_POST['classxi'])){





	$query = "SELECT * FROM studentsxi ;";
	$dns="mysql:host=localhost; dbname=AIC";
	$username="root";
	$password="";

	try{
		$db=new PDO($dns,$username,$password);
		$statement = $db->prepare($query);
		$statement->execute();
		//$row=$statement->fetchColumn();

		if($statement->rowCount()<1)
		{
			echo "No info found!";

		}
	 else {

		 echo "<table border=2>";
		 echo "<tr>
		 <th> ID	</th>
		 <th> First name	</th>
		 <th> Last name	</th>
		 <th> Father name	</th>
		 <th> Mother name	</th>
		 <th> Date of Birth	</th>
		 <th> Gender	</th>
		 <th> Address	</th>
		 <th> SSC Result	</th>
		 <th> Passing Year	</th>
		 <th> SSC Group	</th>
		 <th> Religion	</th>
		 <th> Email	</th>
		 </tr>";


			while($studentsxi = $statement->fetch()){


					echo "<tr>";
					echo "<td>$studentsxi[ID]</td>";
					echo "<td>$studentsxi[FirstName]</td>";
					echo "<td>$studentsxi[LastName]</td>";
					echo "<td>$studentsxi[Father]</td>";
					echo "<td>$studentsxi[Mother]</td>";
					echo "<td>$studentsxi[DOB]</td>";
					echo "<td>$studentsxi[Gender]</td>";
					echo "<td>$studentsxi[Address]</td>";
					echo "<td>$studentsxi[SSCResult]</td>";
					echo "<td>$studentsxi[PassingYear]</td>";
					echo "<td>$studentsxi[SSCGroup]</td>";
					echo "<td>$studentsxi[Religion]</td>";
					echo "<td>$studentsxi[Email]</td>";
					echo "</tr>";


			}
				echo "</table>";
		}


			$statement->closeCursor();

		}

	 catch(Exception $e){
			$error_message = $e->getMessage();
			echo "<p> Error Message: $error_message</p>";
		}



}




if(isset($_POST['classxii'])){





	$query = "SELECT * FROM studentsxii ;";
	$dns="mysql:host=localhost; dbname=AIC";
	$username="root";
	$password="";

	try{
		$db=new PDO($dns,$username,$password);
		$statement = $db->prepare($query);
		$statement->execute();
		//$row=$statement->fetchColumn();

		if($statement->rowCount()<1)
		{
			echo "No info found!";

		}
	 else {

		 echo "<table border=1>";
		 echo "<tr>
		 <th> ID	</th>
		 <th> First name	</th>
		 <th> Last name	</th>
		 <th> Father name	</th>
		 <th> Mother name	</th>
		 <th> Date of Birth	</th>
		 <th> Gender	</th>
		 <th> Address	</th>
		 <th> SSC Result	</th>
		 <th> Passing Year	</th>
		 <th> SSC Group	</th>
		 <th> Religion	</th>
		 <th> Email	</th>
		 </tr>";


			while($studentsxi = $statement->fetch()){


					echo "<tr>";
					echo "<td>$studentsxi[ID]</td>";
					echo "<td>$studentsxi[FirstName]</td>";
					echo "<td>$studentsxi[LastName]</td>";
					echo "<td>$studentsxi[Father]</td>";
					echo "<td>$studentsxi[Mother]</td>";
					echo "<td>$studentsxi[DOB]</td>";
					echo "<td>$studentsxi[Gender]</td>";
					echo "<td>$studentsxi[Address]</td>";
					echo "<td>$studentsxi[SSCResult]</td>";
					echo "<td>$studentsxi[PassingYear]</td>";
					echo "<td>$studentsxi[SSCGroup]</td>";
					echo "<td>$studentsxi[Religion]</td>";
					echo "<td>$studentsxi[Email]</td>";
					echo "</tr>";


			}
				echo "</table>";
		}


			$statement->closeCursor();

		}

	 catch(Exception $e){
			$error_message = $e->getMessage();
			echo "<p> Error Message: $error_message</p>";
		}



}


			 ?>
		</p>

		</div>




    </form>
	</p>

	<div class="Admin">
	  <p>Posted by: Hege Refsnes</p>
	  <p>Contact information: <a href="mailto:someone@example.com">
	  someone@example.com</a>.</p>
	</div>


</body>

</html>
