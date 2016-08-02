<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'include/head.php' ?>
<style>

.dental_image > li >img
{
	width:100px; height:100px;
}
.odd
{
	width:100%;
	height:100px;
	margin-left:20%;
	float:left;
	margin-bottom:50px;
}
.odd_img
{
	width:10%;
	float:left;
}
.odd_img > img
{
	width:100px;
	height:100px;
}
.odd_p
{
	float:left;
	color:blue;
}


.odd_p > p >a
{
	color:blue;
} 
 
.even
{
	width:100%;
	margin-right:50px;
	height:100px;
}
.even_p 
{
	width:70%;
	float:left;
}
.even_p > p
{
	float:right;
	color:blue;
	margin-top:10px;
}
.even_p > p >a
{
	color:blue;
} 
.even_img
{
	width:30%;
	float:left;
}
.even_img > img
{
	float:left;
	width:100px;
	height:100px;
}

</style>

</head>
<body style="background-color:#ffffff">

<?php include 'include/header.php'; ?>
  
<div class="container-fluid">
  <div class="row content" style="margin-top:60px;color:white;" >
    <div class="col-sm-12 sidenav" style="margin-top:100px;">	
	<h1 style="margin-bottom:100px; color:blue;">Dental Treatment</h1>
	
	    <div class="odd"><div class="odd_img"><img src="images/general_dentistry.png"></img></div><div class="odd_p"><p>general dentist<br>
		<a href="dental_treatment.php?id=10001">Dental filling</a><br>
		<a href="dental_treatment.php">composite filling</a><br>
		<a href="dental_treatment.php"></a></p>
		</div>
		</div>
		
		<div class="even"><div class="even_p"><p>implantology <br>
		<a href="dental_treatment.php?id=10007">Dental implants</a><br>
		<a href="dental_treatment.php">Hello</a><br>
		<a href="dental_treatment.php">Hello</a> </p>
		</div> <div class="even_img"><img src="images/implants.png"></div></div>
		
		
		
		<div class="odd"> <div class="odd_img"><img src="images/endodontics.png"></div><div class="odd_p"><p>endodontics<br>
		<a href="dental_treatment.php?id=10004">RCT</a><br>
		<a href="dental_treatment.php">ReRct</a><br>
		<a href="dental_treatment.php">Hello</a>	</p>
		</div>
		</div>
		
		<div class="even"><div class="even_p"><p>pedodontics procedure
		<br>
		<a href="dental_treatment.php">Space Maintenance</a><br>
		<a href="dental_treatment.php">Fluoride Treatment</a><br>
		<a href="dental_treatment.php">Hello</a>
		</p></div> <div class="even_img"><img src="images/prosthodontics.png"></div></div>
		
		
	    <div class="odd"><div class="odd_img"><img src="images/perodontics.png"></div><div class="odd_p"><p>perodontics procedures<br>
		<a href="dental_treatment.php?id=10013">Root Planning</a><br>
		<a href="dental_treatment.php?id=10014">flap Surgery</a><br>
		<a href="dental_treatment.php"></a></p>
		</div>
		</div>
		
		<div class="even"> <div class="even_p"><p> orthodontic procedures
		<br>
		<a href="dental_treatment.php?id=10015">Dental Braces </a><br>
		<a href="dental_treatment.php">myofunctional appliance</a><br>
		<a href="dental_treatment.php?id=10021">night guard</a>
		</p></div> <div class="even_img"><img src="images/orthodontics.png"></div></div>


</div>
 </div>
</div>
<?php include 'include/footer.php' ?> 
</body>
</html>