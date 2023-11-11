<?php
require 'dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_GET['user_id'];
    $username = $_POST['username'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];

    $edit_user_query = "UPDATE users SET username = '$username', full_name = '$full_name', email = '$email', address = '$address', mobile = '$mobile' WHERE user_id = '$user_id'";
    if ($conn->query($edit_user_query) === TRUE) {
        header("Location: ../profile.php");
    } else {
        echo "Lỗi: " . $edit_user_query . "<br>" . $conn->error;
    }
}

$conn->close();
?>
