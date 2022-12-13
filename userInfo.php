<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php"); //include connection file
error_reporting(0); // using to hide undefine undex errors

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="admin/images/favicon1.png">
    <title>Thông tin cá nhân</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/userInfo.css">
</head>

<body class="home">

    <!--header starts-->
    <?php require_once "./header.php" ?>


    <div class="page-wrapper ">
        <div class="container">
            <div class="row">
                <div class="card user_info mt-4 pt-4 p-1">
                    <h5 class="card-title">Thông Tin Cá Nhân</h5>
                    <hr class="dash">
                    <div class="card-body">
                        <form action="">
                            <div class="form-group row">
                                <label for="firstname" class="col-sm-3 col-form-label">Họ và tên đệm</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="firstname">
                                    <small class="red-color" id="firstname_notification"></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastname" class="col-sm-3 col-form-label">Tên</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="lastname">
                                    <small class="red-color" id="lastname_notification"></small>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-sm-3 col-form-label">Tên đăng nhập</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="username" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-3 col-form-label">Số Điện Thoại</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="phone">
                                    <small class="red-color" id="phone_notification"></small>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email">
                                    <small class="red-color" id="email_notification"></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-3 col-form-label">Địa Chỉ</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="address">
                                    <small class="red-color" id="address_notification"></small>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <button type="button" class="btn btn-primary user_update_btn">Cập nhật</button>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="js/user.js"></script>
</body>

</html>