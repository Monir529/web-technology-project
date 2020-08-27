<?php
session_start();
$sid=$_SESSION['id'];
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */

header {

  height: 150px;
  width:  150px:;
  background-color: skyblue;

  
}
table, th, td {
  border: 1px solid black;
  width: 600px;
}
th, td {
  padding: 7px;
}

.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}


.hd1{

  
  padding-left: 20px;
  padding-top: 60px;
  text-align: Left;
  font-size: 35px;
}

.hd2 {

 
  padding-right: 20px;
  padding-top: 22px;
  text-align: right;
  font-size: 22px;
}

.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 1000px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 1000px;
}
</style>
</head>
<body>

<header>
<div class="hd1">
Teacher Portal
</div>

<div class="hd2"><a href="login.php">Logout</a> </div>
</header>

<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'myself')" id="defaultOpen">Myself</button>
  <button class="tablinks" onclick="openTab(event, 'uploadmarks')">Upload Marks</button>
  <button class="tablinks" onclick="openTab(event, 'attendance')">Take Attendance</button>
</div>


<div id="myself" class="tabcontent">


<?php


$con=mysqli_connect("localhost","root","","aic");
  if(!$con)
  {
    die("Connection Error: ".mysqli_connect_error()."<br/>");
  }
  //Retrieve Data

  $id=$sid;
 
  $sql="SELECT * FROM teacher WHERE id=".$id;
  
  $result=mysqli_query($con,$sql);
  
  if(mysqli_num_rows($result)>0)
  {
    $row=mysqli_fetch_array($result);

    $_SESSION['name']=$row['name'];
    $_SESSION['department']=$row['department'];
    $_SESSION['gender']=$row['gender'];
    $_SESSION['phone']=$row['phone'];
    $_SESSION['email']=$row['email'];
   
    $_SESSION['graduation']=$row['graduation'];
    $_SESSION['institute']=$row['institute'];
    $_SESSION['address']=$row['address'];
   
  }
  else
  {
    echo "No data found.<br/>";
  }

?> 

  <h3>Information</h3> <hr/>
 <table>
<tr>
  <td><b>Name :</b></td> <td><?php echo $_SESSION['name']; ?></td>
</tr>
<tr>
  <td><b>Department :</b></td> <td><?php echo  $_SESSION['department'];  ?></td>
</tr>
<tr>
  <td><b>Graduation :</b></td> <td><?php echo  $_SESSION['graduation']  ?></td>
</tr> 
<tr> 
  <td><b>Institute: </b></td> <td><?php echo $_SESSION['institute'] ?> </td>
</tr> 
<tr>
  <td><b>Gender:</b> </td> <td><?php echo $_SESSION['gender'] ?> </td>
</tr>
<tr>
  <td><b>Address :</b> </td> <td><?php echo  $_SESSION['address']  ?></td>
</tr>
<tr>
  <td><b>Email :</b> </td> <td><?php echo $_SESSION['email'] ?></td>
</tr>
<tr>
  <td><b>Phone No :</b> </td> <td><?php echo  $_SESSION['phone']  ?></td>
</tr>

 </table>


</div>

<div id="uploadmarks" class="tabcontent">
 
 <h3>Upload Marks</h3> <hr/>

 <?php


$con=mysqli_connect("localhost","root","","aic");
  if(!$con)
  {
    die("Connection Error: ".mysqli_connect_error()."<br/>");
  }
  //Retrieve Data

  $id=$sid;
 
  $sql="SELECT * FROM teacher WHERE id=".$id;
  
  $result=mysqli_query($con,$sql);
  
  if(mysqli_num_rows($result)>0)
  {
    $row=mysqli_fetch_array($result);

   
    $_SESSION['department']=$row['department'];
   
  }
  else
  {
    echo "No data found.<br/>";
  }

?> 

 <form action="teacher2.php" method="POST">
 
 <table>
    <tr>
      <td>
        Class : 
      </td>
      <td>
        <input type="radio" id="xi" name="class" value="xi" required=""> XI
  
         <input type="radio" id="xii" name="class" value="xii" required=""> XII
      </td>
    </tr>

      <tr>
      <td>
        ID : 
      </td>
      <td>
        <input type="text" name="id" required="">
      </td>
    </tr>

  <tr>
      <td>
        Marks in <?php echo  $_SESSION['department']; ?> : 
      </td>
      <td>
        <input type="text" name="marks" required="">
      </td>
    </tr>
 </table>
<br>
 <input type="submit" class="btn"  name="upload" value="Upload">
 <input type="reset" class="btn" name="Cancel" value="Cancel" > 

<br>
<br>
<h3>Marks</h3> <hr/>



 </form>

 <?php



?> 



 <?php
 if(isset($_POST['upload']))
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
  
  
  $sql="Update marks".$_POST['class']." set ".strtolower($_SESSION['department'])."=".$_POST['marks']." WHERE id=".$uid;
    
  // use exec() because no results are returned

    $conn->exec($sql);

  if ( $conn->exec($sql) == TRUE )
{ 
    echo "Marks Uploaded successfully";
}
 else 
{
   echo "Error Occured Check Class and ID ";

}



$con=mysqli_connect("localhost","root","","aic");
  if(!$con)
  {
    die("Connection Error: ".mysqli_connect_error()."<br/>");
  }
  //Retrieve Data

  
 
  $sql="SELECT * FROM marks".$_POST['class']; 
  
  $result=mysqli_query($con,$sql);
  echo"<table>";
  echo "<tr>";
  echo "<th> ID </th> ";
  echo "<th> Bangla </th> ";
  echo "<th> English </th> ";
  echo "<th> Math </th> ";
  echo "<th> Biology </th> ";
  echo "<th> Chemistry </th> ";
  echo "</tr>";
  while( $row=mysqli_fetch_array($result) )
  {
     echo "<tr>";
  echo "<td>".$row['id']."</td> <td>".$row['bangla']."</td> <td>".$row['english']."</td> <td>".$row['math']."</td> <td>".$row['biology']."</td> <td>".$row['ict']."</td> <td>".$row['chemistry']."</td> ";
     echo "</tr>";

  }
