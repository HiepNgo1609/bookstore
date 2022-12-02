<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
session_start(); //start temp session until logout/browser closed

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Trang chủ</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> 
</head>

<body class="home">
    
        <!--header starts-->
        <?php require_once "./header.php" ?>

        
        <!-- banner part starts -->
        <section class="hero bg-image" data-image-src="images/img/Biasach.png">
            <div class="hero-inner">
                <div class="container text-center hero-text font-white">
                    <h1>Bởi vì sách là thế giới</h1>
                    <h5 class="font-white space-xs">Nguồn sách đa dạng, nhiều thể loại bổ ích, phù hợp cho mọi lứa tuổi</h5>
                    
                    
                    
                        
                    <!-- end:Steps -->
                </div>
            </div>
            <!--end:Hero inner -->
        </section>
        <!-- banner part ends -->
      
	  
	
        <!-- Popular block starts -->
        <section class="popular">
            <div class="container">
                <div class="title text-xs-center m-b-30">
                    <h2>Sách vừa xuất bản mới nhất</h2>
                </div>
                <div class="row">
						<?php 
						// fetch records from database to display popular first 3 dishes from table
						?>
                </div>
            </div>
        </section>

        <!-- start: FOOTER -->
        <?php require_once "./footer.php" ?>
        <!-- end:Footer -->
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>