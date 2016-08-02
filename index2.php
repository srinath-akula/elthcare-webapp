<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'include/head.php' ?>
</head>
<style>
hr{
	border-top: 5px solid #ffc000;
}
</style>
<body style="background-color:#00bcd4">

<?php include_once("analyticstracking.php") ?>
<?php include 'include/header.php'; ?>


<div class="col-sm-12" style="height:225px;">
  <div class="container text-center">
   <img src="images/tooth_image.png" style="height:225px;">
  </div>
</div>



<div class="container-fluid bg-3 text-center">    

  <div class="row">
    <div class="col-sm-12">
       <hr>
	   <a href="explore.php"><button type="button" style="margin:30px; color:white; font-size:30px; text-align:center; width:200px; height:60px; background-color:#ffc000;" class="btn">Explore</button> </a>
	  <a href="comingsoon.php"> <button type="button"  style="margin:30px; font-size:30px; text-align:center;    width:200px;background-color:#ffc000; color:white; height:60px;"  class="btn">Diagnosis</button></a>
  </div>
  <p style="text-align:center; font-size:20px; font-family: cursive;
    font-style: italic; color:white"> Dentistry is more of an art than science and we mastered the <br> sceince of art! </p>
</div>
</div>


<br>
<br>
<?php include 'include/footer.php' ?>
</body>
</html>
