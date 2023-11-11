<?php
    require 'dbconnection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();
        $user_id = $_SESSION['user_id'];
        $old_password = $_POST["password"];
        $new_password = $_POST["new_password"];
        $confirm_password = $_POST["confirm_password"];
        
        $user_query ="SELECT * FROM users WHERE user_id = '$user_id'";
        $result = $conn->query($user_query);
        $password = $result->fetch_assoc()['password'];

        if ($old_password == $password && $new_password == $confirm_password) {
            $update_query = "UPDATE users SET password = '$confirm_password' WHERE user_id='$user_id'";
            if ($conn->query($update_query) === TRUE) {
                $_SESSION['message'] = "Đổi mật khẩu thành công";
            }
        } else {
            $_SESSION['message'] = "Lỗi khi thay đổi mật khẩu. Vui lòng kiểm tra lại.";
        }
    }
?>
