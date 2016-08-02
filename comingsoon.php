<!-- Treatment description page  -->

<?php 
require_once("include/get_data_db.php");


?>
<!doctype html>
<html lang="en">
<head>
	<?php include 'include/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="library/tooltipster-master/css/tooltipster.css" />
	<link rel="stylesheet" href="css/diagnosis_screen.css"/>
</head>
<body style="background-color:white;" class ="page-id-5 page-parent page-template-default" id="start_page">
<!-- Menu bar  -->
<div class="container-fluid" id="navbar_container">
<?php include 'include/header.php'; ?>
</div>
<section id="main_page">
<!-- First page design  -->
<div id="menu_bar_area" class="container-fluid">
<?php require_once("include/menu_bars_temp.php"); ?>
</div>

<div class ="section container-fluid" id="first_page">
<div class="row">
<!-- First column in page -->
    <div class="col-sm-4 border-right" >
    <div id="left-top" class="grid_cell_first">
    <div class='heading'><h4> <?php if(isset($title_firstpage[0]))  echo $title_firstpage[0];  ?></h4></div>
         <article >
        <?php if(isset($description_firstpage[0]))  echo $description_firstpage[0];  ?>
        </article>
        <span id ="<?php if(isset($id[0]))  echo $id[0];  ?>">
       <a class="link_first" id="link_first" href="javascript:void(0);"> more </a>
       </span>
    </div>

 	<div id="left-bottom" class="grid_cell_first">

    <div  class='heading'><h4> <?php if(isset($title_firstpage[2]))  echo $title_firstpage[2]; ?> </h4></div>

         <article >
        <?php if(isset($description_firstpage[2]))  echo $description_firstpage[2];  ?>
        </article>
        <span  id ="<?php if(isset($id[2]))  echo $id[2];  ?>">
       <a class="link_first" id="link_second" href="javascript:void(0);"> more </a>
       </span>
    </div>

    </div>
     <!-- Second column in page -->
    <div class="col-sm-4 " >
      
    </div>
    <!-- Third column in page -->
    <div class="col-sm-4 border-left"  >
	     <div id="right-top" class="grid_cell_first">

      <div  class='heading'><h4> <?php if(isset($title_firstpage[1]))  echo $title_firstpage[1]; ?> </h4></div>
	     <article>
        <?php if(isset($description_firstpage[1]))  echo $description_firstpage[1];  ?>
        </article >
        <span id ="<?php if(isset($id[1]))  echo $id[1];  ?>">
         <a class="link_first" id="link_third" href="javascript:void(0);"> more </a>
         </span>
	    </div>

	 	<div id="right-bottom" class="grid_cell_first">

    <div class='heading'><h4> <?php if(isset($title_firstpage[3]))  echo $title_firstpage[3]; ?></h4></div>
    <article  >
	     <?php if(isset($description_firstpage[3]))  echo $description_firstpage[3];  ?>
     </article>
       <span id ="<?php if(isset($id[3]))  echo $id[3];  ?>">
        <a class="link_first" id="link_fourth" href="javascript:void(0);"> more </a>
        </span>
	    </div>
	</div>
  </div>

<!-- 3 cards shown on the first page  -->
 <div class="row" id="card_area">

    <div class="col-sm-4 component" style="padding-left:0px; padding-right:1px" ><img id="first_card" src="treatments/bdjet.png" /></div>
    <div class="col-sm-4 component"  style="padding-left:0px; padding-right:1px;"> <img id="second_card  " src="treatments/doctor_search.png" style="width:100%;height:100%;"/> </div>
    <div class="col-sm-4 component" style="padding-left:0px; padding-right:1px;"> <img id="third_card" src="treatments/diagnosis.png"/></div>
  </div>
  
</div>

<section id="description">
<div class ="section" >
<br><br><br><br>
<div class="row" id="treatment_description">
    <div class="col-sm-7"  id ="left_accordion_area">
        <div class="panel-group" id="accordion">

        <?php
        // Show the 'accordion' multiple times with the data filled using the query

         for($i=1;$i<=$articles_length;$i++){ 
        echo "<div class='panel panel-default panel_desc'>
        <div class='panel-heading' id='panel-accordion-heading".$id2[$i-1]."'>
          <h4 class='panel-title' >
          <span  data-toggle='popover'   >
            <a data-toggle='collapse' data-parent='#accordion' href='#collapse$i' >

            ".$title_secondpage[$i-1]."</a> </span>
          </h4>
        </div>
        <div id='collapse$i' class='panel-collapse collapse'>
        <div class='tip'> Hello </div>
          <div class='panel-body'>
            <img class='description_image' style='";
        if($i%2==0)
          echo "float:left;";
        else echo "float:right;";

        echo "' src='https://s3-us-west-2.amazonaws.com/elth.care/images/app_content_images/cirs98320sd.png'/>".$description_secondpage[$i-1]."
          </div>
        </div>
      </div>"; } 
      ?>
     
</div>
</div>


    <div class="col-sm-5 vcenter" >
  </div>

</div>
</section>

<!-- Footer of the page -->
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
<!-- Some additional js libraries -->
<script src="js/jquery.waypoints.min.js" defer></script>
<script type="text/javascript" src="js/diagnosis.js" defer></script>
 <script type="text/javascript" src="library/tooltipster-master/js/jquery.tooltipster.min.js"></script>
<!-- Google Analytics API -->
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