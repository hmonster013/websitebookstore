<?php
    session_start();
    $check = FALSE;
    if (isset($_SESSION['admin_id']) && isset($_SESSION['role'])){
        if ($_SESSION['role'] == 0) {
            $check = TRUE;
        }
    }
    if (!$check) {
        header("Location: http://localhost/BookShop/admin/");
    }
?>