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
       
    
	if($_POST['category_id'] != 1 && $_POST['category_id'] != 2 && $_POST['category_id'] != 3)
     {
    	$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Vui lòng nhập đúng mã loại sách!</strong>
															</div>';
     }

	elseif(($_POST['page_num']) < 1 )
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
        $mql = "INSERT INTO products(category_id, name, code, image_url, discount, price, author, translator, page_num, 
        cover, dimension, weight, publisher, publication_year) 
        
        VALUES ('$category_id','$name','$code','$image_url','$discount','$price','$author','$translator',
        '$page_num','$cover','$dimension','$weight','$publisher','$publication_year') ";
        
        mysqli_query($db, $mql);
                $success = 	'<div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Congrass!</strong>Sản phẩm đã được cập nhật thành công vào Cơ sở dữ liệu</br></div>';
        
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
    <title>Ela - Bootstrap Admin Dashboard Template</title>
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
        <!-- End Left Sidebar  -->
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
									<?php  echo $error;
									        echo $success; ?>
	
					    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Thêm sách vào cơ sở dữ liệu</h4>
                            </div>
                            <div class="card-body">
                                <form action='' method='post'  enctype="multipart/form-data">
                                    <div class="form-body">
                                       
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Loại sách</label>
												<select name="category_id" class="form-control custom-select" data-placeholder="Chọn loại sách" tabindex="1">
                                                        <option>--Chọn loại sách--</option>
                                                 <?php $category ="select * from category";
													$re=mysqli_query($db, $category); 
													while($row1=mysqli_fetch_array($re))  
													{
                                                        echo' <option value="'.$row1['id'].'">'.$row1['name'].'</option>';
													}  
                                                 
													?> 
													 </select>
                                                
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Tên sản phẩm</label>
                                                    <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Code</label>
                                                    <input type="text" name="code" class="form-control" placeholder="Nhập code">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Link hình ảnh</label>
                                                    <input type="text" name="image_url" class="form-control" placeholder="Nhập link hình ảnh">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Giảm giá (%)</label>
                                                    <input type="text" name="discount" class="form-control" placeholder="Nhập mã giảm giá">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Giá gốc</label>
                                                    <input type="text" name="price" class="form-control" placeholder="Nhập giá cuốn sách">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Tác giả</label>
                                                    <input type="text" name="author" class="form-control" placeholder="Nhập tên tác giả">
                                                </div>
                                                
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Số trang</label>
                                                    <input type="text" name="page_num" class="form-control form-control-danger" placeholder="Nhập số trang của cuốn sách">
                                                </div>
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Chất liệu bìa sách</label>
                                                    <input type="text" name="cover" class="form-control form-control-danger" placeholder="Nhập tên chất liệu bìa sách">
                                                </div>
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Kích thước</label>
                                                    <input type="text" name="dimension" class="form-control form-control-danger" placeholder="Nhập kích thước sách chiều dài x chiều rộng">
                                                </div>
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Khối lượng(gam)</label>
                                                    <input type="text" name="weight" class="form-control form-control-danger" placeholder="Nhập khối lượng sách">
                                                </div>
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Nhà xuất bản</label>
                                                    <input type="text" name="publisher" class="form-control form-control-danger" placeholder="Nhập tên nhà xuất bản">
                                                </div>
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Năm xuất bản</label>
                                                    <input type="text" name="publication_year" class="form-control form-control-danger" placeholder="Nhập năm xuất bản">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Dịch giả</label>
                                                    <input type="text" name="translator" class="form-control" placeholder="Nhập tên dịch giả (nếu có)">
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