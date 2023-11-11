<?php
require 'dbconnection.php';
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['order_id'])) {
    $user_id = $_SESSION['user_id'];
    $order_id = $_SESSION['order_id'];

    $total_amount = 0;
    $detail_query = "SELECT SUM(quantity * price) as total_amount 
                    FROM order_details 
                    JOIN books ON order_details.book_id = books.book_id
                    WHERE order_id = '$order_id' AND payment_status = '0'";
    $detail_result = $conn->query($detail_query);

    if ($detail_result->num_rows > 0) {
        $total_row = $detail_result->fetch_assoc();
        $total_amount = $total_row['total_amount'];
    }

    $payment_date = date("Y-m-d H:i:s");
    $insert_payment_query = "INSERT INTO payments (user_id, payment_date, total_amount) 
                            VALUES ('$user_id', '$payment_date', '$total_amount')";
    $conn->query($insert_payment_query);

    $payment_id = $conn->insert_id; 

    $update_order_details_query = "UPDATE order_details 
                                SET payment_id = '$payment_id', payment_status = '1' 
                                WHERE order_id = '$order_id' AND payment_status = '0'";
    $conn->query($update_order_details_query);

    header("Location: http://localhost/BookShop/thank_you.php");
} else {
    echo "Thanh toán không thành công";
}
?>
