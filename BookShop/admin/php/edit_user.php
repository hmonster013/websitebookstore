<?php
require 'dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_GET['user_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $role = $_POST['role'];

    $edit_user_query = "UPDATE users SET username = '$username', password = '$password', full_name = '$full_name', email = '$email', address = '$address', mobile = '$mobile', role = '$role' WHERE user_id = '$user_id'";
    if ($conn->query($edit_user_query) === TRUE) {
        header("Location: ../users.php");
    } else {
        echo "Lỗi: " . $edit_user_query . "<br>" . $conn->error;
    }
}

$conn->close();
?>
