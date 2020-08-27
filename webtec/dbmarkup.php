<?php
session_start();
$sub= strtolower($_SESSION['department']);
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aic";

try {
    
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
  // set the PDO error mode to exception

  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   $uid=$_POST['id'];
  
  
  $sql="Update marks".$_POST['class']." set ".$sub."=".$_POST['marks']." WHERE id=".$uid;
    
  // use exec() because no results are returned
    
  $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>




 