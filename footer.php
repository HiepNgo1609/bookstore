<?php
include("connection/connect.php");
error_reporting(0);
session_start();
?>
<footer class="footer" style="background-image:url('images/footer-bg.png')">
    <div class="container">
        <!-- top footer statrs -->
        <div class="row top-footer">
            <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                <span style="font-family: Brush Script MT,cursive; font-size:large; color:red">Kết nối tri thức
                    Việt</span>
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
            <div class="col-xs-12 col-sm-3 how-it-works-links color-white">
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
                    <h5>Phone: <a href="tel:+080000012222">0123 456 456</a></h5>
                </div>
                <div class="col-xs-12 col-sm-4 additional-info color-gray">
                    <h5>Thông tin thêm</h5>
                    <p>Chúng tôi nhận đặt hàng trực tuyến và giao hàng tận nơi.
                        KHÔNG hỗ trợ đặt mua và nhận hàng trực tiếp tại văn phòng cũng như tất cả Hệ Thống Fahasa trên
                        toàn quốc.</p>
                </div>
            </div>
        </div>
        <!-- bottom footer ends -->
    </div>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/search.js"></script>