<?php
    require 'includes/header.php';
    require 'php/dbconnection.php';

    $user_id = $_SESSION['user_id'];
    $user_query = "SELECT * FROM users WHERE user_id='$user_id'";
    $user_result = $conn->query($user_query);
    if ($user_result->num_rows > 0) {
        $user_row = $user_result->fetch_assoc();
    }
?>

<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col border-end d-flex">
                <h1 class="mx-auto my-auto m-5 font-monospace">Thông tin cá nhân</h1>
            </div>
            <div class="col py-5">
                <form action="php/edit_user.php?user_id=<?php echo $_SESSION['user_id'] ?>" method="post">
                    <div class="mb-3 ms-5">
                        <label for="username" class="form-label">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $user_row['username']; ?>">
                    </div>
                    <div class="mb-3 ms-5">
                        <label for="full_name" class="form-label">Họ tên</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" value="<?php echo $user_row['full_name']; ?>">
                    </div>
                    <div class="mb-3 ms-5">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $user_row['email']; ?>">
                    </div>
                    <div class="mb-3 ms-5">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?php echo $user_row['address']; ?>">
                    </div>
                    <div class="mb-3 ms-5">
                        <label for="mobile" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $user_row['mobile']; ?>">
                    </div>
                    <button type="submit" class="btn btn-secondary float-end">Sửa</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    require 'includes/footer.php'
?>