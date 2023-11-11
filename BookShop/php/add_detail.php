<?php
    require 'dbconnection.php';
    session_start();
    $order_id = $_SESSION['order_id'];
    $book_id = $_GET['book_id'];
    if (isset($_POST['quantity'])) {
        $quantity = $_POST['quantity'];
    } else {
        $quantity = 1;
    }
    $detail_date = date('Y-m-d H:i:s');

    $detail_query = "INSERT INTO order_details(order_id, book_id, quantity, detail_date, payment_status) VALUES ('$order_id', '$book_id', '$quantity', '$detail_date', '0')";
    if ($conn->query($detail_query) === TRUE) {
        header("Location: http://localhost/BookShop/cart.php");
    } else {
        echo "Thêm vào giỏ hàng thất bại công";
    }
?>