<?php
    require 'includes/header.php';
?>

<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col border-end d-flex">
                <h1 class="mx-auto my-auto m-5 font-monospace">Đổi mật khẩu</h1>
            </div>
            <div class="col py-5">
                <input type="text" id="password" name="password" class="form-control my-3 mx-5 py-3" placeholder="Mật khẩu cũ">
                <input type="text" id="new_password" name="new_password" class="form-control my-3 mx-5 py-3" placeholder="Mật khẩu mới">
                <input type="text" id="confirm_password" name="confirm_password" class="form-control my-3 mx-5 py-3" placeholder="Xác nhận mật khẩu mới">
                <button type="button" class="btn btn-dark mx-5" onclick="changePassword(); showToast('<?php if (isset($_SESSION['message'])){echo  $_SESSION['message'];} ?>')"">Gửi</button>
            </div>
        </div>
    </div>
</div>

<?php
    require 'includes/footer.php'
?>