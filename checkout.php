<!DOCTYPE >

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>



<div class="d-flex flex-column bd-highlight mb-3 border border-primary" style=" width:1000px;"  >

  <div class="p-2 bd-highlight">
    <form>
        <h3>Thông tin khách hàng</h3>
    <div class="mb-3">
    <label  class="form-label">Họ và tên người nhận</label>
    <input  class="form-control" id="Name" >
  </div>

  <div class="mb-3">
    <label  class="form-label">Số điện thoại</label>
    <input  class="form-control" id="Name" >
  </div>

  <div class="mb-3">
  <select class="form-select " aria-label="Country" >
  <option selected>Quốc gia</option>
  <option value="1">Việt Nam</option>
  <option value="2">MỸ</option>
  <option value="3">Trung Quốc</option>
  <option value="3">Nước khác</option>
</select>
  </div>

  <div class="mb-3">
<select class="form-select " aria-label="Country" >
  <option selected>Tỉnh/Thành phố</option>
  <option value="1">Việt Nam</option>
  <option value="2">MỸ</option>
  <option value="3">Trung Quốc</option>
  <option value="3">Nước khác</option>
</select>
  </div>

<div class="mb-3">
<select class="form-select " aria-label="Country" >
  <option selected>Quận/Huyện</option>
  <option value="1">Việt Nam</option>
  <option value="2">MỸ</option>
  <option value="3">Trung Quốc</option>
  <option value="3">Nước khác</option>
</select></div>

<div class="mb-3">
<select class="form-select " aria-label="Country" >
  <option selected>Phường/Xã</option>
  <option value="1">Việt Nam</option>
  <option value="2">MỸ</option>
  <option value="3">Trung Quốc</option>
  <option value="3">Nước khác</option>
</select>
</div>
  
<div class="mb-3">
    <label  class="form-label">Địa chỉ nhận hàng</label>
    <input  class="form-control" id="address" >
  </div>

    </form>
</div>

  
</div>


<div class="d-flex flex-column bd-highlight mb-3 border border-primary" style="width:1000px;" >

  <div class="p-2 bd-highlight">
    
  <form>

  <h3>Đơn vị vận chuyển</h3>
  <input type="radio"  name="shipping unit" >
  <label >Shoppe Express</label><br>
  <input type="radio"  name="shipping unit" >
  <label >VNPost</label><br>
  <input type="radio"  name="shipping unit" >
  <label >Giao hàng tiết kiệm</label><br>
  <input type="radio"  name="shipping unit" >
  <label >Giao hàng nhanh</label><br>
  <input type="radio"  name="shipping unit" >
  <label >Viettel Post</label><br>
  
    </form>
</div>
</div>


<div class="d-flex flex-column bd-highlight mb-3 border border-primary" style="width:1000px;" >

  <div class="p-2 bd-highlight">
    
  <form>

  <h3>Phương thức thanh toán</h3>
  <input type="radio"  name="payment method" >
  <label >Ví ZaloPay</label><br>
  <input type="radio"  name="payment method" >
  <label >Ví Moca trên Ứng dụng Grab</label><br>
  <input type="radio"  name="payment method" >
  <label >VNPAY</label><br>
  <input type="radio"  name="payment method" >
  <label >Ví Shoppe Pay</label><br>
  <input type="radio"  name="payment method" >
  <label >Ví Momo</label><br>
  <input type="radio"  name="payment method" >
  <label >Ví Momo</label><br>
  <input type="radio"  name="payment method" >
  <label>ATM/ Internet Banking</label><br>
  <input type="radio"  name="payment method" >
  <label >Thanh toán bằng tiền mặt khi nhận hàng</label><br>

 
  
    </form>
</div>
</div>

<div class="d-flex flex-column bd-highlight mb-3 border border-primary" style="width:1000px;" >

  <div class="p-2 bd-highlight">
    
  <form>

  <h3>Thông tin khác</h3>
  <input type="checkbox"  >
  <label>Ghi chú</label><br>
  <textarea placeholder="Yêu cầu thêm"></textarea><br>
  <input type="checkbox"  >
  <label>Xuất hóa đơn GTGT</label><br>
  <input type="checkbox"  >
  <label>Bằng việc tiến hành đặt mua, khách hàng đồng ý với các Điều Kiện Giao Dịch Chung</label><br>

    </form>
</div>
</div>

<div class="d-flex flex-column bd-highlight mb-3 border border-primary" style="width:1000px;" >

  <div class="p-2 bd-highlight">
    
  <form>

  <h3>Kiểm tra lại đơn hàng</h3>
  

    </form>
</div>
</div>

<div class="d-flex flex-column bd-highlight mb-3 border border-primary" style="width:1500px;position:sticky;" >

  <div class="p-2 bd-highlight">
    
  

  <h3>Thanh toán</h3>
  <button type="button" class="btn btn-danger btn-block btn-lg">
                      <div class="d-flex justify-content-between">
                        
                        <span><a href="checkout_success.php" style="color:white">Xác nhận thanh toán</a> <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                        
                      </div>

    
</div>
</div>



  



