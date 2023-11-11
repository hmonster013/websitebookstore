<?php
    require 'includes/header.php'
?>

<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col border-end d-flex">
                <h1 class="mx-auto my-auto m-5 font-monospace">Đăng ký</h1>
            </div>
            <div class="col py-5">
                <form action="php/register.php" method="post">
                    <input type="text" name="full_name" class="form-control my-3 mx-5 py-3" placeholder="Họ và tên">
                    <input type="email" name="email" class="form-control my-3 mx-5 py-3" placeholder="Email">
                    <textarea name="address" class="form-control my-3 mx-5 py-3" placeholder="Địa chỉ"></textarea>
                    <input type="text" name="mobile" class="form-control my-3 mx-5 py-3" placeholder="Số điện thoại">
                    <input type="text" name="username" class="form-control my-3 mx-5 py-3" placeholder="Tên người dùng">
                    <input type="password" id="inputPassword5" name="password" class="form-control my-3 mx-5 py-3" aria-describedby="passwordHelpBlock" placeholder="Mật khẩu">
                    <button type="submit" class="btn btn-dark mx-5">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    require 'includes/footer.php'
?>