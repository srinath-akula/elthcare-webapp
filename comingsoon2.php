<!doctype html>
<html lang="en">
<head>
	<?php include 'include/index_head.php' ?>
	<style>
	hr{
	border-top: 5px solid #ffc000;
}
	</style>
	
</head>
<body style="background-color:#00bcd4">
<div class="container-fluid">

<?php include 'include/header.php' ?>
<div class="time" style="height:225px; margin-top:150px;">
    <h1 style="margin-top:10px; text-align:center; color:white;">Coming Soon</h1>
	<ul id="example" style="color:white;">
	  <li><span class="days">00</span><p class="days_text" style="color:white;">Days</p></li>
		<li class="seperator">:</li>
		<li><span class="hours">00</span><p class="hours_text" style="color:white;">Hours</p></li>
		<li class="seperator">:</li>
		<li><span class="minutes">00</span><p class="minutes_text" style="color:white;">Minutes</p></li>
		<li class="seperator">:</li>
		<li><span class="seconds">00</span><p class="seconds_text" style="color:white;">Seconds</p></li>
	</ul>
</div>
	
<div class="container-fluid bg-3 text-center">    

  <div class="row">
    <div class="col-sm-12">
       <hr>
	   <a href="what.php"><button type="button" style="margin:30px; color:white; font-size:30px; text-align:center; width:200px; height:60px; background-color:#ffc000;" class="btn">What We Do</button> </a>
	  <a href="comingsoon.php"> <button type="button"  style="margin:30px; font-size:30px; text-align:center;    width:200px;background-color:#ffc000; color:white; height:60px;"  class="btn">Diagnosis</button></a>
  </div>
  <p style="text-align:center; font-size:20px;  color:white; font-family: cursive;
    font-style: italic;"> Keep your eyes peeled! we will be launching our diagnosis tool <br> very soon... </p>
</div>
</div>
<br>
</div>

<?php include 'include/footer.php' ?>

	<script type="text/javascript">
		$('#example').countdown({
			date: '05/24/2016 23:59:59',
			offset: -8,
			day: 'Day',
			days: 'Days'
		}, function () {
			alert('Done!');
		});
	</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	
</body>
</html>