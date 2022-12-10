<!DOCTYPE html>
<html lang="en">
<?php

session_start(); //temp session
error_reporting(0); // hide undefine index
include("connection/connect.php"); // connection

   if(isset($_POST['check'])){
   $check_username1= mysqli_query($db, "SELECT username FROM users where username = '".$_POST['username']."' ");
      if(mysqli_num_rows($check_username1) > 0) //check username
      {
         $message = 'Tên đăng nhập đã tồn tại';
      }
      else {
         $success ='Tên đăng nhập hợp lệ';
      }
   }
   elseif(isset($_POST['submit'] )) //if submit btn is pressed
   {
         
      }
     if(  //fetching and find if its empty
            empty($_POST['username'])|| 
            empty($_POST['firstname'])|| 
   	      empty($_POST['lastname'])|| 
            empty($_POST['email']) ||  
            empty($_POST['phone_number'])||
            empty($_POST['password'])||
            empty($_POST['cpassword']) ||
            empty($_POST['cpassword']))
		{
			//$message = "Bạn phải điền vào tất cả các ô!";
		}
	else
	{
		//cheching username & email if already present
	//$check_username= mysqli_query($db, "SELECT username FROM users where username = '".$_POST['username']."' ");
	$check_email = mysqli_query($db, "SELECT email FROM users where email = '".$_POST['email']."' ");

	if($_POST['password'] != $_POST['cpassword']){  //matching passwords
       	$message = "Mật khẩu không đúng! Vui lòng nhập lại mật khẩu";
    }
	elseif(strlen($_POST['password']) < 6)  //cal password length
	{
		$message = "Mật khẩu phải nhiều hơn 5 ký tự";
	}
	elseif(strlen($_POST['phone_number']) != 10)  //cal phone length
	{
		$message = "Số điện thoại không hợp lệ";
	}

    elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) // Validate email address
    {
       	$message = "Địa chỉ email không hợp lệ";
    }
	  /* elseif(mysqli_num_rows($check_username) > 0)  //check username
     {
    	$message = 'Tên đăng nhập đã tồn tại';
     }*/
	elseif(mysqli_num_rows($check_email) > 0) //check email
     {
    	$message = 'Địa chỉ email đã tồn tại';
     }
	else{
       
	 //inserting values into db
	$mql = "INSERT INTO users(username,firstname,lastname,email,phone_number,password,address,role) 
   VALUES('".$_POST['username']."','".$_POST['firstname']."','".$_POST['lastname']."',
   '".$_POST['email']."','".$_POST['phone_number']."','".md5($_POST['password'])."','".$_POST['address']."','customer')";
	mysqli_query($db, $mql);
		$success = "Tài khoản được tạo thành công! <p>Quay trở lại trang Đăng nhập sau <span id='counter'>5</span> giây.</p>
														<script type='text/javascript'>
														function countdown() {
															var i = document.getElementById('counter');
															if (parseInt(i.innerHTML)<=0) {
																location.href = 'login.php';
															}
															i.innerHTML = parseInt(i.innerHTML)-1;
														}
														setInterval(function(){ countdown(); },1000);
														</script>'";
		
		
		
		
		 header("refresh:5;url=login.php"); // redireted once inserted success
    }
	}


