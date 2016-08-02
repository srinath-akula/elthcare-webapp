<?php
session_start();
include_once 'localhost.php';
if(isset($_SESSION['name'])!="")
{
 header("Location: index.php");
}

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['btn-login']))
{
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $upass = mysqli_real_escape_string($conn, $_POST['password']);
 $sql="SELECT * FROM register WHERE email='$email'";
 $res=mysqli_query($conn, $sql);
 $row=mysqli_fetch_array($conn, $res);
 if($row['password']==md5($upass))
 {
  $_SESSION['name'] = $row['name'];
  header("Location: index.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
		 header("Location: comingsoon.php");
 }
 
}
?>