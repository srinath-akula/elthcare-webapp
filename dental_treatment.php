<?php
$id=$_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("analyticstracking.php") ?>
<?php include 'include/head.php' ?>

<style>
table, tr ,td{
     border: 4px solid black;
}
table
{
	margin-left:50px;
	margin-right:40px;
	margin-bottom:50px;
	color:blue;
}
</style>

</head>
<body style="background-color:#ffffff">

<?php include 'include/header.php'; ?> 
<div class="container-fluid">
  <div class="row content" style="margin-top:60px;color:white;" >
 <!--   <div class="col-sm-3 sidenav" style="margin-top:120px;">	
	<ul>
		<li> general dentist procedure</li>
		<li>implantology procedure</li>
		<li>oral and maxillofacial surgery procedures</li>
		<li>prosthodontic procedure</li>
		<li>periodontics procedures</li>
		<li>orthodontic procedures </li>
   </ul>

</div> -->
 <div class="col-sm-12">
		
		<?php

require 'include/Dbconnect.php' ;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT s.title AS title,
       CASE
           WHEN t1.display_name IS NULL THEN s.title
           ELSE t1.display_name
       END AS display_title,
       s.description AS description,
       CASE
           WHEN t2.display_name IS NULL THEN s.description
           ELSE t2.display_name
       END AS display_description
FROM procedure_steps s
INNER JOIN procedures_procedure_steps q ON q.procedure_step_id=s._id
INNER JOIN procedures p ON q.procedure_id=p._id
LEFT JOIN translations t1 ON s._id = t1.target_id
AND t1.target_type = 'procedure_steps'
AND t1.language = 0
LEFT JOIN translations t2 ON s._id = t2.target_id
AND t2.target_type = 'procedure_step_description'
AND t2.language =0
WHERE p._id = $id
AND p.procedure_type='Treatment'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row	
	 echo "<table><tr><th>Ttile</th><th>Description</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
		
		echo "<tr><td>" . $row["title"]. "</td><td>" . $row["description"]. "</td></tr>";
		echo "<br>";
    }
	 echo "</table>";
} else {
    echo "0 results";
}   
 ?>	
 
 
    </div>
 </div>
<?php include 'include/footer.php' ?> 
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>