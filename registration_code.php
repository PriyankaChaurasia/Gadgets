<?php
require_once('connection.php');
$fname = $_POST['first'];
$lname = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$user_pwd = MD5($pwd);

$sql ="INSERT INTO user(first_name,last_name,email,uid,pwd)
        VALUES('$fname','$lname','$email','$uid','$pwd')";
$result = mysqli_query($conn,$sql);

  if($result)
  {
    header("Location: login.php");
  }
  else
  {
     echo "error :".$sql;
  }

?>
