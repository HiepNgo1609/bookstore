<!DOCTYPE html>
<html lang="en">
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

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

<body class="fix-header fix-sidebar">
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
        <div class="page-wrapper">
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
                    <div class="col-12">
						<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dữ liệu sách</h4>
                                <h6 class="card-subtitle">Xuất dữ liệu ra Copy, CSV, Excel, PDF & Print</h6>
								
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Thứ tự</th>
											    <th>Mã sản phẩm</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Code</th>
                                                <th>Hình ảnh</th>
                                               <th>Giảm giá (%)</th>
                                               <th>Giá gốc</th>
                                               <th>Tác giả</th>
                                               <th>Dịch giả</th>
                                               <th>Số trang</th>
                                               <th>Chất liệu bìa</th>
                                               <th>Kích thước</th>
                                               <th>Khối lượng</th>
                                               <th>Nhà xuất bản</th>
                                               <th>Năm xuất bản</th>
                                               <th>Ngày tạo</th>
                                               <th>Ngày cập nhật</th>
                                               <th>Sửa/xóa</th>
                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                            <tr>
                                            <th>Tên sách</th>
                                                <th>Giá</th>
                                                <th>Hình ảnh</th>
                                               <th>Hoạt động</th>
                                            </tr>
                                        </tfoot> -->
                                        <tbody>
										
                                           
                                               	<?php
                                                
												$sql="SELECT * FROM products";
												$query=mysqli_query($db,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="13"><center>Không có dữ liệu</center></td>';
														}
                                                        
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																				$mql="select * from products where id=$rows[id]";
																				$newquery=mysqli_query($db,$mql);
																				$fetch=mysqli_fetch_array($newquery);
																				
																				
																					echo '
																					
																								<td>'.$rows['id'].'</td>
																								<td>'.$rows['category_id'].'</td>
                                                                                                <td>'.$rows['name'].'</td>
                                                                                                <td>'.$rows['code'].'</td>
                                                                                                <td>
																								<center><img src="'.$rows['image_url'].'" class="img-responsive  radius" style="max-height:300px;max-width:150px;" /></center>
																								</td>
                                                                                                <td>'.$rows['discount'].'</td>
                                                                								<td>đ.'.$rows['price'].'</td>
                                                                                                <td>'.$rows['author'].'</td>
                                                                                                <td>'.$rows['translator'].'</td>
                                                                                                <td>'.$rows['page_num'].'</td>
                                                                                                <td>'.$rows['cover'].'</td>
                                                                                                <td>'.$rows['dimension'].'</td>
                                                                                                <td>'.$rows['weight'].'</td>
                                                                                                <td>'.$rows['publisher'].'</td>
                                                                                                <td>'.$rows['publication_year'].'</td>
                                                                                                <td>'.$rows['created_at'].'</td>
                                                                                                <td>'.$rows['updated_at'].'</td>
																							<td><a href="delete_menu.php?menu_del='.$rows['id'].'" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a> 
																							<a href="update_menu.php?menu_upd='.$rows['category_id'].'" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="ti-settings"></i></a>
																							</td></tr>';
																					 
																						
																						
																		}	
														}
												
											
											?>             
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
					</div>
                      
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


    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
</body>

</html>