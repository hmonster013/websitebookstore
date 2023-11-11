// Toast

function showToast(message) {
  const toastLiveExample = document.getElementById('liveToast');
  const toastBody = document.getElementById('toast-body');

  toastBody.textContent = message;

  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
  toastBootstrap.show();
}

// Change Password

function changePassword() {
    var password = document.getElementById("password").value;
    var new_password = document.getElementById("new_password").value;
    var confirm_password = document.getElementById("confirm_password").value;

    // Tạo một đối tượng XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Xác định phương thức HTTP và URL cần gửi yêu cầu đến
    xhr.open("POST", "php/changepassword.php", true);

    // Đặt tiêu đề yêu cầu (cần thiết khi gửi dữ liệu POST)
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Xử lý kết quả trả về từ server
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            
        }
    };

    // Gửi yêu cầu với dữ liệu từ các trường nhập
    xhr.send("password=" + password + "&new_password=" + new_password + "&confirm_password=" + confirm_password);
}

// Sự kiện tăng giảm của số lượng sách
if (document.getElementById('decrement')) {
  const decrementButton = document.getElementById('decrement');
  const incrementButton = document.getElementById('increment');
  const quantityInput = document.getElementById('quantity');

  decrementButton.addEventListener('click', function (e) {
      const currentValue = parseInt(quantityInput.value);
      if (currentValue > 1) {
          quantityInput.value = currentValue - 1;
      }
  });

  incrementButton.addEventListener('click', function (e) {
      const currentValue = parseInt(quantityInput.value);
      quantityInput.value = currentValue + 1;
  });
}

// Lăng nghe sự kiện click vào book card
document.addEventListener("DOMContentLoaded", function () {
  const bookCard = document.querySelectorAll(".book-card");
  bookCard.forEach((button) => {
    button.addEventListener("click", function () {
      const book_id = this.getAttribute("book_id");
      window.location.href = `form_book.php?book_id=${book_id}`;
    });
  });
});

// Slide
var carouselWidth = $(".newbook-container .carousel-inner")[0].scrollWidth;
var cardWidth = $(".newbook-container .carousel-item").width();
var scrollPosition = 0;

$(".newbook-container .carousel-control-next").on("click", function () {
    if (scrollPosition < (carouselWidth - cardWidth * 4)) {
        scrollPosition += cardWidth;
        $(".newbook-container .carousel-inner").animate({ scrollLeft: scrollPosition }, 600);
    }
});

$(".newbook-container .carousel-control-prev").on("click", function () {
    if (scrollPosition > 0) {
        scrollPosition -= cardWidth;
        $(".newbook-container .carousel-inner").animate({ scrollLeft: scrollPosition }, 600);
    }
});
