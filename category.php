<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="admin/images/favicon1.png">
    <title>Kho sách</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/category.css" rel="stylesheet">
</head>

<body>
    <!--header starts-->
    <?php require_once "./header.php" ?>

    <div class="page-wrapper">
        <!-- top Links -->
        <div class="top-links">
            <div class="container">
                <ul class="row links">
                    <li class="col-xs-12 col-sm-4 link-item active"><span>1</span><a href="category.php">Choose
                            Book</a></li>
                    <li class="col-xs-12 col-sm-4 link-item"><span>2</span><a href="cart.php">Check out</a></li>
                    <li class="col-xs-12 col-sm-4 link-item"><span>3</span><a href="">Payment</a></li>
                </ul>
            </div>
        </div>
        <!-- end:Top links -->
        <!-- start: Inner page hero -->
        <div class="inner-page-hero bg-image" data-image-src="images/img/Biasach.png">
            <div class="container"> </div>
            <!-- end:Container -->
        </div>

        <!-- Sidebar -->
        <div class="container">
            <div class="row">
                <div class="p-1 col-lg-3 col-xl-3">
                    <!-- Price -->
                    <div class="widget category">
                        <div class="widget-heading">
                            <h3 class="widget-title text-title">
                                Giá
                            </h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-body">
                            <ul class="tags price-limit-list">
                                <li>
                                    <a href="#" class="tag price-limit-item">
                                        Giá: <span>0 - 150,000</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tag price-limit-item">
                                        Giá: <span>150,000 - 300,000</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tag price-limit-item">
                                        Giá: <span>300,000 - 500,000</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tag price-limit-item">
                                        Giá: <span>500,000 - 700,000</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tag price-limit-item">
                                        Giá: <span>700,000 - Trở lên</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Price -->

                    <!-- Genres -->
                    <div class="widget category">
                        <div class="widget-heading">
                            <h3 class="widget-title text-title">
                                THỂ LOẠI
                            </h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-body">
                            <ul class="tags genre-list"></ul>
                        </div>
                    </div>
                    <!-- End Genres -->
                </div>

                <div class="p-1 col-lg-9 col-xl-9">
                    <!-- Filter and Select -->
                    <div class="widget clearfix">
                        <div class="widget-heading" style="display: flex;">
                            <span class="text-title mr-1 col-2">
                                Lọc theo:
                            </span>

                            <ul class="tags text-title filter">
                                <?php
                                if (isset($_POST["category"])) {
                                    echo "  <li class='tag filter-item category-filter'>
                                                " . $_POST["category"] . "
                                                <a href='#'>
                                                    <i class='fa fa-times' aria-hidden='true'></i>
                                                </a>
                                            </li>";
                                }
                                ?>
                            </ul>

                            <div class="clearfix"></div>
                        </div>

                        <div class="widget-heading" style="border-bottom:none">
                            <span class="text-title">
                                Sắp xếp theo:
                            </span>

                            <div class="d-inline-block mx-1">
                                <select class="form-control" id="product_sort" style="height:100%;">
                                    <option value="newest" selected>Mới nhất</option>
                                    <option value="rating">Đánh giá</option>
                                </select>
                            </div>

                            <div class="d-inline-block mx-1">
                                <select class="form-control" id="nums_product" style="height:100%;">
                                    <option value="6" selected>6 sản phẩm</option>
                                    <option value="12">12 sản phẩm</option>
                                    <option value="24">24 sản phẩm</option>
                                </select>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- End Filter and Select -->

                    <!-- Product List -->
                    <ul class="row product-list"></ul>
                    <!-- End Product List -->

                    <!-- Pages -->
                    <div class="pages mb-1" id="pages"></div>
                    <!-- End Pages -->
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <!-- start: FOOTER -->
        <?php require_once "./footer.php" ?>
        <!-- end:Footer -->
    </div>


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
    <script src="js/pagination.js"></script>
    <script src="js/category.js"></script>

</body>

</html>