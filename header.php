<?php
include("connection/connect.php");
error_reporting(0);
session_start();
?>
<!--header starts-->
<header id="header" class="header-scroll top-header headrom">
    <!-- .navbar -->
    <nav class="navbar navbar-dark">
        <div class="container">
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
            <a class="navbar-brand" href="index.php">
                <h5 style="color:whitesmoke; font-family: Brush Script MT,cursive;">Kết nối tri thức Việt</h5>
            </a>
            <!-- .Search nvar -->
            <div style="display:inline">
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-sm" id="exampleInputAmount" placeholder="Bạn muốn tìm kiếm sách gì?...">
                </div>
                <button onclick="location.href='restaurants.html'" type="button" class="btn theme-btn btn-sm">Tìm kiếm</button>
            </div>
            <!-- end Search nvar-->
            <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item"> <a class="nav-link active" href="index.php">Trang chủ <span class="sr-only">(current)</span></a> </li>
                    <li class="nav-item"> <a class="nav-link active" href="category.php">Kho sách<span class="sr-only"></span></a> </li>
                    <?php
                    if (empty($_SESSION["user_id"])) // if user is not login
                    {
                        echo '<li class="nav-item"><a href="login.php" class="nav-link active">Đăng nhập</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Đăng ký tài khoản</a> </li>';
                    } else {
                        //if user is login

                        echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Giỏ hàng </a> </li>';
                        echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Đăng xuất</a> </li>';
                    }

                    ?>

                </ul>

            </div>
        </div>
    </nav>
    <!-- /.navbar -->
</header>