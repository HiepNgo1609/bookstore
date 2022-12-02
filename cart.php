<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giỏ hàng</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card">
            <div class="card-body p-4">
  
              <div class="row">
  
                <div class="col-lg-7">
                  <h5 class="mb-3"><a href="#!" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                  <hr>
  
                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                      <p class="mb-1">
                      <h2>Giỏ hàng</h2>
                      </p>
  
                      <table class="table ">
                        <tr>
                          <th>Name</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th></th>
                          <th></th>
                        </tr>
  
                        <?php
                        if (isset($_GET['id'])) {
                          $user_id = $_GET['id'];
  
                          $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error($conn));
                          $db_select = mysqli_select_db($conn, 'init') or die(mysqli_error($conn));
                          $sql = "SELECT cart_items.id, products.name, cart_items.quantity, products.price
              FROM products JOIN cart_items ON products.id = cart_items.product_id
              WHERE cart_items.cart_id = (SELECT carts.id
                                          FROM carts, users
                                          WHERE users.id = $user_id)";
                          $res = mysqli_query($conn, $sql);
                          if ($res == true) {
                            $count_rows = mysqli_num_rows($res);
                            if ($count_rows > 0) {
                              while ($rows = mysqli_fetch_assoc($res)) {
                                $id = $rows['id'];
                                $name = $rows['name'];
                                $quantity = $rows['quantity'];
                                $price = $rows['price'];
                        ?>
  
                                <tr>
                                  <td><?php echo $name; ?></td>
                                  <td><?php echo $quantity; ?></td>
                                  <td><?php echo $price; ?></td>
                                  <td><button type="button" class=" btn btn-danger "> <a href="delete.php?id=<?php echo $id . '&user_id=' . $user_id; ?>">Delete</a> </button></td>
                                  <td><button type="button" class=" btn btn-success "> <a href="add.php?id=<?php echo $id . '&user_id=' . $user_id; ?>">Add</a> </button></td>
                                </tr>
  
                        <?php
                              }
                            }
                          }
                        }
                        ?>
                      </table>
  
                    </div>
  
                  </div>
  
  
                </div>
                <div class="col-lg-5">
  
                  <div class="card bg-primary text-white rounded-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-4">
  
                      </div>
  
  
                      <?php
                      if (isset($_GET['id'])) {
                        $user_id = $_GET['id'];
                        $tong = 0;
                        $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error($conn));
                        $db_select = mysqli_select_db($conn, 'init') or die(mysqli_error($conn));
                        $sql = "SELECT cart_items.id, products.name, cart_items.quantity, products.price
              FROM products JOIN cart_items ON products.id = cart_items.product_id
              WHERE cart_items.cart_id = (SELECT carts.id
                                          FROM carts, users
                                          WHERE users.id = $user_id)";
                        $res = mysqli_query($conn, $sql);
                        if ($res == true) {
                          $count_rows = mysqli_num_rows($res);
                          if ($count_rows > 0) {
                            while ($rows = mysqli_fetch_assoc($res)) {
                              $id = $rows['id'];
                              $name = $rows['name'];
                              $quantity = $rows['quantity'];
                              $price = $rows['price'];
  
  
                              $tong = $tong + $quantity * $price;
                            }
                          }
                        }
                      }
                      ?>
  
  
  
                      <hr class="my-4">
  
                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Subtotal</p>
                        <p class="mb-2"><?php echo $tong; ?></p>
                      </div>
  
                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Shipping</p>
                        <p class="mb-2">Free</p>
                      </div>
  
                      <div class="d-flex justify-content-between mb-4">
                        <p class="mb-2">Total</p>
                        <p class="mb-2"><?php echo $tong; ?></p>
                      </div>
  
  
  
                      <button type="button" class="btn btn-info btn-block btn-lg">
                        <div class="d-flex justify-content-between">
                          <span><?php echo $tong; ?></span>
                          <span><a href="checkout.php" style="color:blue">Checkout</a> <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
  
                        </div>
  
                      </button>
  
                    </div>
                  </div>
  
                </div>
  
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>