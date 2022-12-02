<?php
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error($conn));
        $db_select = mysqli_select_db($conn, 'init') or die(mysqli_error($conn));
        $sql = "DELETE FROM cart_items WHERE id = $id";
        $res = mysqli_query($conn, $sql);
        if($res == true) {
            echo '<script>alert("xoa thanh cong")</srcipt>';
            
        }
    }
?>