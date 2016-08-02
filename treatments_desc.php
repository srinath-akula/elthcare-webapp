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

<div class="container-fluid">

<?php include 'include/header.php'; ?>
</div>
<section id="main_page">

</section>


<!-- Second page containing the description for the treatments  -->
<section id="description">
<div class ="section" >

<div class="row">
    <div class="col-sm-8"  id ="container_description">
  
    <?php
    for($i=0;$i<$articles_length;$i++)
    {
        echo "<div id='description_$id[$i]' class='wrapper_second_page container-fluid' style='border-bottom:1px solid #ddd;'>
        <h3>" ;
         if(isset($title_secondpage[$i]))  echo $title_secondpage[$i]; 
         echo"</h3>
        <article class='second_text'>
        <img class='description_image' style='";
        if($i%2==0)
          echo "float:left;";
        else echo "float:right;";

        echo "' src='https://s3-us-west-2.amazonaws.com/elth.care/images/app_content_images/cirs98320sd.png'/>";

           if(isset($description_secondpage[$i]))  echo $description_secondpage[$i];
           echo "
          </article>
              </div>";
    }

    ?>

    </div>
    <!-- Anchor containing the three cards which are to be dropped as when the page is scrolled -->
    <div class="col-sm-4" id="fixed_anchor_parent">
     <div id="fixed_anchor">  
        <div class="container-fluid" id="second_page_cards">
         <div><img id="first_card" src="treatments/bdjet.png"/></div>
        <div > <img id="second_card  " src="treatments/doctor_search.png" style="width:100%;height:100%;"/> </div>
        <div > <img id="third_card" src="treatments/diagnosis.png"/></div>
      </div>

    <a href="javascript:void(0);" id="back_to_top"> Back to Top </a>
      </div>
  </div>
  </div>
  </div>

</section>
<?php include 'include/footer.php' ?>

<script src="js/jquery.waypoints.min.js" defer></script>
<script type="text/javascript" src="js/diagnosis.js" defer></script>
 <script type="text/javascript" src="library/tooltipster-master/js/jquery.tooltipster.min.js" defer></script>
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