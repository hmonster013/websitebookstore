<?php
    require 'dbconnection.php';
    $detail_id = $_GET['detail_id'];
    $quantity = $_GET['quantity'];

    $detail_query = "UPDATE order_details SET quantity = '$quantity' WHERE detail_id = '$detail_id'";
    if ($conn->query($detail_query) === TRUE) {
        header("Location: http://localhost/BookShop/cart.php");
    } else {
        echo "Thêm vào giỏ hàng thất bại công";
    }
?>