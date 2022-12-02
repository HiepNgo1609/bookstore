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
    <link href="./product.css" rel="stylesheet">
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

        <div class="product">
            <!-- Breakcrumb -->
            <nav class="container" aria-label="breadcrumb">
                <ol class="row breadcrumb">
                    <li class="d-inline-block breadcrumb-item">
                        <a href="#" class="link-item">FOREIGN BOOKS</a>
                    </li>
                    <li class="d-inline-block breadcrumb-item">
                        <a href="#" class="link-item">PERSONAL DEVELOPMENT</a>
                    </li>
                    <li class="d-inline-block breadcrumb-item" aria-current="page">
                        <a href="#" class="link-item">POPULAR PSYCHOLOGY</a>
                    </li>
                </ol>
            </nav>
            <!-- End Breakcrumb -->

            <!-- Product Information -->
            <div class="container card">
                <div class="product__information">
                    <div class="row">
                        <!-- Product Image -->
                        <div class="col-xs-5">
                            <div class="product-img__block">
                                <img src="./images/logoBook.png" alt="" class="product-img">
                            </div>

                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="btn border-primary" style="width:100%;">
                                        <i class="fa fa-shopping-cart mr-1" aria-hidden="true"></i>
                                        Thêm vào giỏ hàng
                                    </a>
                                </div>

                                <div class="col-xs-6">
                                    <a href="order.php" class="btn bg-primary-color btn-primary border-primary text-secondary-color" style="width:100%;">
                                        Mua ngay
                                    </a>
                                </div>
                            </div>

                        </div>
                        <!-- End Product Image -->

                        <!-- Product Description -->
                        <div class="col-xs-7">
                            <div class="product__description">
                                <h2 class="product__name">
                                    Nhà Giả Kim (Tái Bản 2020)
                                </h2>

                                <!-- Product Attribute -->
                                <div class="product__list">
                                    <div class="row">
                                        <h5 class="product__publisher product__list-item col-xs-6">
                                            <span style="margin-right: 8px">Nhà cung cấp: </span>
                                            <a href="#">Nhã Nam</a>
                                        </h5>

                                        <h5 class="product__author product__list-item col-xs-6">
                                            <span style="margin-right: 8px">Tác giả: </span>
                                            Paulo Coelho
                                        </h5>

                                        <h5 class="product__cover product__list-item col-xs-6">
                                            <span style="margin-right: 8px">Hình thức bìa: </span>
                                            Bìa Mềm
                                        </h5>
                                    </div>
                                </div>

                                <!-- End Product Attribute -->

                                <!-- Price -->
                                <div class="price mb-1">
                                    <span class="current-price">
                                        55.000 đ
                                    </span>

                                    <span class="original-price line-through">
                                        79.000
                                    </span>

                                    <span class="discount">
                                        -30%
                                    </span>
                                </div>
                                <!-- End Price -->

                                <!-- Rating -->
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
                                <!-- End Rating -->

                                <!-- Quantity -->
                                <div class="quantity_container">
                                    <span>Số lượng: </span>

                                    <div class="quantity-control">
                                        <a href="#" class="d-inline-block px-1" id="subQty" onclick="subQty()">-</a>
                                        <input type="text" minvalue="1" maxvalue="999" value="1" class="quantity" id="Qty" onkeypress="validateNumber(event)">
                                        <a href="#" class="d-inline-block px-1" id="plusQty" onclick="plusQty()">+</a>
                                    </div>
                                </div>
                                <!-- End Quantity -->

                            </div>
                        </div>
                        <!-- End Product Description -->
                    </div>
                </div>
            </div>
            <!-- End Product Information -->

            <!-- Recommand & Relation -->
            <!-- Relation -->
            <div class="container card">
                <div class="relation">
                    <div class="top-links pb-0">
                        <h5>Cùng tác giả</h5>
                    </div>

                    <ul class="row product-list">
                        <a href="">
                            <li class="col-xs-3">
                                <div class="list-item">
                                    <img src="images/logoBook.png" alt="" class="list-item-img">
                                    <div class="list-item-description">
                                        <h5 class="list-item-name">
                                            Combo Sách Nhà Giả Kim + Hành Trình Về Phương Đông (Bộ 2 Cuốn)
                                        </h5>

                                        <div class="price">
                                            <span class="current-price">130.000 đ</span>
                                            <span class="original-price line-through">130.000 đ</span>

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

                        <a href="">
                            <li class="col-xs-3">
                                <div class="list-item">
                                    <img src="images/logoBook.png" alt="" class="list-item-img">
                                    <div class="list-item-description">
                                        <h5 class="list-item-name">
                                            Combo Sách Nhà Giả Kim + Hành Trình Về Phương Đông (Bộ 2 Cuốn)
                                        </h5>

                                        <div class="price">
                                            <span class="current-price">130.000 đ</span>
                                            <span class="original-price line-through">130.000 đ</span>

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

                        <a href="">
                            <li class="col-xs-3">
                                <div class="list-item">
                                    <img src="images/logoBook.png" alt="" class="list-item-img">
                                    <div class="list-item-description">
                                        <h5 class="list-item-name">
                                            Combo Sách Nhà Giả Kim + Hành Trình Về Phương Đông (Bộ 2 Cuốn)
                                        </h5>

                                        <div class="price">
                                            <span class="current-price">130.000 đ</span>
                                            <span class="original-price line-through">130.000 đ</span>

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

                        <a href="">
                            <li class="col-xs-3">
                                <div class="list-item">
                                    <img src="images/logoBook.png" alt="" class="list-item-img">
                                    <div class="list-item-description">
                                        <h5 class="list-item-name">
                                            Combo Sách Nhà Giả Kim + Hành Trình Về Phương Đông (Bộ 2 Cuốn)
                                        </h5>

                                        <div class="price">
                                            <span class="current-price">130.000 đ</span>
                                            <span class="original-price line-through">130.000 đ</span>

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
                    </ul>
                </div>
            </div>
            <!-- End Relation -->

            <!-- Recommand -->
            <div class="container card">
                <div class="recommand">
                    <div class="top-links pb-0">
                        <h5>BOOKSTORE GIỚI THIỆU</h5>
                    </div>

                    <ul class="row product-list">
                        <a href="">
                            <li class="col-xs-3">
                                <div class="list-item">
                                    <img src="images/logoBook.png" alt="" class="list-item-img">
                                    <div class="list-item-description">
                                        <h5 class="list-item-name">
                                            Combo Sách Nhà Giả Kim + Hành Trình Về Phương Đông (Bộ 2 Cuốn)
                                        </h5>

                                        <div class="price">
                                            <span class="current-price">130.000 đ</span>
                                            <span class="original-price line-through">130.000 đ</span>

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

                        <a href="">
                            <li class="col-xs-3">
                                <div class="list-item">
                                    <img src="images/logoBook.png" alt="" class="list-item-img">
                                    <div class="list-item-description">
                                        <h5 class="list-item-name">
                                            Combo Sách Nhà Giả Kim + Hành Trình Về Phương Đông (Bộ 2 Cuốn)
                                        </h5>

                                        <div class="price">
                                            <span class="current-price">130.000 đ</span>
                                            <span class="original-price line-through">130.000 đ</span>

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

                        <a href="">
                            <li class="col-xs-3">
                                <div class="list-item">
                                    <img src="images/logoBook.png" alt="" class="list-item-img">
                                    <div class="list-item-description">
                                        <h5 class="list-item-name">
                                            Combo Sách Nhà Giả Kim + Hành Trình Về Phương Đông (Bộ 2 Cuốn)
                                        </h5>

                                        <div class="price">
                                            <span class="current-price">130.000 đ</span>
                                            <span class="original-price line-through">130.000 đ</span>

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

                        <a href="">
                            <li class="col-xs-3">
                                <div class="list-item">
                                    <img src="images/logoBook.png" alt="" class="list-item-img">
                                    <div class="list-item-description">
                                        <h5 class="list-item-name">
                                            Combo Sách Nhà Giả Kim + Hành Trình Về Phương Đông (Bộ 2 Cuốn)
                                        </h5>

                                        <div class="price">
                                            <span class="current-price">130.000 đ</span>
                                            <span class="original-price line-through">130.000 đ</span>

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
                    </ul>
                </div>
            </div>
            <!-- End Recommand -->


            <!-- Product Detail Information -->
            <div class="container card">
                <div class="product__detail-information">
                    <h4 class="title">Thông tin sản phẩm</h4>

                    <div class="product__detail-view">
                        <table class="product__detail-table">
                            <tbody>
                                <tr>
                                    <td>Mã hàng</td>
                                    <td>12345567894198</td>
                                </tr>
                                <tr>
                                    <td>Tên Nhà Cung Cấp</td>
                                    <td>
                                        <a href="#">Nhã Nam</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tác giả</td>
                                    <td>Paulo Coelho</td>
                                </tr>
                                <tr>
                                    <td>Người Dịch</td>
                                    <td>Lê Chu Cầu</td>
                                </tr>
                                <tr>
                                    <td>NXB</td>
                                    <td>NXB Hội Nhà Văn</td>
                                </tr>
                                <tr>
                                    <td>Năm XB</td>
                                    <td>2020</td>
                                </tr>
                                <tr>
                                    <td>Trọng lượng (gr)</td>
                                    <td>220</td>
                                </tr>
                                <tr>
                                    <td>Kích Thước Bao Bì</td>
                                    <td>20.5 x 13 cm</td>
                                </tr>
                                <tr>
                                    <td>Số trang</td>
                                    <td>227</td>
                                </tr>
                                <tr>
                                    <td>Hình thức</td>
                                    <td>Bìa Mềm</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- End Product Detail Information -->


            <!-- Begin Rate and Comment -->
            <div class="container card">
                <div class="comment">
                    <h4 class="title">Đánh giá sản phẩm</h4>

                    <div class="row ratings__container">
                        <div class="ratings__block col-xs-2">
                            <div class="ratings-point">
                                <span class="current-point">4.9</span>
                                <span>/</span>
                                <span class="max-point">5</span>
                            </div>

                            <div class="ratings mb-1">
                                <a href="#">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </a>
                            </div>

                            <span>(110 đánh giá)</span>

                        </div>

                        <div class="ratings-bar col-xs-4">
                            <div class="row">
                                <div class="col">
                                    <span>5 sao</span>
                                    <div class="bar"></div>
                                    <span>0%</span>
                                </div>
                                <div class="col">
                                    <span>4 sao</span>
                                    <div class="bar"></div>
                                    <span>0%</span>
                                </div>
                                <div class="col">
                                    <span>3 sao</span>
                                    <div class="bar"></div>
                                    <span>0%</span>
                                </div>
                                <div class="col">
                                    <span>2 sao</span>
                                    <div class="bar"></div>
                                    <span>0%</span>
                                </div>
                                <div class="col">
                                    <span>1 sao</span>
                                    <div class="bar"></div>
                                    <span>0%</span>
                                </div>
                            </div>
                        </div>

                        <div class="comment-rule col-xs-6">
                            <span>
                                Chỉ có thành viên mới có thể viết nhận xét. Vui lòng <a href="login.php">đăng nhập</a> hoặc <a href="registration.php">đăng ký</a>.
                            </span>
                        </div>
                    </div>


                    <div class="top-links pb-0">
                        <ul class="row links">
                            <li class="link-item d-inline-block px-2">
                                <a href="#" style="font-size:1.2rem;">Mới nhất</a>
                            </li>
                            <li class="link-item active d-inline-block px-2">
                                <a href="#" style="font-size:1.2rem;">Yêu thích nhất</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Comment -->
                    <div class="comment-list">
                        <div class="comment-block">
                            <div class="row">
                                <div class="col-xs-2">
                                    <div class="name">Name</div>
                                    <div class="comment-date">24/11/2022</div>
                                </div>
                                <div class="col-xs-10">
                                    <div class="ratings mb-1">
                                        <a href="#">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </a>
                                    </div>

                                    <div class="comment">
                                        Một trong những tác phẩm kinh điển, bestseller nên đọc. Sách kể về câu chuyện của một cậu bé chăn cừu trên con đường đi tìm kiếm kho báu khổng lồ. Câu chuyện đem đến cho bản thân em nhiều suy nghĩ và liên tưởng về cuộc sống này. Con đường cậu đi, những ngôi làng, những sa mạc, những con người cùng những cuộc gặp gỡ. Cuộc sống chính được tạo nên từ những điều như thế. Trong hành trình tiến về phía trước luôn có những khó khăn, vất vả, những mất mát hay cả những thất bại. Nhưng chúng ta nhất định phải bản lĩnh và kiên cường. Tuyệt đối không bị gục ngã trước nghịch cảnh. Và định nghĩa về những điều quý giá, chúng vẫn luôn hiện hữu xung quanh chúng ta, là tình thân, tình bạn, tình yêu,...
                                    </div>

                                    <div class="like-report-block">
                                        <div class="like-block d-inline-block mr-1">
                                            <a href="#">
                                                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                                <span>Thích </span>
                                                <span>(12)</span>
                                            </a>
                                        </div>

                                        <div class="report-block d-inline-block mr-1">
                                            <a href="#">
                                                <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                                <span>Báo cáo</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="comment-block">
                            <div class="row">
                                <div class="col-xs-2">
                                    <div class="name">Name</div>
                                    <div class="comment-date">24/11/2022</div>
                                </div>
                                <div class="col-xs-10">
                                    <div class="ratings mb-1">
                                        <a href="#">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </a>
                                    </div>

                                    <div class="comment">
                                        Một trong những tác phẩm kinh điển, bestseller nên đọc. Sách kể về câu chuyện của một cậu bé chăn cừu trên con đường đi tìm kiếm kho báu khổng lồ. Câu chuyện đem đến cho bản thân em nhiều suy nghĩ và liên tưởng về cuộc sống này. Con đường cậu đi, những ngôi làng, những sa mạc, những con người cùng những cuộc gặp gỡ. Cuộc sống chính được tạo nên từ những điều như thế. Trong hành trình tiến về phía trước luôn có những khó khăn, vất vả, những mất mát hay cả những thất bại. Nhưng chúng ta nhất định phải bản lĩnh và kiên cường. Tuyệt đối không bị gục ngã trước nghịch cảnh. Và định nghĩa về những điều quý giá, chúng vẫn luôn hiện hữu xung quanh chúng ta, là tình thân, tình bạn, tình yêu,...
                                    </div>

                                    <div class="like-report-block my-1">
                                        <div class="like-block d-inline-block mr-1">
                                            <a href="#">
                                                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                                <span>Thích </span>
                                                <span>(12)</span>
                                            </a>
                                        </div>

                                        <div class="report-block d-inline-block mr-1">
                                            <a href="#">
                                                <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                                <span>Báo cáo</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="pages">
                            <a href="" class="btn bg-primary-color current-page">1</a>
                            <a href="" class="btn">2</a>
                            <a href="" class="btn">3</a>
                            <a href="" class="btn">4</a>
                            <a href="" class="btn"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <!-- End Comment -->
                </div>
            </div>

            <!-- End Rate and Comment -->

        </div>
        <!-- End Product -->

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
    <script src="js/product.js"></script>
</body>

</html>