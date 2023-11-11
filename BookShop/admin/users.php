<?php
    require 'includes/header.php';
?>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-danger" id="staticBackdropLabel">Thông báo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span>Bạn chắc chắn muốn xóa người dùng này?</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
        <button type="button" id="btnConfirmDelete" class="btn btn-primary">Ok</button>
      </div>
    </div>
  </div>
</div>

<!-- Header -->
<div class="h1 pb-2 mb-4 border-bottom">
  Người dùng
</div>

<a href="form_user.php" class="btn btn-primary mb-1">Thêm người dùng</a>

<!-- Body -->
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên đăng nhập</th>
      <th scope="col">Mật khẩu</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Email</th>
      <th scope="col">Đại chỉ</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Hành động</th>
    </tr>
  </thead>
  <tbody>

<?php
  require 'php/dbconnection.php';
  $query = "SELECT * FROM users";
  $result = $conn->query($query);
  while ($row = $result->fetch_assoc()) {
    ?><tr><?php
      echo '<th class="align-middle">' . $row['user_id'] . '</th>';
      echo '<th class="align-middle">' . $row['username'] . '</th>';
      echo '<th class="align-middle">' . $row['password'] . '</th>';
      echo '<th class="align-middle">' . $row['full_name'] . '</th>';
      echo '<th class="align-middle">' . $row['email'] . '</th>';
      echo '<th class="align-middle">' . $row['address'] . '</th>';
      echo '<th class="align-middle">' . $row['mobile'] . '</th>';
      ?><th><?php
      echo '<a href="form_user.php?user_id=' . $row['user_id'] .'" class="pe-1"><i class="fa-regular fa-pen-to-square" style="color: #ffffff"></i></a>';
      echo '<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal" data-table="users" data-id="' . $row['user_id'] . '"><i class="fa-solid fa-trash" style="color: #ffffff"></i></button>';
      ?></th><?php
    ?></tr><?php
  }
?>
  </tbody>
</table>
<?php
    require 'includes/footer.php';
?>