<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="./admin/images/favicon1.png">
    <title>Giỏ hàng</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/cart.css">
</head>

<body>
    <!-- Header Start -->
    <?php require_once "./header.php" ?>
    <!-- Header End -->
    <div class="page-wrapper">
        <!-- <div class="container">
            <div class="row ">
                <div class="card cart">
                    <h4 class="card-title">Giỏ hàng (0) sản phẩm</h4>
                    <div class="card-body cart-body">
                        <img src="https://cdn0.fahasa.com/skin//frontend/ma_vanese/fahasa/images/checkout_cart/ico_emptycart.svg" alt="Giỏ hàng trống">
                        <p>Chưa có sản phẩm nào trong giỏ hàng của bạn.</p>
                        <button class="btn shopping_btn">Mua Sắm Ngay</button>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="container">
            <h3 style="margin-top: 30px;">Giỏ hàng (1) sản phẩm</h3>
            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body" style="padding: 20px;">
                            <div class="row">
                                <div class="col-sm-1 col-md-1 ml-5">
                                    <strong>STT</strong>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <strong>Thông tin sản phẩm</strong>
                                </div>
                                <div class="col-sm-2 col-md-2">
                                    <strong>Đơn giá</strong>
                                </div>
                                <div class="col-sm-2 col-md-3">
                                    <strong>Số lượng</strong>
                                </div>
                            </div>

                            <div class="orderItemList" style="margin-top: 25px;">
                                <div class="row my-1 order_item">
                                    <div class="col-sm-1 col-md-1 my-3">
                                        <span>1</span>
                                    </div>
                                    <div class="col-sm-6 col-md-6 my-1">
                                        <div class="row">
                                            <div class="col-sm-4 ">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product//i/m/image_195509_1_36793.jpg" alt="" style="width: 120%;">

                                            </div>
                                            <div class="col-sm-8 item_info">
                                                <h4>Nhà Giả Kim</h4>
                                                <p><strong>Author:</strong> Paulo Coelho</p>
                                                <p><strong>NXB:</strong> NXB Hội Nhà Văn</p>
                                                <p><strong>Code:</strong> 188236712</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-2 col-md-2 my-3">
                                        <h5 class="item_price">53.500VND</h5>
                                    </div>
                                    <div class="col-sm-2 col-md-3">
                                        <input data-id="" data-uprice="" type="number" class="form-control qty" style="width: 50%; margin-top: 40px;" value="1" min="0">
                                        <a href="#" class="remove_item">

                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body" style="padding: 20px;">
                            <div class="row">
                                <div class="col-sm-5">
                                    <label for="discount_code" class="col-form-label">Khuyến mãi: </label>
                                </div>
                                <div class="col-sm-7">
                                    <input class="form-control" type="text" id="discount_code">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label for="#">Thành tiền:</label>
                                </div>
                                <div class="col-sm-7" style="text-align: end;">
                                    <span>53,500 VND</span>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <hr class="dash">
                                <div class="col-sm-7">
                                    <h4>Tổng Số Tiền (VAT): </h4>
                                </div>
                                <div class="col-sm-5" style="text-align: end;">
                                    <strong class="invoice">53,500 VND</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- <div class="page-wrapper">
        
    </div> -->
    <!-- Footer Start -->
    <?php require_once "./footer.php" ?>
    <!-- Footer End -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
    <script src="js/cart.js"></script>
</body>

</html>