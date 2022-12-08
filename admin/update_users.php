<!DOCTYPE html>
<html lang="en">
<?php


session_start();
error_reporting(0);
include("../connection/connect.php");

if(isset($_POST['submit'] ))
{
    if(empty($_POST['username'])||
        empty($_POST['firstname'])|| 
		empty($_POST['lastname']) ||  
		empty($_POST['email'])||
		empty($_POST['password'])||
        empty($_POST['district_id'])||
        empty($_POST['ward_id'])||
        empty($_POST['role'])||
		empty($_POST['phone_number']))
        
		{
            
			$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Bạn phải điền vào tất cả các ô!</strong>
															</div>';
		}
	else
	{
		

	
	
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) // Validate email address
    {
       	$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Email không hợp lệ!</strong>
															</div>';
    }
	else if(strlen($_POST['password']) < 6)
	{
		$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Mật khẩu phải có nhiều hơn 5 ký tự!</strong>
															</div>';
	}
	
	else if(strlen($_POST['phone_number']) > 10)
	{
		$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Số điện thoại không hợp lệ!</strong>
															</div>';
	}
	
	else{
       
	
	$mql = "update users set username = '$_POST[username]', firstname='$_POST[firstname]', lastname='$_POST[lastname]',email='$_POST[email]',
    phone_number='$_POST[phone_number]',password='$_POST[password]',ward_id='$_POST[ward_id]',
    district_id='$_POST[district_id]', role='$_POST[role]' where id='$_GET[user_upd]' ";
	mysqli_query($db, $mql);
			$success = 	'<div class="alert alert-success alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Tài khoản cập nhật thành công</strong></div>';
	
    }
	}

}

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon1.png">
    <title>Admin Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">


        <!-- header header  -->
        <?php include 'header.php'?>
        <?php include 'left_sidebar.php'?>


        <!-- Page wrapper  -->
        <div class="page-wrapper" style="height:1200px;">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
               
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                     <div class="row">
                   
                   
					
					 <div class="container-fluid">
                <!-- Start Page Content -->
							
									<?php  
									        echo $error;
									        echo $success; 
											
											
											?>	
					    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Cập nhật tài khoản</h4>
                            </div>
                            <div class="card-body">
							  <?php $ssql ="select * from users where id='$_GET[user_upd]'";
													$res=mysqli_query($db, $ssql); 
													$newrow=mysqli_fetch_array($res);?>
                                <form action='' method='post'  >
                                    <div class="form-body">
                                    <hr>
                                        <div class="row p-t-15">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Tên đăng nhập</label>
                                                    <input type="text" name="username" class="form-control" value="<?php  echo $newrow['username']; ?>" placeholder="username">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Họ và tên lót</label>
                                                    <input type="text" name="firstname" class="form-control form-control-danger"  value="<?php  echo $newrow['firstname'];  ?>" placeholder="jon">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Tên</label>
                                                    <input type="text" name="lastname" class="form-control" placeholder="doe"  value="<?php  echo $newrow['lastname']; ?>">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Email</label>
                                                    <input type="text" name="email" class="form-control form-control-danger"  value="<?php  echo $newrow['email'];  ?>" placeholder="example@gmail.com">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
										 <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Mật khẩu</label>
                                                    <input type="text" name="password" class="form-control form-control-danger"   value="<?php  echo $newrow['password'];  ?>" placeholder="Mật khẩu">
                                                    </div>
                                                </div>
                                        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Địa chỉ</label>
                                                    <input type="text" name="phone_number" class="form-control form-control-danger"   value="<?php  echo $newrow['phone_number'];  ?>" placeholder="Số điện thoại">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Phường/xã</label>
                                                    <input type="text" name="ward_id" class="form-control form-control-danger"   value="<?php  echo $newrow['ward_id'];  ?>" placeholder="Phường/xã">
                                                    </div>
                                                </div>
                                        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Quận/huyện</label>
                                                    <input type="text" name="district_id" class="form-control form-control-danger"   value="<?php  echo $newrow['district_id'];  ?>" placeholder="Quận/huyện">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class= row>
                                            <div class="col-md-6">
                                                <!-- <div class="form-group">
                                                    <label class="control-label">Vai trò</label>
                                                    <input type="text" name="role" class="form-control form-control-danger" value="<?php  echo $newrow['role'];  ?>" placeholder="Vai trò">
                                                    
                                                </div> -->
                                              
                                                <div class="form-group">
                                                    <label class="control-label">Vai trò</label><br>
                                                    <select style="font-size:medium; padding: 5px; border:1px solid rgb(232,232,232); color:rgb(80,80,80)" name = "role" aria-label="select example">
                                                        <option value="Quản trị viên">Quản trị viên</option>
                                                        <option value="Khách hàng" selected>Khách hàng</option>
                                                    </select>
                                                </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" name="submit" class="btn btn-success" value="Lưu"> 
                                        <a href="dashboard.php" class="btn btn-inverse">Hủy</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2022 All rights reserved. </footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    

</body>

</html>