?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" type="image/png" sizes="16x16" href="admin/images/favicon1.png">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Đăng ký tài khoản</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>
<body>
     
         <!--header starts-->
         <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">

               <div class="container">
               <a class="navbar-brand" href="login.php"> <h5 style="color:whitesmoke; font-family: Brush Script MT,cursive;">Kết nối tri thức Việt</h5> </a>

                  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                  <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/food-picky-logo.png" alt=""> </a>
                  <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                     <ul class="nav navbar-nav">
							
							<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Đăng nhập</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Đăng ký tài khoản</a> </li>';
							}
						else
							{

									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Đơn hàng của bạn</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Đăng xuất</a> </li>';
							}

						?>
							 
                        </ul>
                  </div>
               </div>
            </nav>
            <!-- /.navbar -->
         </header>
         <div class="page-wrapper">
            <div class="breadcrumb">
               <div class="container">
                  <ul>
                     <li><a href="#" class="active">
					 
					   
					</a></li>
                    
                  </ul>
               </div>
            </div>
            <section class="contact-page inner-page">
               <div class="container">
                  <div class="row">
                     <!-- REGISTER -->
                     <div class="col-md-9">
                        <div class="widget">
                           <div class="widget-body">
                              
							  <form action="" method="post">
                           <div class="row">
								      <div class="form-group col-sm-12">
                                       <label for="exampleInputEmail1">Tên đăng nhập</label>
                                       <input value="<?php echo $_POST['username'] ?>" class="form-control" type="text" name="username" id="example-text-input" placeholder="Nhập tên đăng nhập"> 
                                       <span style="color: blue; font-weight:600"><?php echo $success?></span>
                                       <span style="color: red; font-weight:600"><?php echo $message?></span>
                                 </div>
                                 
                                    <div class="form-group col-sm-12">
                                          <p> <input type="submit" name="check" value="Kiểm tra" class="btn theme-btn"></input>
                                    </div>

                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Họ và tên lót</label>
                                       <input value="<?php echo $_POST['firstname'] ?>" class="form-control" type="text" name="firstname" id="example-text-input" placeholder="Nhập họ và tên lót"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Tên</label>
                                       <input value="<?php echo $_POST['lastname'] ?>" class="form-control" type="text" name="lastname" id="example-text-input-2" placeholder="Nhập tên"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Địa chỉ Email</label>
                                       <input value="<?php echo $_POST['email'] ?>" type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập địa chỉ email"> <small id="emailHelp" class="form-text text-muted">Chúng tôi cam kết không chia sẻ email cho bất cứ cá nhân, tổ chức nào khác.</small> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Số điện thoại</label>
                                       <input value="<?php echo $_POST['phone_number'] ?>" class="form-control" type="text" name="phone_number" id="example-tel-input-3" placeholder="Nhập số điện thoại"> <small class="form-text text-muted">Chúng tôi cam kết không chia sẻ số điện thoại cho bất cứ cá nhân, tổ chức nào khác.</small> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1">Mật khẩu</label>
                                       <input value="<?php echo $_POST['password'] ?>" type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Nhập mật khẩu"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1">Nhập lại mật khẩu</label>
                                       <input value="<?php echo $_POST['cpassword'] ?>" type="password" class="form-control" name="cpassword" id="exampleInputPassword2" placeholder="Nhập mật khẩu"> 
                                    </div>
									 <div class="form-group col-sm-12">
                                       <label for="exampleTextarea">Địa chỉ</label>
                                       <textarea class="form-control" id="exampleTextarea"  name="address" rows="3"></textarea>
                                    </div>
                                   
                                 </div>
                                
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <p> <input type="submit" value="Đăng ký" name="submit" class="btn theme-btn"> </p>
                                    </div>
                                 </div>
                              </form>
                           
						   </div>
                           <!-- end: Widget -->
                        </div>
                        <!-- /REGISTER -->
                     </div>
                     <!-- WHY? -->
                     <div class="col-md-3">
                        <h4 style="font-family: 'Dancing Script' cursive;font-weight:600;color:darkturquoise">Hãy đến với chúng tôi để có những trải nghiệm tuyệt vời</h4>
                        <p style="font-style:italic">Đăng ký tài khoản nhanh chóng và hoàn toàn miễn phí</p>
                        <hr>
                        <img src="http://placehold.it/400x300" alt="" class="img-fluid">
                        <p></p>
                       
                        <!-- end:panel -->
                        
                        <!-- end:Panel -->
                        
                        <h4 class="m-t-20">Dịch vụ hỗ trợ khách hàng</h4>
                        <p> Liên hệ với chúng tối nếu bạn cần sự tư vấn và giúp đỡ.</p>
                        <p style="color: red; font-size:medium; font-weight:600">Hotline: 1800.9869</p>
                     </div>
                     <!-- /WHY? -->
                  </div>
               </div>
            </section>
            
            <!-- start: FOOTER -->
            <footer class="footer" style="background-image:url('images/footer-bg.png')">
            <div class="container">
                <!-- top footer statrs -->
                <div class="row top-footer">
                    <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                    <span style="font-family: Brush Script MT,cursive; font-size:large; color:red">Kết nối tri thức Việt</span> 
                    </div>
                    <div class="col-xs-12 col-sm-3 about color-white">
                        <h5>Dịch vụ</h5>
                        <ul>
                            <li><a href="#">Điều khoản sử dụng</a> </li>
                            <li><a href="#">Chính sách bảo mật thông tin cá nhân</a> </li>
                            <li><a href="#">Chính sách bảo mật thanh toán</a> </li>
                            <li><a href="#">Giới thiệu BookStore</a> </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-3 how-it-works-links color-white">
                        <h5>Hỗ trợ</h5>
                        <ul>
                            <li><a href="#">Chính sách đổi-trả-hoàn tiền</a> </li>
                            <li><a href="#">Chính sách bảo hành-bồi hoàn</a> </li>
                            <li><a href="#">Chính sách vận chuyển</a> </li>
                            <li><a href="#">Chính sách khách sỉ</a> </li>
                            <li><a href="#">Phương thức thanh toán và xuất hóa đơn</a> </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-3 pages color-white">
                        <h5>Tài khoản của tôi</h5>
                        <ul>
                            <li><a href="#">Đăng nhập/tạo mới tài khoản</a> </li>
                            <li><a href="#">Thay đổi địa chỉ khách hàng</a> </li>
                            <li><a href="#">Chi tiết tài khoản</a> </li>
                            <li><a href="#">Lịch sử mua hàng</a> </li>
                        </ul>
                    </div>
                </div>
                <!-- top footer ends -->
                <!-- bottom footer statrs -->
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 payment-options color-gray">
                            <h5>Phương thức thanh toán</h5>
                            <ul>
                                <li>
                                    <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-5 address color-gray">
                            <h5>Địa chỉ</h5>
                            <p>268 Lý Thường Kiệt, phường 14, Quận 10, Thành phố Hồ Chí Minh</p>
                            <h5>Phone: <a href="tel:+080000012222">0123 456 456</a></h5> </div>
                        <div class="col-xs-12 col-sm-4 additional-info color-gray">
                            <h5>Thông tin thêm</h5>
                            <p>Chúng tôi nhận đặt hàng trực tuyến và giao hàng tận nơi. 
                                KHÔNG hỗ trợ đặt mua và nhận hàng trực tiếp tại văn phòng cũng như tất cả Hệ Thống Fahasa trên toàn quốc.</p>
                        </div>
                    </div>
                </div>
                <!-- bottom footer ends -->
            </div>
        </footer>
            <!-- end:Footer -->
         </div>
         <!-- end:page wrapper -->
      
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