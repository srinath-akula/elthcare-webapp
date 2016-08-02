<!-- Static page which contains links to various list pages containing lists in the form of a-z or category -->
<?php 
require_once("include/get_treatments.php");
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	<?php include 'include/head.php'; ?>
  <link rel="stylesheet" href="css/health_library.css"/>

</head>
<body style="background-color:white;" class ="page-id-5 page-parent page-template-default" id="start_page">
<!--  This is the menu bar layout -->
<div class="container-fluid" id="navbar_container">

<?php include_once("analyticstracking.php") ?>
<?php include 'include/header.php'; ?>
</div>
<!--  This is the first page bar layout -->
<div id="menu_bar_area" class="container-fluid">
<?php require_once("include/menu_bars_temp.php"); // Include the top content containing the top panel and the links panel?>

</div>
<div class ="container-fluid" id="first_page">
 <div class="row" id="lib_panel_wrapper">
    <div class="col-sm-6" >
    <!-- Grid 1  - left -->
      <div class="panel panel-default">
          <div class="panel-heading" id="panel_head">Conditions</div>
          <div class="panel-body " id="panel_content">
           <div class="image_area" >


           </div>
            <article class="text_area">
                You can understand about every dental disease on how it is caused , what are the complications if not treated, the care you need to take ,doctors to treat the condition etc .
              </article>
                <div class="btn-group btn-group-lg">
                  <button type="button" class="btn btn-primary" id="conditons_az">A-Z</button>
                  <button type="button" class="btn btn-primary" id="condtions_cat">Category</button>
              </div>
          </div>
      </div>


       <div class="panel panel-default">
          <div class="panel-heading">Treatments</div>
           <div class="panel-body " id="panel_content">
           <div class="image_area" >


           </div>
            <article class="text_area">
                You can understand about every dental disease on how it is caused , what are the complications if not treated, the care you need to take ,doctors to treat the condition etc .
              </article>
                <div class="btn-group btn-group-lg">
                  <button type="button" class="btn btn-primary" id="treatments_az">A-Z</button>
                  <button type="button" class="btn btn-primary" id="treatments_az">Category</button>
              </div>
          </div>
      </div>


    </div>
    <div class="col-sm-6" >
    <!-- Grid 2 - right  -->
      <div class="panel panel-default">
          <div class="panel-heading">Diagnostic Tests</div>
           <div class="panel-body " id="panel_content">
           <div class="image_area" >


           </div>
            <article class="text_area">
                You can understand about every dental disease on how it is caused , what are the complications if not treated, the care you need to take ,doctors to treat the condition etc .
              </article>
                <div class="btn-group btn-group-lg">
                  <button type="button" class="btn btn-primary" id="diagnosis_az">A-Z</button>
                  <button type="button" class="btn btn-primary" id="diagnosis_cat">Category</button>
              </div>
          </div>
      </div> 


       <div class="panel panel-default">
          <div class="panel-heading">Symptoms</div>
          <div class="panel-body">
            <div class="panel-body " id="panel_content">
           <div class="image_area" >


           </div>
            <article class="text_area">
                You can understand about every dental disease on how it is caused , what are the complications if not treated, the care you need to take ,doctors to treat the condition etc .
              </article>
                <div class="btn-group btn-group-lg">
                  <button type="button" class="btn btn-primary" id="symptoms_az">A-Z</button>
                  <button type="button" class="btn btn-primary" id="symptoms_cat">Category</button>
              </div>
          </div>
      </div>
    </div>
  </div>
  <div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large ">
      <div style="font-size:24px" class="material-icons">+</div>
    </a>
    <ul>
      <li><a class="div-floating "><div class="material-icons content_fab">Open in APP</div></a></li>
    </ul>
  </div>



</div>
<?php include 'include/footer.php' ?>


<!-- 	<script type="text/javascript">
		$('#example').countdown({
			date: '05/24/2016 23:59:59',
			offset: -8,
			day: 'Day',
			days: 'Days'
		}, function () {
			alert('Done!');
		});
	</script>
 -->


  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
  <script src="js/floating_action_button.js"></script>

<script type="text/javascript" src="js/health_library.js"/>
<!-- Google Analytics API  -->
<script>
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