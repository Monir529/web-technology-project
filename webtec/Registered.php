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
          margin-top: 800px;

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
        height: 140px;
        width: 120px;
        text-align: center;
        padding-top: 10px;
        margin-top: 0px;
        margin-left: 10px;
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
      float: left;
      background-color: #1eb2a6;
      height: auto;
      width: 400px;
      text-align: center;
      padding-top: 80px;
      margin-left: 100px;
      border: 2px black solid;
      font-size: 20px;
    }

    </style>
    <title></title>
  </head>
  <body>

    	<header class="header" >
    <h1 class="hd1" style="font-size: 45px; margin-bottom:10px;"> <strong>American International College-Bangladesh</strong> </h1>
    	<h7 class="hd1"> List Of Student Application</h7>
    	<div style="float: right; padding-top: 38px; padding-right: 10px; " >
    		<input type="button" name="button" value="Logout" class="btn" onclick="window.location.href = 'login.php';" >
    	</div>
    </header>
    <br>
    <div class="div4">

      <h2 style="border:20px;">Students Who Applied</h2>
      <p>
        <?php
        $Count=1;
        $query = "SELECT * FROM registration;";
        $dns="mysql:host=localhost; dbname=AIC";
        $username="root";
        $password="";

        try{
          $db=new PDO($dns,$username,$password);
          $statement = $db->prepare($query);
          $statement->execute();

          while($registration = $statement->fetch()){
            echo "<hr />";
            echo"Registered Student"." ".$Count;
            echo "<br />";
            $Count++;
            $FirstName = $registration['FirstName'];
            echo "First name: ".$FirstName;
            echo "<br />";
            $LastName = $registration['LastName'];
            echo "Last name: ".$LastName;
            echo "<br />";
            $Gender = $registration['Gender'];
            echo "Gender".$Gender;
            echo "<br />";
            $SSCResult = $registration['SSCResult'];
            echo "SSC Result: ".$SSCResult;
            echo "<br />";
            $SSCGroup = $registration['SSCGroup'];
            echo "SSC Group: ".$SSCGroup;
            echo "<br />";
            $Email= $registration['Email'];
            echo "Email: ".$Email;
            echo "<br />";

            echo "<hr  />";

          }

          $statement->closeCursor();

        }  catch(Exception $e){
          $error_message = $e->getMessage();
          echo "<p> Error Message: $error_message</p>";
        }
         ?>
      </p>



    </div>

    <br>

  <div class="div1">
    <p>

      <button type="button" style="vertical-align:middle; font-size:22px;" onclick="window.location.href = 'NewEnrolledStudents.php';" >Select</button>
      <br>
      <hr>


      <button type="button" style="vertical-align:middle; font-size:20px;" onclick="window.location.href = 'AdminPortal.html';" >Cancel</button>
    </p>
  </div>

  <div style="float: right ;" >
  	<img src="aic_logo.png" alt="Smiley face" width="500" height="530" style="margin-right: 120px;" >

  </div>

  <div class="Admin">
    <p>Posted by: Hege Refsnes</p>
    <p>Contact information: <a href="mailto:someone@example.com">
    someone@example.com</a>.</p>
  </div>
  </body>
</html>
