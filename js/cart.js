$(document).ready(function() {
    const user_id = getCookie("user_id")
    const cartDetailURL = "http://localhost/bookstore/admin/api/getProductInCart.php"
    const rmCartItemURL = "http://localhost/bookstore/admin/api/deleteCartItem.php"
    const updateCartItemURL = "http://localhost/bookstore/admin/api/updateCart.php"
    const checkDiscountCodeURL = "http://localhost/bookstore/admin/api/checkDiscountCode.php"
    var sumCart = 0
    var discount_code = getCookie("discount_code")

    if (checkCookie("user_id")) {
        getCartInfo()
    } else {
        displayEmptyCart()
    }

    function getCartInfo() {
        $.ajax({
            url: cartDetailURL + "?userId=" + user_id,
            type: 'GET',
            dataType: 'json',
            success: function(resObj) {
                if (Array.isArray(resObj)) {
                    cartInfoHandle(resObj)
                } else {
                    displayEmptyCart()
                }
            },
            error: function(e) {
                console.error(e)
            }
        })
    }

    function cartInfoHandle(cartArray) {
        let invoice = 0;
        let cartItemList = []
        for (let i = 0; i < cartArray.length; i++) {
            invoice += Math.ceil(parseFloat(cartArray[i].p_price)/1000 * (100.0 - parseFloat(cartArray[i].p_discount)) / 100.0) * 1000 * cartArray[i].quantity
            let carItem = `
                <div class="row my-1 order_item">
                    <div class="col-sm-1 col-md-1 my-3">
                        <span>${i + 1}</span>
                    </div>
                    <div class="col-sm-6 col-md-6 my-1">
                        <div class="row">
                            <div class="col-sm-4 ">
                                <img src="${cartArray[i].p_img}" alt="${cartArray[i].p_name}" style="width: 120%;">

                            </div>
                            <div class="col-sm-8 item_info">
                                <h4>${cartArray[i].p_name}</h4>
                                <p><strong>Author:</strong> ${cartArray[i].p_author}</p>
                                <p><strong>NXB:</strong> ${cartArray[i].p_publisher}</p>
                                <p><strong>Code:</strong> ${cartArray[i].p_code}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-md-2 my-3">
                        <h5 class="item_price">${new Intl.NumberFormat('de-DE', {style: 'currency', currency: 'VND'}).format(Math.ceil(parseFloat(cartArray[i].p_price)/1000 * (100.0 - parseFloat(cartArray[i].p_discount)) / 100.0) * 1000)}</h5>
                    </div>
                    <div class="col-sm-2 col-md-3">
                        <input data-id="${cartArray[i].id}" type="number" class="form-control qty" style="width: 50%; margin-top: 40px;" value="${cartArray[i].quantity}" min="1">
                        <a href="#" class="remove_item" data-id="${cartArray[i].id}">
                            <i class="fa fa-trash"></i>
                        </a>
                    </div>

                </div>
            `
            cartItemList.push(carItem)
        }
        sumCart = invoice
        let cart = `
            <div class="container">
                <h3 style="margin-top: 30px;">Giỏ hàng (${cartArray.length}) sản phẩm</h3>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-body" style="padding: 20px;">
                                <div class="row">
                                    <div class="col-sm-1 col-md-1 ml-5">
                                        <strong>STT</strong>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <strong>Thông tin sản phẩm</strong>
                                    </div>
                                    <div class="col-sm-2 col-md-2">
                                        <strong>Đơn giá</strong>
                                    </div>
                                    <div class="col-sm-2 col-md-3">
                                        <strong>Số lượng</strong>
                                    </div>
                                </div>
                                <div class="orderItemList" style="margin-top: 25px;">
                                </div>
                                
                                <a class="backtobuy" href="category.php">&#171; Trở Lại Mua Sách</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body" style="padding: 20px;">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <label for="discount_code" class="col-form-label">Khuyến mãi: </label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input class="form-control" type="text" id="discount_code" value="${discount_code}">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-5">
                                        <label for="#">Thành tiền:</label>
                                    </div>
                                    <div class="col-sm-7" style="text-align: end; color: #C92127; font-weight: 500;">
                                        <span>${new Intl.NumberFormat('de-DE', {style: 'currency', currency: 'VND'}).format(invoice)}</span>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <hr class="dash">
                                    <div class="col-sm-7">
                                        <h4>Tổng Số Tiền (VAT): </h4>
                                    </div>
                                    <div class="col-sm-5" style="text-align: end;">
                                        <strong class="invoice">${new Intl.NumberFormat('de-DE', {style: 'currency', currency: 'VND'}).format(invoice)}</strong>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col p-1">
                                    
                                    <button type="button" class="btn checkout_btn" onclick="location.href='checkout.php'">THANH TOÁN</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        `
        $(".page-wrapper").append(cart)
        displayCartByUserId(cartItemList)
    }

    function displayCartByUserId(cartArray) {
        console.log("Load Cart Item")
        for (let i = 0; i < cartArray.length; i++) {
            $(".orderItemList").append(cartArray[i])
        }
    }

    function displayEmptyCart() {
        console.log("Cart is empty!")
        let emptyCart = `
            <div class="container">
                <div class="row ">
                    <div class="card cart">
                        <h4 class="card-title">Giỏ hàng (0) sản phẩm</h4>
                        <div class="card-body cart-body">
                            <img src="https://cdn0.fahasa.com/skin//frontend/ma_vanese/fahasa/images/checkout_cart/ico_emptycart.svg" alt="Giỏ hàng trống">
                            <p>Chưa có sản phẩm nào trong giỏ hàng của bạn.</p>
                            <button type="button" class="btn shopping_btn">Mua Sắm Ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        `
        $(".page-wrapper").append(emptyCart)
    }

    $("body").on("click", ".shopping_btn", function() {
        location.href = "category.php"
    })

    $("body").on("click", ".remove_item", function() {
        let cartId = this.dataset.id
        let data = {
            "id": cartId
        }
        $.ajax({
            url: rmCartItemURL,
            type: "DELETE",
            data: JSON.stringify(data),
            dataType: 'json',
            success: function(res) {
                location.reload()
            },
            error: function(resErr) {
                console.log(resErr)
            }
        })
    })

    $("body").on("change", ".qty", function() {
        console.log(this.value)
        let data = {
            "id": this.dataset.id,
            "quantity": this.value
        }
        console.log(data)
        $.ajax({
            url: updateCartItemURL,
            type: "PUT",
            data: JSON.stringify(data),
            dataType: 'json',
            success: function(res) {
                location.reload()
            },
            error: function(resErr) {
                console.log(resErr)
            }
        })
    })

    $("body").on("change", "#discount_code", function() {
        $.ajax({
            url: checkDiscountCodeURL + "?discount_code=" + this.value,
            type: "GET",
            dataType: 'json',
            success: function(response) {
                if (response.discount) {
                    console.log(response)
                    setCookie("discount_code", response.code, 1)
                } else {
                    setCookie("discount_code", "", 0)
                }
            },
            error: function(response) {
                console.error(response)
            }
        })
    })

    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
          let c = ca[i];
          while (c.charAt(0) == ' ') {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
        }
        return "";
    }

    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function checkCookie(cname) {
        let user = getCookie(cname);
        if (user == "") {
            return false
        } 
        return true
      }
})