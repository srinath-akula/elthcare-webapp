<!DOCTYPE html>
<head>
<?php include 'include/head.php' ?>
</head>
<body style="background-color:#ffffff;">

<?php include_once("analyticstracking.php") ?>
<?php include 'include/header.php'; ?>
  
  
<div class="container-fluid">
  <div class="row content" style="margin-top:150px;">
    <div class="col-sm-3 sidenav">
	
	<?php

require 'include/Dbconnect.php' ;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT DISTINCT area FROM health_centers";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo"Location";
	echo"<br>";
    while($row = mysqli_fetch_assoc($result)) {
		
       echo "<input type='checkbox' name='area' id='loc' value='".$row["area"]."'>"
        .$row["area"];
		echo "<br>";
    }
} else {
    echo "0 results";
}   
 ?>	
 
  
 
 <script>
 		
$(document).ready(function () {
 var loc;
  
  
$( "input" ).on( "click", function() {
  loc= $( "input:checked" ).val();
  //alert(loc);
  if(loc !=undefined)
  {
  
    var xhttp = new XMLHttpRequest();
  
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
	   
	   
        symptoms = JSON.parse(xhttp.responseText);
		var i;
	    var symptomsList = $('.col-sm-9 ul');
            symptomsList.html('');

			//alert(symptoms);
			//alert(symptoms[0].name);
            for (i in symptoms) {
				
                symptomsList.append('<li style="width:400px; border-style: groove; height:100px;">' + 'Name: '+ symptoms[i].name +'<br>'+symptoms[i].health_center+'<br>'+symptoms[i].address_line1+'</li>');
            }
    }
  }
  
  var str1="https://h3ppsp7naa.execute-api.us-west-2.amazonaws.com/dev/physicians?area=";
  var str2=loc;
  var str3=str1.concat(str2)
  var str4="&specialty=Endodontist&experience=all&clinic_type=all&weekday=all&time_slot=all#"
  var url=str3.concat(str4);
  
  
  /* var res = loc.split(" ");
  var a=res[0];
  var b=res[1];
  */
 
  //alert(url);
  //alert(req);
  xhttp.open("GET", url, true);
  xhttp.send(); 

  }
  
});	
});
 
 </script>

</div>
    <div class="col-sm-9">
			<ul>
			</ul>
	
    </div>
  </div>
</div>
<?php include 'include/footer.php' ?>
<?php
mysqli_close($conn);
?>
</body>
</html>