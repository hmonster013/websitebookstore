<?php
    require 'php/check_login.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Base CSS -->
    <link rel="stylesheet" href="http://localhost/BookShop/admin/css/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- Slide menu -->
            <div class="col-auto col-md-2 position-fixed bg-dark min-vh-100">
                <h3 class="text-center py-3 text-light">ADMIN</h3>
                <ul class="nav nav-pills flex-column mt-2">
                    <li>
                        <a href="http://localhost/BookShop/admin/home.php" class="nav-link text-white">
                            <i class="fas fa-home"></i> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/BookShop/admin/users.php" class="nav-link text-white">
                            <i class="fa-solid fa-circle-user"></i> Người dùng
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/BookShop/admin/books.php" class="nav-link text-white">
                            <i class="fa-solid fa-book"></i> Sách
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/BookShop/admin/authors.php" class="nav-link text-white">
                            <i class="fas fa-users"></i> Tác giả
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/BookShop/admin/genres.php" class="nav-link text-white">
                            <i class="fa-solid fa-tag"></i> Thể loại
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <i class="fas fa-gear"></i> Cài đặt
                        </a>
                    </li>
                </ul>                
            </div>

            <!-- Cột nội dung chính -->
            <div class="col-10 offset-2">