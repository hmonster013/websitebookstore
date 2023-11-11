<?php
    require 'dbconnection.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $full_name = $_POST["full_name"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $mobile = $_POST["mobile"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        $userInsert_query = "INSERT INTO users (full_name, email, address, mobile, username, password, role) VALUES ('$full_name', '$email', '$address', '$mobile', '$username', '$password', '1')";
        
        if ($conn->query($userInsert_query) === TRUE) {
            $userSelect_query = "SELECT * FROM users WHERE email='$email' and role='1'";
            $userSelect_result = $conn->query($userSelect_query);
            if ($userSelect_result->num_rows > 0) {
                $userSelect_row = $userSelect_result->fetch_assoc();
                $user_id = $userSelect_row['user_id'];
                $order_query = "INSERT INTO orders(user_id) VALUES ('$user_id')";
                if ($conn->query($order_query) === TRUE) {
                    header('Location: ../index.php'); 
                }
            }
        } else {
            echo "Lỗi khi đăng ký: " . $conn->error;
        }

        $conn->close();
    }
?>
