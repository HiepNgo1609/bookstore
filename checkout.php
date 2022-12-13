<!DOCTYPE html>
<html lang="en">
<?php
include("./connection/connect.php");
error_reporting(0);

if (empty($_COOKIE['user_id'])) {
  header('location:login.php');
}

?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="16x16" href="./admin/images/favicon1.png">

  <title>Thanh toán</title>
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animsition.min.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/checkout.css" rel="stylesheet">
</head>

<body>
  <!-- Header Start -->
  <?php require_once "./header.php" ?>
  <!-- Header End -->

  <div class="page-wrapper">
    <div class="container">
      <div class="row">
        <div class="card delivery_info my-2">
          <h5 class="card-title">Thông Tin Giao Hàng</h5>
          <hr class="dash">
          <div class="card-body">
            <form action="">
              <div class="form-group row">
                <label for="fullName" class="col-sm-3 col-form-label">Họ và Tên</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="fullName" disabled>
                </div>
              </div>
              <div class="form-group row">
                <label for="phone" class="col-sm-3 col-form-label">Số Điện Thoại</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="phone" disabled>
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="email" disabled>
                </div>
              </div>
              <div class="form-group row">
                <label for="address" class="col-sm-3 col-form-label">Địa Chỉ</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="address">
                  <small class="red-color" id="notification"></small>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="card delivery_info my-2">
          <h5 class="card-title">Phương Thức Thanh Toán</h5>
          <hr class="dash">
          <div class="form-check">
            <form action="" class="form-group">
              <input class="form-check-input ml-0" type="radio" name="exampleRadios" id="payment" value="COD" checked>
              <label class="form-check-label ml-1" for="exampleRadios1">
                <img src="https://cdn0.fahasa.com/skin/frontend/base/default/images/payment_icon/ico_cashondelivery.svg?q=101737" alt="COD">
                <span>Thanh toán bằng tiền mặt khi nhận hàng</span>
              </label>
            </form>
          </div>
        </div>
        <div class="card delivery_info my-2 desktop">
          <h5 class="card-title">Danh Sách Sản Phẩm</h5>
          <hr class="dash">
          <div class="card-body">
            <div class="row product_list_title">
              <div class="col-sm-2 col-md-1 ml-5">
                <strong class="ml-2">#</strong>
              </div>
              <div class="col-sm-4 col-md-5">
                <strong>Thông tin sản phẩm</strong>
              </div>
              <div class="col-sm-2 col-md-2">
                <strong class="ml-2">Đơn giá</strong>
              </div>
              <div class="col-sm-2 col-md-2">
                <strong class="ml-2">Số lượng</strong>
              </div>
              <div class="col-sm-2 col-md-2">
                <strong>Thành tiền</strong>
              </div>
            </div>
            <div class="product_list">

              <!-- <div class="row">
                <div class="col-sm-2 col-md-1 my-3">
                  <strong class="ml-2">1</strong>
                </div>
                <div class="col-sm-4 col-md-4">
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
                  <strong class="ml-1 red-color">53.500VND</strong>
                </div>
                <div class="col-sm-2 col-md-3 my-3">
                  <strong class="ml-3">1</strong>
                </div>
                <div class="col-sm-2 col-md-2 my-3">
                  <strong class="red-color">53.500VND</strong>
                </div>
              </div> -->
            </div>
            <hr class="dash mb-2">
            <div class="summary ">
              <!-- <div class="row ">
                <div class="col-sm-10">
                  <h5 class="summary-title">Tạm tính</h5>
                </div>
                <div class="col-sm-2">
                  <h4 class="red-color">53,000 VND</h4>
                </div>
              </div>
              <div class="row ">
                <div class="col-sm-10">
                  <h5 class="summary-title">Chiết khấu</h5>
                </div>
                <div class="col-sm-2">
                  <h4>0</h4>
                </div>
              </div>
              <div class="row ">
                <div class="col-sm-10">
                  <h5 class="summary-title">TỔNG</h5>
                </div>
                <div class="col-sm-2">
                  <h4 class="red-color">53,000 VND</h4>
                </div>
              </div> -->
            </div>

          </div>
        </div>
        <div class="card my-2 mobile">
          <div class="mobile_product_list">
            
          </div>
          <hr class="dash mb-2">
          <div class="mobile_summary">
            
          </div>
        </div>
        <div class="card p-2">
          <div class="direction">
            <div class="row">
              <div class="col-sm-3 col-md-5 col-xs-6">
                <a href="cart.php" class="back_link">
                  &#171; Quay lại giỏ hàng
                </a>
              </div>
              <div class="col-sm-6 col-md-2"></div>
              <div class="col-sm-3 col-md-5 col-xs-6">
                <button type="button" class="btn checkout_btn">THANH TOÁN</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
  <script src="js/checkout.js"></script>
</body>

</html>