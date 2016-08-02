<?php 
require_once("include/get_treatments.php");


?>
<!doctype html>
<html lang="en">
<head>
	<?php include 'include/head.php'; ?>
	<link rel="stylesheet" href="css/treatments_list.css"/>
</head>
<body style="background-color:white;" class ="page-id-5 page-parent page-template-default" id="start_page">

<div class="container-fluid" id="navbar_container">

<?php include 'include/header.php'; ?>
</div>
<section id="main_page">

<div id="menu_bar_area" class="container-fluid">
<?php require_once("include/menu_bars_temp.php"); ?>

</div>

<div class ="section container-fluid" id="first_page">
    <navbar id="list_header">
      <div class="container-fluid">
  <div class="btn-toolbar listnav_area">
    <div class="btn-group btn-group-sm">
    <button class='btn btn-default btn_listnav' style='width:70px !important; overflow:wrap;'>Common</button>
    <button class='btn btn-default btn_listnav' style='width:40px !important; overflow:wrap;'>All</button>
    <?php 
      $i=0;
       foreach (range('A', 'Z') as $char)
       {
           echo "<button class='btn btn-default btn_listnav ";
            if($alpha[$i]==0) 
                echo "list_empty";
            $i++;
            echo"' style='width:40px !important;'>$char</button>";
      }
    ?>
    </div>
  </div>
</div>


    </navbar>


    <div class="row">
     <div class="col-lg-4 col-mg-4 col-sm-4 " id="panel_first_row" >
    <?php 

      for($i=0;$i<$number_rows;$i+=3)
      {
        echo " <div class='panel panel-default panel_col'>
             <div class='col-sm-4 col-mg-4 col-xs-8  panel_image_container' >
              <img style='width:auto;height:auto;max-width:100%;max-height:100%; ' class='panel_image_area' src='$image[$i]'>
             </div>
             <div class='col-sm-8 col-mg-8 col-xs-8 panel_text_container'>
              <div id='panel_text_area' style='margin-top:10%;'> $display_title[$i]</div>
              </div>
              </div>";
      }

      ?>
    </div>     
    <div class="col-lg-4 col-mg-4 col-sm-4" id="panel_second_row" >
      <?php 

      for($j=1;$j<$number_rows;$j+=3)
      {
        echo " <div class='panel panel-default panel_col'>
             <div class='col-sm-4 col-mg-4 col-xs-8  panel_image_container' >
              <img style='width:auto;height:auto;max-width:100%;max-height:100%; ' class='panel_image_area' src='$image[$j]'>
             </div>
             <div class='col-sm-8 col-mg-8 col-xs-8 panel_text_container'>
              <div id='panel_text_area' style='margin-top:10%;'> $display_title[$j]</div>
              </div>
              </div>";
      }

      ?>

    </div>
     <div class="col-lg-4 col-mg-4 col-sm-4" id="panel_third_row" >
      
      <?php 

      for($k=2;$k<$number_rows;$k+=3)
      {
        echo " <div class='panel panel-default panel_col'>
             <div class='col-sm-4 col-mg-4 col-xs-8  panel_image_container' >
              <img style='width:auto;height:auto;max-width:100%;max-height:100%; ' class='panel_image_area' src='$image[$k]'>
             </div>
             <div class='col-sm-8 col-mg-8 col-xs-8 panel_text_container'>
              <div id='panel_text_area' style='margin-top:10%;'> $display_title[$k]</div>
              </div>
              </div>";
      }

      ?>
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


<script type="text/javascript" src="js/jquery-listnav.min.js" defer></script>
<script type="text/javascript" src="js/treatments_list.js" defer></script>
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