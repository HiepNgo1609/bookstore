<!DOCTYPE html>
<html lang="en">
<?php

include("../connection/connect.php");
error_reporting(0);
session_start();



if(isset($_POST['submit']))           //if upload btn is pressed
{
	if(empty($_POST['category_id'])||empty($_POST['name'])||$_POST['code']==''||$_POST['image_url']==''
        ||$_POST['discount']==''||$_POST['price']==''||$_POST['author']==''||$_POST['translator']==''
        ||$_POST['page_num']==''||$_POST['cover']==''||$_POST['dimension']==''||$_POST['weight']==''
        ||$_POST['publisher']==''||$_POST['publication_year']=='')
		{	
				$error = 	'<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Bạn phải điền vào tất cả các ô</strong>
				            </div>';
					
		}
	else
	{
       
    
	

	if(($_POST['page_num']) < 1 )
	{
		$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Số trang sách phải lớn hơn 0!</strong>
															</div>';
	}
    else if(($_POST['discount']) < 0 )
	{
		$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Giảm giá phải lớn hơn 0% !</strong>
															</div>';
	}
    else if(($_POST['price']) < 0 )
	{
		$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Giá cuốn sách phải là số lớn hơn 0 !</strong>
															</div>';
	}
    else if(($_POST['weight']) < 0 )
	{
		$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Khối lượng sách phải là số lớn hơn 0 !</strong>
															</div>';
	}
	
	else {
       
        $category_id = $_POST['category_id'];
        $name = $_POST['name'];
        $code = $_POST['code'];
        $image_url = $_POST['image_url'];
        $discount = $_POST['discount'];
        $price = $_POST['price'];
        $author = $_POST['author'];
        $translator = $_POST['translator'];
        $page_num = $_POST['page_num'];
        $cover = $_POST['cover'];
        $dimension = $_POSt['dimension'];
        $weight = $_POST['weight']; $publisher = $_POST['publisher']; $publication_year = $_POST['publication_year'];

        $mql = "UPDATE products SET category_id = $category_id, name = '$name', code=$code , image_url= '$image_url' , 
        discount = $discount , price=$price, author='$author' , translator='$translator' , page_num=$page_num, cover='$cover', dimension='$dimension',
        weight=$weight, publisher = '$publisher' , publication_year=$publication_year WHERE id = $_GET[menu_upd] ";
        
        mysqli_query($db, $mql);
                $success = 	'<div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Congrass!</strong>Cập nhật thành công!</br></div>';
        
    }
    
}
} 
?>
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
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b><img src="images/logo.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Messages -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-large"></i></a>
                            <div class="dropdown-menu animated zoomIn">
                                <ul class="mega-dropdown-menu row">


                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>
								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle m-r-10"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                        <!-- Messages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/5.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>John Doe</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Mr. John</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <?php include 'left_sidebar.php'?>

        <!-- Page wrapper  -->
        <div class="page-wrapper" style="height:1200px;">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                  
									
									<?php  echo $error;
									        echo $success; ?>
									
									
								
								
					    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Chỉnh sửa thông tin sản phẩm</h4>
                            </div>
                            <div class="card-body">
                            <?php $ssql ="select * from products where id='$_GET[menu_upd]'";
													$res=mysqli_query($db, $ssql); 
													$newrow=mysqli_fetch_array($res);?>
                                <form action='' method='post'  enctype="multipart/form-data">
                                    <div class="form-body">
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Loại sách</label>
												<select disabled name="category_id" class="form-control custom-select" data-placeholder="Chọn loại sách" tabindex="1">
                                                        
                                                 <?php $category ="select * from category";
													$re=mysqli_query($db, $category); 
                                                   
                                                    
													while($row1=mysqli_fetch_array($re))  
													{
                                                        $selectStr = ($_GET['menu_upd'] === $row1['id']) ? "selected": '';
                                                    
                                                        echo' <option value="'.$row1['id'].'" >'.$row1['name'].'</option>';
													}  
                                                 
													?> 
													 </select>
                                                
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Tên sản phẩm</label>
                                                    <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm" value="<?php  echo $newrow['name']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Code</label>
                                                    <input type="text" name="code" class="form-control" placeholder="Nhập code" value="<?php  echo $newrow['code']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Link hình ảnh</label>
                                                    <input type="text" name="image_url" class="form-control" placeholder="Nhập link hình ảnh" value="<?php  echo $newrow['image_url']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Giảm giá (%)</label>
                                                    <input type="text" name="discount" class="form-control" placeholder="Nhập mã giảm giá" value="<?php  echo $newrow['discount']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Giá gốc</label>
                                                    <input type="text" name="price" class="form-control" placeholder="Nhập giá cuốn sách" value="<?php  echo $newrow['price']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Tác giả</label>
                                                    <input type="text" name="author" class="form-control" placeholder="Nhập tên tác giả" value="<?php  echo $newrow['author']; ?>">
                                                </div>
                                                
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Số trang</label>
                                                    <input type="text" name="page_num" class="form-control form-control-danger" placeholder="Nhập số trang của cuốn sách" value="<?php  echo $newrow['page_num']; ?>">
                                                </div>
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Chất liệu bìa sách</label>
                                                    <input type="text" name="cover" class="form-control form-control-danger" placeholder="Nhập tên chất liệu bìa sách" value="<?php  echo $newrow['cover']; ?>">
                                                </div>
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Kích thước</label>
                                                    <input type="text" name="dimension" class="form-control form-control-danger" placeholder="Nhập kích thước sách" value="<?php  echo $newrow['dimension']; ?>">
                                                </div>
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Khối lượng(gam)</label>
                                                    <input type="text" name="weight" class="form-control form-control-danger" placeholder="Nhập khối lượng sách" value="<?php  echo $newrow['weight']; ?>">
                                                </div>
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Nhà xuất bản</label>
                                                    <input type="text" name="publisher" class="form-control form-control-danger" placeholder="Nhập tên nhà xuất bản" value="<?php  echo $newrow['publisher']; ?>">
                                                </div>
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Năm xuất bản</label>
                                                    <input type="text" name="publication_year" class="form-control form-control-danger" placeholder="Nhập năm xuất bản" value="<?php  echo $newrow['publication_year']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Dịch giả</label>
                                                    <input type="text" name="translator" class="form-control" placeholder="Nhập tên dịch giả (nếu có)" value="<?php  echo $newrow['translator']; ?>">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    <!--/span-->
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" name="submit" class="btn btn-success" value="Lưu"> 
                                        <a href="dashboard.php" class="btn btn-inverse">Hủy</a>
                                    </div>


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