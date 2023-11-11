<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Base CSS -->
  <link rel="stylesheet" href="http://localhost/BookShop/css/style.css">
</head>
<body>
  <!-- Thông báo -->
  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header bg-dark">
        <strong class="me-auto text-light">Thông báo</strong>
        <div data-bs-theme="dark">
          <button type="button" class="btn-close " data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
      <div id="toast-body" class="toast-body"></div>
    </div>
  </div>

  <!-- Header -->
  <!-- Logo -->
  <div class="row">
    <div class="col-md-5">

    </div>
    <div class="col-md-2 d-flex flex-column pt-2 mx-auto">
      <img src="http://localhost/BookShop/logo.png" alt="logo" class="mx-auto" width="75" height="75">
      <div class="mx-auto font-monospace fs-4">Hà Nội Book</div>
    </div>
    <div class="col-md-5 d-flex flex-row">
      <a href="#" class="fs-4 my-auto ps-3 offset-7"><i class="fa-solid fa-magnifying-glass text-dark"></i></a>
      <a href="http://localhost/BookShop/cart.php" class="fs-4 my-auto ps-3"><i class="fa-solid fa-cart-shopping text-dark"></i></a>
      <?php
        session_start();
        if (isset($_SESSION['user_id'])) {
          ?>
          <div class="profile-menu-dropdown dropdown my-auto ps-3">
            <div class="dropdown-toggle d-flex" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user fs-4"></i>
              <?php
                echo '<div class="fw-semibold ps-2">' . $_SESSION['full_name'] . '</div>';
              ?>
            </div>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="profile.php">Thông tin cá nhân</a></li>
              <li><a class="dropdown-item" href="form_changepassword.php">Đổi mật khẩu</a></li>
              <li><a class="dropdown-item" href="php/logout.php">Đăng xuất</a></li>
            </ul>
          </div>
          <?php
        } else {
          ?>
            <div class="profile-login-dropdown dropdown fs-4 my-auto ps-3">
              <div class="dropdown-toggle d-flex" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <i class="fa-solid fa-user"></i>
              </div>
              <div class="dropdown-menu p-4">
                <form action="php/login.php" method="post">
                    <h5 class="text-center">Đăng nhập</h1>
                    <input type="text" name="username" class="form-control my-3 p-3" placeholder="Tên đăng nhập">
                    <input type="password" id="inputPassword5" name="password" class="form-control my-3 p-3" aria-describedby="passwordHelpBlock" placeholder="Mật khẩu">
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark" style="width: 100%;">Đăng nhập</button>
                    </div>
                    <div class="text-center m-3">
                        <a href="form_register.php" class="link-secondary">Bạn chưa có tài khoản?</a>
                    </div>
                </form>
              </div>
            </div>
          <?php
        }
        ?>
    </div>
  </div>

  <!-- Navbar -->

  <nav class="navbar navbar-expand-lg border-bottom">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav .navbar-nav-scroll d-flex mx-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="http://localhost/BookShop/">Trang chủ</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Thể loại
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="books.php?genre_id=1">Văn học</a></li>
              <li><a class="dropdown-item" href="books.php?genre_id=5">Kinh tế</a></li>
              <li><a class="dropdown-item" href="books.php?genre_id=4">Kỹ năng sống</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sách mới</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>