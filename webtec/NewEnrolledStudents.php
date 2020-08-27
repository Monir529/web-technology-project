<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">


  	* {box-sizing: border-box}

  			body {

  					margin: 5px;


  			}

  			.Admin {
  				color:  #fff;

  				height: 200px;
  				background-color: #787A9E;
  				margin-top:600px;

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

    .h6{
      font-size: 20px;
      text-align: center;
    }

  	</style>
    <title></title>
  </head>
  <body>

    	<header class="header" >
    <h1 class="hd1" style="font-size: 45px; margin-bottom:10px;"> <strong>American International College-Bangladesh</strong> </h1>
    	<h7 class="hd1">Students Enrolled</h7>
    	<div style="float: right; padding-top: 38px; padding-right: 10px; " >
    		<input type="button" name="button" value="Logout" class="btn" onclick="window.location.href = 'login.php';" >
    	</div>
    </header>
    <p>
      <div class="h6">
        <?php
        $Count=1;
        $query = "SELECT * FROM registration where SSCResult>4.8;";
        $dns="mysql:host=localhost; dbname=AIC";
        $username="root";
        $password="";

        try{
          $db=new PDO($dns,$username,$password);
          $statement = $db->prepare($query);
          $statement->execute();

          while($registration = $statement->fetch()){

            echo "<hr />";
            echo"Enrolled Student"." ".$Count;
            echo "<br />";
            $Count;
            $FirstName = $registration['FirstName'];
            echo "First name: ".$FirstName;
            echo "<br />";
            $LastName = $registration['LastName'];
            echo "Last name: ".$LastName;
            echo "<br />";
            $Father = $registration['Father'];
            echo "Father's name: ".$Father;
            echo "<br />";

            $Mother = $registration['Mother'];
            echo "Mother's name: ".$Mother;
            echo "<br />";

            $DOB = $registration['DOB'];
            echo "Date Of Birth: ".$DOB;
            echo "<br />";

            $Gender = $registration['Gender'];
            echo "Gender:".$Gender;
            echo "<br />";

            $Address = $registration['Address'];
            echo "Address: ".$Address;
            echo "<br />";
            $SSCResult = $registration['SSCResult'];
            echo "SSC Result: ".$SSCResult;
            echo "<br />";
            $PassingYear = $registration['PassingYear'];
            echo "Passing Year: ".$PassingYear;
            echo "<br />";
            $SSCGroup = $registration['SSCGroup'];
            echo "SSC Group: ".$SSCGroup;
            echo "<br />";
            $Religion = $registration['Religion'];
            echo "Religion: ".$Religion;
            echo "<br />";
            $Email= $registration['Email'];
            echo "Email: ".$Email;
            echo "<br />";

            echo "<hr  />";



            //Insert into data table of studentsxii

            try{
            $q="INSERT INTO `studentsxi`(`ID`,`firstName`, `LastName`, `Father`, `Mother`, `DOB`, `Address`, `SSCResult`, `PassingYear`, `SSCGroup`, `Gender`, `Religion`, `Email`) VALUES (:iD,:firstName,:lastName,:father,:mother,:dOB,:address,:sSCResult,:passingYear,:sSCGroup,:gender,:religion,:email)";
            $dns="mysql:host=localhost; dbname=AIC";
          	$username="root";
          	$password="";



            $statement2 = $db->prepare($q);
            $db=new PDO($dns,$username,$password);

            $statement2->bindValue(':iD',"", PDO::PARAM_INT);
            $statement2->bindValue(':firstName',$FirstName, PDO::PARAM_STR);
            $statement2->bindValue(':lastName',$LastName, PDO::PARAM_STR);
            $statement2->bindValue(':father',$Father, PDO::PARAM_STR);
            $statement2->bindValue(':mother',$Mother, PDO::PARAM_STR);
            $statement2->bindValue(':dOB',$DOB, PDO::PARAM_STR);
            $statement2->bindValue(':address',$Address, PDO::PARAM_STR);
            $statement2->bindValue(':sSCResult',$SSCResult, PDO::PARAM_STR);
            $statement2->bindValue(':passingYear',$PassingYear, PDO::PARAM_STR);
            $statement2->bindValue(':sSCGroup',$SSCGroup, PDO::PARAM_STR);
            $statement2->bindValue(':gender',$Gender, PDO::PARAM_STR);
            $statement2->bindValue(':religion',$Religion, PDO::PARAM_STR);
            $statement2->bindValue(':email',$Email, PDO::PARAM_STR);



            if($statement2->execute())
            {
              echo "Record Inserted successfully!";
            }
            else
            {
              echo "Unable to insert";
            }
              $Count++;

              $statement2->closeCursor();

          }   catch(Exception $e){
              $error_message = $e->getMessage();
              echo "<p> Error Message: $error_message</p>";
            }



      }

           $statement->closeCursor();
          }

        catch(Exception $e){
          $error_message = $e->getMessage();
          echo "<p> Error Message: $error_message</p>";
        }


        $query3 = "DELETE FROM registration ;";
        $dns="mysql:host=localhost; dbname=AIC";
        $username="root";
        $password="";

        try {
          $db=new PDO($dns,$username,$password);

          $statement3 = $db->prepare($query3);

          if($statement3->execute())
          {
            echo " <h2 style='text-align:center;''>
            Registration is done!
            </h2> ";
          }
          else {
            echo"Registration list is not cleared yet!";
          }

        } catch (\Exception $e) {
          $error_message = $e->getMessage();
          echo "<p> Error Message: $error_message</p>";
        }



         ?>

      </div>
    </p>


    <div class="Admin">
      <p>Posted by: Hege Refsnes</p>
      <p>Contact information: <a href="mailto:someone@example.com">
      someone@example.com</a>.</p>
    </div>
  </body>
</html>
