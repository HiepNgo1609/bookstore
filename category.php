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
    <link rel="icon" href="#">
    <title>Starter Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="./category.css" rel="stylesheet">
</head>

<body>
    <!--header starts-->
    <?php require_once "./header.php" ?>

    <div class="page-wrapper">
        <!-- top Links -->
        <div class="top-links">
            <div class="container">
                <ul class="row links">
                    <li class="col-xs-12 col-sm-4 link-item active"><span>1</span><a href="restaurants.php">Choose Book</a></li>
                    <li class="col-xs-12 col-sm-4 link-item"><span>2</span><a href="#">Check out</a></li>
                    <li class="col-xs-12 col-sm-4 link-item"><span>3</span><a href="#">Payment</a></li>
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
                <div class="p-1 col-sm-4 col-md-4 col-lg-3">
                    <div class="widget category">
                        <div class="widget-heading">
                            <h3 class="widget-title text-title">
                                Popular Book
                            </h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-body">
                            <ul class="tags">
                                <li>
                                    <a href="#" class="tag">
                                        Đắc nhân tâm
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tag">
                                        Nhà giả kim
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tag">
                                        Cà phê cùng Toni
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tag">
                                        Dạy con làm giàu
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tag">
                                        Những tấm lòng cao cả
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tag">
                                        Bố già
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Price -->
                    <div class="widget category">
                        <div class="widget-heading">
                            <h3 class="widget-title text-title">
                                Giá
                            </h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-body">
                            <ul class="tags">
                                <li>
                                    <a href="#" class="tag">
                                        Giá: 0 - 150.000
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tag">
                                        Giá: 150.000 - 300.000
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tag">
                                        Giá: 300.000 - 500.000
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tag">
                                        Giá: 500.000 - 700.000
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tag">
                                        Giá: 700.000 - Trở lên
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
                                GENRES
                            </h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-body">
                            <ul class="tags">
                                <li>
                                    <a href="#" class="tag">
                                        Comedy
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tag">
                                        Shounen
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tag">
                                        Adventure
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tag">
                                        Action
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tag">
                                        Drama
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tag">
                                        Slice Of Life
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Genres -->

                    <!-- Genres -->
                    <div class="widget category">
                        <div class="widget-heading">
                            <h3 class="widget-title text-title">
                                GENRES
                            </h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-body">
                            <ul class="tags">
                            </ul>
                        </div>
                    </div>
                    <!-- End Genres -->
                </div>

                <div class="p-1 col-sm-8 col-md-8 col-lg-9">
                    <!-- Filter and Select -->
                    <div class="widget clearfix">
                        <div class="widget-heading" style="display: flex;">
                            <span class="text-title mr-1">
                                Lọc theo:
                            </span>

                            <ul class="tags text-title">
                                <li class="tag">Comedy<a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                                <li class="tag">Action<a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                            </ul>

                            <div class="clearfix"></div>
                        </div>

                        <div class="widget-heading" style="border-bottom:none">
                            <span class="text-title">
                                Sắp xếp theo:
                            </span>

                            <div class="d-inline-block mx-1">
                                <select class="form-control" style="height:100%;">
                                    <option value="most-sale-week" selected>Bán chạy tuần</option>
                                    <option value="most-sale-month">Bán chạy tháng</option>
                                    <option value="most-sale-year">Bán chạy năm</option>
                                </select>
                            </div>

                            <div class="d-inline-block mx-1">
                                <select class="form-control" style="height:100%;">
                                    <option value="12" selected>12 sản phẩm</option>
                                    <option value="24">24 sản phẩm</option>
                                    <option value="48">48 sản phẩm</option>
                                </select>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- End Filter and Select -->




                    <!-- Product List -->
                    <ul class="row">
                        <!-- Product Item -->
                        <a href="#">
                            <li class="col-sm-6 col-md-6 col-lg-4">
                                <div class="list-item card" onclick="product.php">
                                    <img src="images/logoBook.png" alt="" class="list-item-img">
                                    <div class="list-item-description">
                                        <h5 class="list-item-name">
                                            Combo Sách Nhà Giả Kim + Hành Trình Về Phương Đông (Bộ 2 Cuốn)
                                        </h5>

                                        <div class="price">
                                            <span class="current-price">130.000 đ</span>
                                            <span class="original-price">130.000 đ</span>

                                        </div>

                                        <div class="ratings">
                                            <a href="#">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>(37)</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </a>
                        <!-- End Product Item -->

                        <!-- Product Item -->
                        <a href="#">
                            <li class="col-sm-6 col-md-6 col-lg-4">
                                <div class="list-item card">
                                    <img src="images/logoBook.png" alt="" class="list-item-img">
                                    <div class="list-item-description">
                                        <h5 class="list-item-name">
                                            Combo Sách Nhà Giả Kim + Hành Trình Về Phương Đông (Bộ 2 Cuốn)
                                        </h5>

                                        <div class="price">
                                            <span class="current-price">130.000 đ</span>
                                            <span class="original-price">130.000 đ</span>

                                        </div>

                                        <div class="ratings">
                                            <a href="#">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>(37)</span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </a>
                        <!-- End Product Item -->

                        <!-- Product Item -->
                        <a href="#">
                            <li class="col-sm-6 col-md-6 col-lg-4">
                                <div class="list-item card">
                                    <img src="images/logoBook.png" alt="" class="list-item-img">
                                    <div class="list-item-description">
                                        <h5 class="list-item-name">
                                            Combo Sách Nhà Giả Kim + Hành Trình Về Phương Đông (Bộ 2 Cuốn)
                                        </h5>

                                        <div class="price">
                                            <span class="current-price">130.000 đ</span>
                                            <span class="original-price">130.000 đ</span>

                                        </div>

                                        <div class="ratings">
                                            <a href="#">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>(37)</span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </a>
                        <!-- End Product Item -->

                        <!-- Product Item -->
                        <a href="#">
                            <li class="col-sm-6 col-md-6 col-lg-4">
                                <div class="list-item card">
                                    <img src="images/logoBook.png" alt="" class="list-item-img">
                                    <div class="list-item-description">
                                        <h5 class="list-item-name">
                                            Combo Sách Nhà Giả Kim + Hành Trình Về Phương Đông (Bộ 2 Cuốn)
                                        </h5>

                                        <div class="price">
                                            <span class="current-price">130.000 đ</span>
                                            <span class="original-price">130.000 đ</span>

                                        </div>

                                        <div class="ratings">
                                            <a href="#">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>(37)</span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </a>
                        <!-- End Product Item -->

                        <!-- Product Item -->
                        <a href="#">
                            <li class="col-sm-6 col-md-6 col-lg-4">
                                <div class="list-item card">
                                    <img src="images/logoBook.png" alt="" class="list-item-img">
                                    <div class="list-item-description">
                                        <h5 class="list-item-name">
                                            Combo Sách Nhà Giả Kim + Hành Trình Về Phương Đông (Bộ 2 Cuốn)
                                        </h5>

                                        <div class="price">
                                            <span class="current-price">130.000 đ</span>
                                            <span class="original-price">130.000 đ</span>

                                        </div>

                                        <div class="ratings">
                                            <a href="#">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>(37)</span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </a>
                        <!-- End Product Item -->

                        <!-- Product Item -->
                        <a href="#">
                            <li class="col-sm-6 col-md-6 col-lg-4">
                                <div class="list-item card">
                                    <img src="images/logoBook.png" alt="" class="list-item-img">
                                    <div class="list-item-description">
                                        <h5 class="list-item-name">
                                            Combo Sách Nhà Giả Kim + Hành Trình Về Phương Đông (Bộ 2 Cuốn)
                                        </h5>

                                        <div class="price">
                                            <span class="current-price">130.000 đ</span>
                                            <span class="original-price">130.000 đ</span>

                                        </div>

                                        <div class="ratings">
                                            <a href="#">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>(37)</span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </a>
                        <!-- End Product Item -->
                    </ul>
                    <!-- End Product List -->

                    <!-- Pages -->
                    <div class="pages mb-1">
                        <a href="" class="btn bg-primary-color current-page">1</a>
                        <a href="" class="btn">2</a>
                        <a href="" class="btn">3</a>
                        <a href="" class="btn">4</a>
                        <a href="" class="btn"><i class="fa fa-chevron-right"></i></a>
                    </div>
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
</body>

</html>