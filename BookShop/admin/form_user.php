<?php
    require 'includes/header.php';
    require 'php/dbconnection.php';

    $label_header = "Thêm người dùng";
    $form_action = "php/add_user.php";
    $username = "";
    $password = "";
    $full_name = "";
    $email = "";
    $address = "";
    $mobile = "";
    $role = "";

    if (isset($_GET["user_id"])) {
      $label_header = "Sửa thông tin người dùng";
      $form_action = "php/edit_user.php?user_id=" . $_GET["user_id"] ."";
      $user_id = $_GET["user_id"];

      $user_query = "SELECT * FROM users WHERE user_id = '$user_id'";
      $user_result = $conn->query($user_query);
      if ($user_result->num_rows > 0) {
        $row = $user_result->fetch_assoc();
        $username = $row['username'];
        $password = $row['password'];
        $full_name = $row['full_name'];
        $email = $row['email'];
        $address = $row['address'];
        $mobile = $row['mobile'];
        $role = $row['role'];
      }
    }
?>

<!-- Header -->
<div class="h1 pb-2 mb-4 border-bottom">
<?php echo $label_header ?>
</div>

<form action="<?php echo $form_action ?>" method="post">
  <div class="row mb-2">
    <div class="col">
      <label for="username" class="form-label">Tên đăng nhập</label>
      <input type="text" class="form-control" id="username" name="username" value="<?php echo $username ?>">
    </div>
    <div class="col">
      <label for="password" class="form-label">Mật khẩu</label>
      <input type="password" class="form-control" id="password" name="password" value="<?php echo $password ?>">
    </div>
  </div>


  <div class="row mb-2">
    <div class="col">
      <label for="full_name" class="form-label">Tên người dùng</label>
      <input type="text" class="form-control" id="full_name" name="full_name" value="<?php echo $full_name ?>">
    </div>
    <div class="col">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="name@gmail.com" value="<?php echo $email ?>">
    </div>
  </div>

  <div class="row mb-2">
    <div class="col">  
      <label for="address" class="form-label">Địa chỉ</label>
      <textarea class="form-control" id="address" name="address" rows="6"><?php echo $address ?></textarea>
    </div>
    <div class="col">
      <label for="mobile" class="form-label">Số điện thoại</label>
      <input type="text" class="form-control mb-2" id=mobile name="mobile" value="<?php echo $mobile ?>">
      <label for="role" class="form-label">Quyền hạn</label>
      <select class="form-select mb-2" aria-label="Default select example" id="role" name="role">
        <option selected>None</option>
        <option value="0" <?php if ($role == 0) echo 'selected' ?>>Quản trị viên</option>
        <option value="1" <?php if ($role == 1) echo 'selected' ?>>Người dùng</option>
      </select>
      <button type="submit" class="btn btn-primary">Gửi</button>
    </div>
  </div>
</form>
<?php
    require 'includes/footer.php';
?>