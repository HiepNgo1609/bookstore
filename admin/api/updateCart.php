<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once '../config/Database.php';
include_once '../models/Cart.php';

$database = new Database();
$db = $database->connect();

$cart = new Cart($db);

$data = json_decode(file_get_contents("php://input"), true);

// $data = {
//     "user_id": "1",
//     "product_id": "2",
//     "quantity": "2"
// }

$cart->id = $data['id'];
$cart->user_id = $data['user_id'];
$cart->product_id = $data['product_id'];
$cart->qty = $data['quantity'];

if ($cart->updateProductInCart()) {
    echo json_encode(
        array('message' => 'Cart Updated!')
    );
} else {
    echo json_encode(
        array('message' => 'Cart Not Updated!')
    );
}