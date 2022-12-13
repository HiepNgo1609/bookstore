<?php
include("connection/connect.php");
error_reporting(0);
session_start();

?>
<!--header starts-->
<header id="header" class="header-scroll top-header headrom">
    <!-- .navbar -->
    <nav class="navbar navbar-dark" style="display:inline">
        <div class="container">
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse"
                data-target="#mainNavbarCollapse">&#9776;</button>
            <a class="navbar-brand" href="index.php">
                <h5 style="color:whitesmoke; font-family: Brush Script MT,cursive;">Kết nối tri thức Việt</h5>
            </a>
            <!-- .Search nvar -->
            <div style="display:inline">
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-sm" id="search-input"
                        placeholder="Bạn muốn tìm kiếm sách gì?..." list="search-list">
                    <datalist id="search-list">
                    </datalist>
                </div>
                <button onclick="location.href='restaurants.html'" type="button" class="btn theme-btn btn-sm">Tìm
                    kiếm</button>
            </div>
            <!-- end Search nvar-->
            <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse" style="display:inline">
                <ul class="nav navbar-nav">
                <div class="icon_cart_white" style="margin-right: 4px;">
		   
		        </div>
                    <li class="nav-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true" style="scale:110%; color: white; padding-right:10px">
                    <span> Trang chủ</span></i></a>
                    </li>
                    <li class="nav-item"> <a style="color: white" class="has-arrow" href="category.php" aria-expanded="false"><i class="fa fa-book" aria-hidden="true"></i><span class="hide-menu"> Thư viện sách</span></a></li>
                    <?php
                    if (empty($_SESSION['username'])) // if user is not login
                    {
                        echo '<li class="nav-item"><a style="color: white; margin-top:-9.5%"  href="login.php" class="nav-link active">Đăng nhập</a> </li>
							  <li class="nav-item"><a style="color: white; margin-top:-5.5%" "  href="registration.php" class="nav-link active"> Đăng ký tài khoản</a> </li>';
                        
                    } else {
                        //if user is login
                       
                        echo  '<li class="nav-item"><a style="color: white" class="has-arrow  "href="cart.php" aria-expanded="false"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="hide-menu"> Giỏ hàng</span> </li>';
                        echo '<li class="nav-item dropdown" style="font-weight: 600; font-style: italic; margin-top: -1.2%">
                        <a style="color: red" class="nav-link dropdown-toggle" data-toggle="dropdown" href="infoUser.php" aria-expanded="false"><span><i class="fa fa-user f-s-20 "></i></span><span class="hide-menu">  Xin chào '.$_SESSION['username'].' !</span></a>
                         
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="infoUser.php">Thông tin cá nhân</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="logout.php">Đăng xuất</a>
                        </div>
                      </li>';
                    }

                    ?>
                  

                </ul>
                
            </div>
        </div>
    </nav>
    <!-- /.navbar -->
</header>