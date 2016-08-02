<?php 
$text="";
    if(isset($_GET['search']) && !empty($_GET['search']))
    {
        $text=$_GET['search'];
    }
?>
<!doctype html>
<html lang="en">
<head>
	<?php include_once("analyticstracking.php") ?>
	<?php include 'include/head.php'; ?>
	<link href="css/health_diagnosis.css" rel="stylesheet" />

	<link rel="stylesheet" href="library/lifetrakr/css/owl.carousel.css">
    <link rel="stylesheet" href="library/lifetrakr/css/owl.theme.css">
    <link rel="stylesheet" href="library/lifetrakr/css/animate.css">
    <link rel="stylesheet" href="library/lifetrakr/css/main.css">
    <link rel="stylesheet" href="library/lifetrakr/css/responsive.css">
        <link href="css/temp.css" rel="stylesheet" />


</head>
<body style="background-color:aqua;" class ="page-id-5 page-parent page-template-default" id="start_page">
<!-- Menu bar  -->
<div class="container-fluid" id="navbar_container">

<?php include 'include/header.php'; ?>
</div>

    <header>
        <div class="container">
            <div class="row">
              
                <div class="col-sm-push-6 col-sm-6">
                    <div class="block wow fadeInRight" data-wow-delay="1s">
                            <img id="botlogo" src="images/elthbot.png" style="width:80px ; height:80px" alt="">
                        <div class="text_desc">
                        <?php  if ( isset($_GET['search'])) {
                        echo "<h4>Find the right <strong>".strtolower($text)."</strong> around you on the go with elth care app. Install Now ! </h4>";
                    }
                        else{
                            echo "<h4> Find the right specialists around you on the go with elth care app. Install Now !";
                        }
                    ?>
                        </div>
                        <div class="download-btn">
                            <a href="https://goo.gl/WYxjDO">
								<img src="library/lifetrakr/images/andriod-button.png" alt="">
							</a>
							<a href="https://goo.gl/p8dLrj">
								<img src="library/lifetrakr/images/apple-button2.png" alt="">
							</a>
                        </div>

                    </div>
                </div>

                  <div class="col-sm-pull-6 col-sm-6">
                    <div class="app-showcase wow fadeInDown" data-wow-delay=".5s">
                        <img src="images/iphone_dentists.gif" alt="">
                    </div>
                    
                </div>
            </div>
        </div>
    </header>


	<script src="library/lifetrakr/js/vendor/modernizr-2.6.2.min.js" defer></script>
        <script src="library/lifetrakr/js/owl.carousel.min.js" defer></script>
        <script src="library/lifetrakr/js/wow.min.js" ></script>
        <script src="library/lifetrakr/js/main.js" defer></script>
        <script >
         new WOW(
            ).init();
        </script>

<!-- Footer of the page -->
<?php include 'include/footer.php' ?>
</body>
</html>