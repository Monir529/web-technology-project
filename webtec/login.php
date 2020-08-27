<?php
session_start();


?>



<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>

header {

  height: 150px;
  width:  150px:;
  background-color: skyblue;

}

.hd1{


  padding-left: 20px;
  padding-top: 60px;
  text-align: Left;
  font-size: 35px;
}

.input-group {
  margin: 10px 0px 10px 0px;

}
.input-group label {
  font-size: 25px;
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 30%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}



.img{

  float: right;
  display: inline-block;
  margin-right: 50px;
  margin-top: 10px;
margin-left: 45px;
padding-bottom: 20px;




}
</style>


</head>
<body>

<header>

<div class="hd1">
American International College
</div>

</header>
<img src="aic_logo.png" alt="logo" height="400px" width="350px" class="img">
<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

<fieldset style="margin: 50px; padding: 60px; padding-right: 0px;" >


<div class="input-group" >

<label>Username:</label>
<input type="text" name="username" required="" >


<label>Password:</label>
<input type="text" name="password" required="">
<br>


</div>

<input type="submit" class="btn"  name="login" value="Login">
<input type="reset" class="btn" name="Cancel" value="Cancel" >
<input type="button" name="button" value="Apply For Admission" class="btn" onclick="window.location.href = 'Registration.php';" >








  </fieldset>

</form>








</body>
</html>

<?php
if(isset($_POST['login']))
{
  $con=mysqli_connect("localhost","root","","aic");
  if(!$con)
  {
    die("Connection Error: ".mysqli_connect_error()."<br/>");
  }
  //Retrieve Data

  $password=$_POST['password'];
  $username=$_POST['username'];
  $sql="SELECT * FROM login WHERE id=".$username." AND password='".$password."'";

  $result=mysqli_query($con,$sql);

  if(mysqli_num_rows($result)>0)
  {
    $row=mysqli_fetch_array($result);
    $_SESSION['id']=$row['id'];
    $_SESSION['password']=$row['password'];
    $_SESSION['status']=$row['status'];

    if( $_SESSION['status']== "student" )
       {
        header("Location:student2.php");
      }

      if( $_SESSION['status']== "teacher" )
       {
        header("Location:teacher.php");
      }

      if( $_SESSION['status']== "principal" )
       {
        header("Location:Principal.php");
      }

      if( $_SESSION['status']== "admin" )
       {
        header("Location:AdminPortal.html");
      }
  }
  else
  {
    echo "No data found.<br/>";
  }


mysqli_close($con);
}

?>
