<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'include/head.php' ?>
</head>
<body style="background-image:url(images/back.jpg);background-size:cover;background-position:center">

  <?php include_once("analyticstracking.php") ?>
  <?php include 'include/header.php'; ?>

<div class="container">  
<div class="container-fluid" style="width: 90%;height: 250px; margin-top:150px; ">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
       <!-- <div class="panel-heading">What is dental elth care</div>   -->
           <div class="card" id="card-1">
				<div  class="front">
				<a href="index.html"><img src="images/records.png" class="img-responsive" style="width:350px ;height:200px;" alt="Image"></a>
				</div>
				<a href="what.php"><div class="back">
				<p> What is dental elth care</p>
				</div></a>
          </div>
    </div>
   </div>
   
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
    
        <div class="card" id="card-2">
				<div  class="front">
				<a href="find_dentist.php"><img src="images/records-2.png" class="img-responsive" style="width:350px ;height:200px;" alt="Image"></a>
				</div>
				<a href="find_dentist.php"><div class="back">
				<p> find Dentist</p>
				</div></a>
       </div>
       
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        
       <div class="card" id="card-3">
				<div  class="front">
				<a href="dental_treatment1.php"><img src="images/records-3.png" class="img-responsive" style="width:350px ;height:200px;" alt="Image"></a>
				</div>
				<a href="dental_treatment1.php"><div class="back">
				<p> Dental Treatment</p>
				</div></a>
       </div>
       
      </div>
    </div>
  </div>
</div>
<br>

<div class="container" style="width: 90%;height: 250px;">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
           <div class="card" id="card-4">
				<div  class="front">
				<a href="index.html"><img src="images/x-ray-2.png" class="img-responsive" style="width:350px ;height:200px;" alt="Image"></a>
				</div>
				<a href="HCFAB/index.php"><div class="back">
				<p>Diagnosis Dental Problem</p>
				</div></a>
       </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
		<div class="card" id="card-5">
				<div  class="front">
				<a href="index.html"><img src="images/records-3.png" class="img-responsive" style="width:350px ;height:200px;" alt="Image"></a>
				</div>
				
				<a href="index.html"> <div class="back">
				<p> Estimate Dental Budget</p>
				</div></a>
       </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="card" id="card-6">
				<div  class="front">
				<a href="index.html"><img src="images/records-3.png" class="img-responsive" style="width:350px; height:200px;" alt="Image"></a>
				</div>
				<a href="index.html">
				<div class="back">
				<p> Coming Soon</p>
				</div></a>
       </div>
        
      </div>
    </div>
  </div>
</div>
</div>

<?php include 'include/footer.php'; ?>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.flip.min.js"></script>
<script>
$(function(){
	
	 $("#card-1").flip({
        axis: "y", // y or x
        reverse: true, // true and false
        trigger: "hover", // click or hover
        speed: 1000
      });
	  $("#card-2").flip({
        axis: "x", // y or x
        reverse: true, // true and false
        trigger: "hover", // click or hover
        speed: 1000
      });
	  $("#card-3").flip({
        axis: "y", // y or x
        reverse: true, // true and false
        trigger: "hover", // click or hover
        speed: 1000
      });
	  $("#card-4").flip({
        axis: "y", // y or x
        reverse: true, // true and false
        trigger: "hover", // click or hover
        speed: 1000
      });
	  $("#card-5").flip({
        axis: "x", // y or x
        reverse: true, // true and false
        trigger: "hover", // click or hover
        speed: 1000
      });
	  $("#card-6").flip({
        axis: "y", // y or x
        reverse: true, // true and false
        trigger: "hover", // click or hover
        speed: 1000
      });

    
});
</script>

</body>
</html>