echo"</table>";


    }
catch(PDOException $e)
    {
    echo "Error" . "<br>" . $e->getMessage();
    }



$conn = null;
$con = null;
}

?>

 


</div>

<div id="attendance" class="tabcontent">

 <h4>Assign Date First</h4> <hr/>

 <form action="teacher3.php" method="post">
  <table>
    <tr>
  <td>Date : </td>
  <td><input type="date" name="date" required=""> </td>
  </tr>

  <tr>
  <td>Class: </td>
  <td>
  <input type="radio" id="xi" name="class" value="xi" required=""> XI
  
  <input type="radio" id="xii" name="class" value="xii" required=""> XII
</td>
  </tr>
</table>
   <br>
  <input type="submit" name="submit2" value="Assign Date & Class" class="btn" >
</form>
<h4>Take Attendance Here</h4> <hr/>

<form action="teacher3.php" method="post">
  <table>
    <tr>
  <td>ID : </td>
  <td><input type="text" name="id2" required=""> </td>
  
  <td>
  <input type="radio" name="atn" value="1" required=""> Present
  
  <input type="radio" name="atn" value="0" required=""> Absent
</td>
</tr>


</table>
<br>
<input type="submit" name="submit3" value="Give Attendance" class="btn" >

</form>

<?php

 if(isset($_POST['submit2']))
{


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aic";

try {
    
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
  // set the PDO error mode to exception

  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  $sql = "INSERT INTO attendance".$_POST['class']." (date) VALUES ('".$_POST['date']."')";
   
   $_SESSION['date']= $_POST['date'];
   $_SESSION['class']= $_POST['class']; 

  // use exec() because no results are returned
    
  $conn->exec($sql);


    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo "Error Occured, Check Your Given Data" . "<br>" . $e->getMessage();
    }

$conn = null;

try{

if ($_SESSION['class'] == "xi") {
$con=mysqli_connect("localhost","root","","aic");
  if(!$con)
  {
    die("Connection Error: ".mysqli_connect_error()."<br/>");
  }
  //Retrieve Data

  
 
  $sql="SELECT * FROM attendance".$_POST['class']; 
  
  $result=mysqli_query($con,$sql);
  echo"<table>";
  echo "<tr>";
  echo "<th> Date </th> ";
  echo "<th> 100 </th> ";
  echo "<th> 101 </th> ";
  echo "<th> 102 </th> ";
  echo "<th> 103 </th> ";
  echo "<th> 104 </th> ";
  echo "<th> 105 </th> ";
  echo "<th> 106 </th> ";
  echo "<th> 107 </th> ";
  echo "<th> 108 </th> ";
  echo "<th> 109 </th> ";
  echo "<th> 110 </th> ";
  echo "</tr>";
  while( $row=mysqli_fetch_array($result) )
  {
     echo "<tr>";
  echo "<td>".$row['date']."</td> <td>".$row['id100']."</td> <td>".$row['id101']."</td> <td>".$row['id102']."</td> <td>".$row['id103']."</td> <td>".$row['id104']."</td> <td>".$row['id105']."</td> <td>".$row['id106']."</td> <td>".$row['id107']."</td> <td>".$row['id108']."</td> <td>" .$row['id109']."</td> <td>".$row['id110']."</td>";
     echo "</tr>";

  }
echo"</table>";


}
else {
echo "HI";

}

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }



$con = null;

}

if(isset($_POST['submit3']))
{

 
  

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aic";

try {
    
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
  // set the PDO error mode to exception

  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  $sql = "Update attendance".$_SESSION['class']." set id".$_POST['id2']." =".intval($_POST['atn'])." where date= '".$_SESSION['date']."'";
  
  
    
  // use exec() because no results are returned
    
  $conn->exec($sql);


    echo "Attendance Given";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


try{

$con=mysqli_connect("localhost","root","","aic");
  if(!$con)
  {
    die("Connection Error: ".mysqli_connect_error()."<br/>");
  }
  //Retrieve Data

  
 
  $sql="SELECT * FROM attendance".$_SESSION['class']; 
  
  $result=mysqli_query($con,$sql);
  echo"<table>";
  echo "<tr>";
  echo "<th> Date </th> ";
  echo "<th> 100 </th> ";
  echo "<th> 101 </th> ";
  echo "<th> 102 </th> ";
  echo "<th> 103 </th> ";
  echo "<th> 104 </th> ";
  echo "<th> 105 </th> ";
  echo "<th> 106 </th> ";
  echo "<th> 107 </th> ";
  echo "<th> 108 </th> ";
  echo "<th> 109 </th> ";
  echo "<th> 110 </th> ";
  echo "</tr>";
  while( $row=mysqli_fetch_array($result) )
  {
     echo "<tr>";
  echo "<td>".$row['date']."</td> <td>".$row['id100']."</td> <td>".$row['id101']."</td> <td>".$row['id102']."</td> <td>".$row['id103']."</td> <td>".$row['id104']."</td> <td>".$row['id105']."</td> <td>".$row['id106']."</td> <td>".$row['id107']."</td> <td>".$row['id108']."</td> <td>" .$row['id109']."</td> <td>".$row['id110']."</td>";
     echo "</tr>";

  }
echo"</table>";


    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }



$con = null;





}


?>



</div>

<script>
function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it

document.getElementById("defaultOpen").click();

</script>
   
</body>
</html> 
