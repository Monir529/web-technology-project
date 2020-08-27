<?php
session_start();
$sid=$_SESSION['id'];
$pass = $_SESSION['password'];
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

.hd1{

  
  padding-left: 20px;
  padding-top: 60px;
  text-align: Left;
  font-size: 35px;
}

.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
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
  height: 500px;
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
  height: 500px;
}
</style>
</head>
<body>

<header>
<div class="hd1">
Student Portal
</div>

<div class="hd2"><a href="login.php">Logout</a> </div>
</header>

<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'myself')" >Myself</button>
  <button class="tablinks" onclick="openTab(event, 'checkmarks')">Check Marks</button>
  <button class="tablinks" onclick="openTab(event, 'applytc')">Apply Tc</button>
  <button class="tablinks" onclick="openTab(event, 'changepass')" id="defaultOpen">Change Password</button>
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
  $sql=null;
  if( $id>=200)
  {
  $sql="SELECT * FROM studentsxii WHERE ID=".$id;
  }
  else {
   $sql="SELECT * FROM studentsxi WHERE ID=".$id;

  }
  
  $result=mysqli_query($con,$sql);
  
  if(mysqli_num_rows($result)>0)
  {
    $row=mysqli_fetch_array($result);
    $_SESSION['name']=$row['FirstName']." ".$row['LastName'] ;
    $_SESSION['fathersName']=$row['Father'];
    $_SESSION['mothersName']=$row['Mother'];
    $_SESSION['dob']=$row['DOB'];
    $_SESSION['address']=$row['Address'];
    $_SESSION['sscResult']=$row['SSCResult'];
    $_SESSION['passingYear']=$row['PassingYear'];
    $_SESSION['groups']=$row['SSCGroup'];
    $_SESSION['gender']=$row['Gender'];
    $_SESSION['religious']=$row['Religion'];
    $_SESSION['email']= $row['Email'];
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
  <td><b>Father's Name: </b></td> <td><?php echo  $_SESSION['fathersName'];  ?></td>
</tr>
<tr>
  <td><b>Mother's Name: </b></td> <td><?php echo  $_SESSION['mothersName']  ?></td>
</tr> 
<tr> 
  <td><b>DOB: </b></td> <td><?php echo $_SESSION['dob'] ?> </td>
</tr>
<tr>
  <td><b>Gender:</b> </td> <td><?php echo $_SESSION['gender'] ?> </td>
</tr>

<tr>
  <td><b>Address :</b> </td> <td><?php echo  $_SESSION['address']  ?></td>
</tr>

<tr>
  <td><b>Email :</b></td> <td><?php echo  $_SESSION['email']  ?></td>
</tr>

<tr>
  <td><b>SSC Result:</b> </td> <td><?php echo $_SESSION['sscResult'] ?></td>
</tr>
<tr>
  <td><b>Passing Year:</b> </td> <td><?php echo  $_SESSION['passingYear']  ?></td>
</tr>
<tr>
  <td><b>Group:</b> </td> <td><?php echo $_SESSION['groups']  ?></td>
</tr>
<tr>
  <td><b>Religious: </b></td> <td><?php echo  $_SESSION['religious'] ?></td>
</tr>
 </table>

  



</div>

<div id="checkmarks" class="tabcontent">


<?php
$id=$sid;


if($id>=200)
{
  $con=mysqli_connect("localhost","root","","aic");
  if(!$con)
  {
    die("Connection Error: ".mysqli_connect_error()."<br/>");
  }
  //Retrieve Data

  
  $sql="SELECT * FROM marksxii WHERE id=".$id;
  
  $result=mysqli_query($con,$sql);
  
  if(mysqli_num_rows($result)>0)
  {
    $row=mysqli_fetch_array($result);
    $_SESSION['bangla']=$row['bangla'];
    $_SESSION['english']=$row['english'];
    $_SESSION['math']=$row['math'];
    $_SESSION['chemistry']=$row['chemistry'];
    $_SESSION['biology']=$row['biology'];
    $_SESSION['ict']=$row['ict'];
    
  }
  else
  {
    echo "No data found.<br/>";
  }

  
mysqli_close($con); 
}

else {

 $con=mysqli_connect("localhost","root","","aic");
  if(!$con)
  {
    die("Connection Error: ".mysqli_connect_error()."<br/>");
  }
  //Retrieve Data

  
  $sql="SELECT * FROM marksxi WHERE id=".$id;
  
  $result=mysqli_query($con,$sql);
  
  if(mysqli_num_rows($result)>0)
  {
    $row=mysqli_fetch_array($result);
    $_SESSION['bangla']=$row['bangla'];
    $_SESSION['english']=$row['english'];
    $_SESSION['math']=$row['math'];
    $_SESSION['chemistry']=$row['chemistry'];
    $_SESSION['biology']=$row['biology'];
    $_SESSION['ict']=$row['ict'];
    
  }
  else
  {
    echo "No data found.<br/>";
  }

  
mysqli_close($con); 

}


?>
<h3>Marks</h3> <hr/>
<table>
  <tr>
    <th>Subject</th>
    <th>Obtained Marks</th>
  </tr>

<tr>
  <td>Bangla</td>
  <td> <?php echo $_SESSION['bangla'] ?>  </td>
</tr>

<tr>
  <td>English</td>
  <td> <?php echo $_SESSION['english'] ?>  </td>
</tr>

<tr>
  <td>Math</td>
  <td> <?php echo $_SESSION['math'] ?>  </td>
</tr>
<tr>
  <td>Chemistry</td>
  <td> <?php echo $_SESSION['chemistry'] ?>  </td>
</tr>

<tr>
  <td>Biology</td>
  <td> <?php echo $_SESSION['biology'] ?>  </td>
</tr>
<tr>
  <td>ICT</td>
  <td> <?php echo $_SESSION['ict'] ?>  </td>
</tr>

</table>


</div>

<div id="applytc" class="tabcontent">

  <h3>Apply For Tc </h3> <hr/>
  <form action="dbApplyTc.php" method="post">
   <table>
    <tr>
      <td>
        Name : 
      </td>
      <td>
        <input type="text" name="name" required="">
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
        Class : 
      </td>
      <td>
        <input type="radio" id="xi" name="class" value="xi" required=""> XI
  
         <input type="radio" id="xii" name="class" value="xii" required=""> XII
      </td>
    </tr>

 <tr>
      <td>
        Desired Institute : 
      </td>
      <td>
        <input type="text" name="institute" size="50px;" required="">
      </td>
    </tr>

   </table>
   <br>
   <br>
   <input type="submit" value="Submit" class="btn" style="margin-left: 250px; " >

  </form>


</div>

<div id="changepass" class="tabcontent">
  
   <h3>Change Password</h3> <hr/>
<form action="student3.php" method="post">
<table>
  <tr>
      <td>
        Current Password : 
      </td>
      <td>
        <input type="text" name="cpassword" required="">
      </td>
    </tr>

    <tr>
      <td>
        New Password : 
      </td>
      <td>
        <input type="text" name="npassword" required="">
      </td>
    </tr>
</table>
<br>
<input type="submit" name="cp" value="Change Password" class="btn" >
</form>

<?php 
if ( $pass == $_POST['cpassword'] )
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aic";

try {
    
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
  // set the PDO error mode to exception

  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

  
  
  $sql="Update login set password =".$_POST['npassword']." WHERE id=".$sid;
    
  // use exec() because no results are returned
    
  $conn->exec($sql);
  
    echo"<hr/>";
    echo "<p style='color:green;' >Password Changed Successfully </p>";
    echo"<hr/>";

  }

  catch(PDOException $e)
    {
    echo "Something is wrong" . "<br>" . $e->getMessage();
    }


}
  else
  {
    echo"<hr/>";
    echo "<p style='color:red;' >Wrong Current Password</p>";
    echo"<hr/>";
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
