<?php
    require 'dbconnection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];
        $role = $_POST['role'];
    
        $add_user_query = "INSERT INTO users (username, password, full_name, email, address, mobile, role) VALUES ('$username', '$password', '$full_name', '$email', '$address', '$mobile', '$role')";
        if ($conn->query($add_user_query) === TRUE) {
            header("Location: ../users.php");
        } else {
            echo "Lỗi: " . $add_user_query . "<br>" . $conn->error;
        }
    }
    
    $conn->close();
?>