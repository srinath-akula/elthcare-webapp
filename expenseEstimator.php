<?php 
$text="";
    if(isset($_GET['search']) && !empty($_GET['search']))
    {
        $text=$_GET['search'];
    }
    //In order to get the target string 
require_once 'include/get_target_string.php';
?>
<!doctype html>
<html lang="en">
<head>
	<?php include_once("analyticstracking.php") ?>
	<?php include 'include/head.php'; ?>
	<link href="css/expenseEstimator.css" rel="stylesheet" />
	<link href="css/temp.css" rel="stylesheet" />
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
                         <?php  if ( isset($_GET['search'])) 
                       echo " <h4>Plan your dental expenses ahead by knowing all the available options. Understand how much does <strong>$text </strong> treatment cost and pick right option for you in few seconds through elth care app.</h4>";
                       else {
                        echo " <h4>Plan your dental expenses ahead by knowing all the available options. Understand how much does each treatment cost and pick right option for you in few seconds through elth care app. Install Now</h4>";
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
                        <img src="images/iphone_expense.gif" alt="">
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