<?php 
$text="";
$cat=0;
    if(isset($_GET['search']) && !empty($_GET['search']))
    {
        $text=$_GET['search'];
    }
    if(isset($_GET['cat']) && !empty($_GET['cat']))
    {
        $cat=$_GET['cat'];
    }
    $image="iphone_treatments.gif";
    if($cat==1)
    {
        $image="iphone_treatments.gif";
    }
    else if($cat==2) 
    {
        $image="iphone_conditions.gif";
    }
    require_once 'include/get_target_string.php';

?>
<!doctype html>
<html lang="en">
<head>
	<?php include_once("analyticstracking.php") ?>
	<?php include 'include/head.php'; ?>
	<link href="css/health_library.css" rel="stylesheet" />

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
                        <?php
                        if ( $cat ==1)
                        {
                            echo" <h4> Knowing is half the battle. Understand what is <strong>$text</strong>, what causes it, what are different treatment options and how much do these treatments cost, by installing elth care app. Install Now!</h4>";
                        }
                        else if($cat==2)
                        {
                            echo " <h4> Success of any treatment is partly in the patient's hands too and  <strong>$text</strong> is no different. Understand when do dentists do <strong>$text</strong>, what care you need to take and more importantly which option is most suitable for you through elth care app. Install Now!</h4>";
                        }
                        else 
                        {
                            echo " <h4> Success of any treatment is partly in the patient's hands too. Understand when do dentists do a specific treatment, what care you need to take and more importantly which option is most suitable for you through elth care app. Install Now!</h4> ";
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

                 <div class="col-sm-6 col-sm-pull-6">
                    <div class="app-showcase wow fadeInDown" data-wow-delay=".5s">
                    <?php 
                      echo " <img src='images/$image' alt=''>";
                    ?>
                       
                    </div>
                    
                </div>
            </div>
        </div>
    </header>

<!-- Footer of the page -->
<?php include 'include/footer.php' ?>
		<script src="library/lifetrakr/js/vendor/modernizr-2.6.2.min.js" defer></script>
        <script src="library/lifetrakr/js/owl.carousel.min.js" defer></script>
        <script src="library/lifetrakr/js/wow.min.js" ></script>
        <script src="library/lifetrakr/js/main.js" defer></script>
        <script >
         new WOW(
            ).init();
        </script>
</body>
</html>