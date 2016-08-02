<?php
session_start();
if(isset($_SESSION['name'])!="")
{
 header("Location: index.php");
}
require 'include/localhost.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['btn-register']))
{
	?>
	<script>alert('successfully registered.. ');</script>
	<?php
 $uname = mysqli_real_escape_string($conn, $_POST['name']);
 $contact= mysqli_real_escape_string($conn, $_POST['contact']);
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $upass = md5(mysqli_real_escape_string($conn, $_POST['pass']));
 
 $sql="INSERT INTO register(id,name,contact,email,password) VALUES('','$uname','$contact','$email','$upass')";
 
 if(mysqli_query($conn,$sql))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
		header("Location: index.php");
		
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
		header("Location: comingsoon.php");
 }
}
?>