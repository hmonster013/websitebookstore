<?php
    require 'dbconnection.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' and password = '$password' and role = 0";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['admin_id'] = $row['user_id'];
        $_SESSION['role'] = $row['role'];
        header('Location: ../home.php');
    } else {
        echo 'Đăng nhập không thành công';
    }
?>