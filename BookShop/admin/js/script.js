// JS Popovers
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));
// JS Modal
const myModal = document.getElementById('myModal');
const myInput = document.getElementById('myInput'); 

// Lăng nghe sự kiện delete
document.addEventListener("DOMContentLoaded", function () {
  // Lắng nghe sự kiện khi nút xóa được nhấn
  const deleteButtons = document.querySelectorAll(".btn[data-bs-toggle='modal'][data-bs-target='#deleteModal']");
  deleteButtons.forEach((button) => {
    button.addEventListener("click", function () {
      // Lấy user_id từ thuộc tính dữ liệu
      const id = this.getAttribute("data-id");
      const table = this.getAttribute("data-table");

      // Lắng nghe sự kiện khi nút xác nhận xóa được nhấn
      document.getElementById("btnConfirmDelete").addEventListener("click", function () {
        window.location.href = `php/delete_by_id.php?id=${id}&table=${table}`;
      });
    });
  });
});

//Sử lý sự kiện thay đổi ảnh trong form_book
function previewImg() {
    var imgInput = document.getElementById("image_url");
    var img = document.getElementById("image_book");
    var img_url = document.getElementById("hidden_image_url");

    if (imgInput.files && imgInput.files[0]) {
      img.src = "../book_images/" + imgInput.files[0].name;
      img_url.value = imgInput.files[0].name;
    }
}