<?php
    require 'dbconnection.php';
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' and password = '$password' and role = 1";
    $user_result = $conn->query($query);
    if ($user_result->num_rows > 0) {
        $user_row = $user_result->fetch_assoc();
        $user_id = $user_row['user_id'];
        $_SESSION['user_id'] = $user_id;
        $_SESSION['full_name'] = $user_row['full_name'];
        // Lay id order cua user
        $order_query = "SELECT * FROM orders WHERE user_id = '$user_id'";
        $order_result = $conn->query($order_query);
        if ($order_result->num_rows > 0) {
            $_SESSION['order_id'] = $order_result->fetch_assoc()['order_id'];
        }
        header('Location: ../index.php');
    } else {
        echo 'Đăng nhập không thành công';
    }
?>