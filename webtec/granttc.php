
<!DOCTYPE html>
<html>

<head>
	<title>ADMIN PORTAL</title>
	<style>
* {box-sizing: border-box}

		body {

        margin: 5px;


		}

    table, th, td {
  border: 1px solid black;
  width: 600px;
}
th, td {
  padding: 7px;
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

	</style>
</head>

<body>
    <header class="header" >
	<h1 class="hd1" style="font-size: 45px; margin-bottom:10px; color:white;"> <strong>American International College-Bangladesh</strong> </h1>
    <h7 class="hd1" style="color:white;"> Admin Panel</h7>
    <div style="float: right; padding-top: 38px; padding-right: 10px; " >
    	<input type="button" name="button" value="Logout" class="btn" onclick="window.location.href = 'login.php';" >
    </div>
</header>
<hr/>
<h3> Tc Applicancts </h3>
<hr/>

<?php 
try {
$con=mysqli_connect("localhost","root","","aic");
  if(!$con)
  {
    die("Connection Error: ".mysqli_connect_error()."<br/>");
  }
  //Retrieve Data

  
 
  $sql="SELECT * FROM tcapplicants"; 
  
  $result=mysqli_query($con,$sql);
  echo"<table>";
  echo "<tr>";
  echo "<th> ID </th> ";
  echo "<th> Name </th> ";
  echo "<th> Class </th> ";
  echo "<th> Institute </th> ";
  echo "</tr>";
  while( $row=mysqli_fetch_array($result) )
  {
     echo "<tr>";
  echo "<td>".$row['id']."</td> <td>".$row['name']."</td> <td>".$row['class']."</td> <td>".$row['institute']."</td>";
     echo "</tr>";

  }
echo"</table>";


}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }




?>
<br>
<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

<label>ID:</label> 
<input type="text" name="id" required="" >
<br>
<br>
  <input type="submit" class="btn"  name="Grant" value="Grant">
  <input type="submit" class="btn" name="Deny" value="Deny" > 

</form>

<br>
<br>

<?php 

if(isset($_POST['Grant']))
{ 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aic";


try {
    
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
  // set the PDO error mode to exception

  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   $uid=$_POST['id'];
  
  
  $sql="Delete from tcapplicants WHERE id=".$uid;

  $sql2=null;

  if($uid>=200){
   $sql2="Delete from studentsxii WHERE id=".$uid;
  }
  else {

   $sql2="Delete from studentsxi WHERE id=".$uid;
  }

    
  // use exec() because no results are returned
    
  $conn->exec($sql);
  $conn->exec($sql2);

    echo "<hr/>";
    echo " <p style='color:green;' > Tc Granted.</p>";
    echo "<hr/>";

  }

  catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }




}



if(isset($_POST['Deny']))
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aic";


try {
    
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
  // set the PDO error mode to exception

  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   $uid=$_POST['id'];
  
  
  $sql="Delete from tcapplicants WHERE id=".$uid;

    
  // use exec() because no results are returned
    
  $conn->exec($sql);
  

    echo "<hr/>";
    echo " <p style='color:red;' > Tc Application Denied.</p>";
    echo "<hr/>";

  }

  catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }



}

  

?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="Admin">
  <p>Posted by: Hege Refsnes</p>
  <p>Contact information: <a href="mailto:someone@example.com">
  someone@example.com</a>.</p>
</div>



</body>

</html>

