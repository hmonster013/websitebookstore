<?php
  require 'includes/header.php';
  require 'php/dbconnection.php';
?>

<!-- Body -->

<!-- carousel slide -->
<div class="row">
  <div id="carousel_slide" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/2_9bfc96ae59ee4702b82f82b12ee2e4c9.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/3_45bdccdb54174281a6f20fc6d9de642f.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/let_your_child_become_a_book_lover_ff64baa4fc1b4f5bb06d12de941348d0.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel_slide" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel_slide" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>
  </div>
</div>

<!-- New Book -->

<div class="newbook-container container mb-5">
  <div class="container-fluid">
    <div class="row p-5">
      <h1 class="text-center fw-light">Sách mới</h1>
    </div>

    <div id="book_slide" class="carousel">
      <div class="carousel-inner">
        <?php
          $books_query = "SELECT * FROM books ORDER BY publication_date LIMIT 5";
          $result = $conn->query($books_query);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              ?>
              <div class="carousel-item active">
                <div class="card-wrapper">
                  <div class="card book-card" book_id=<?php echo $row['book_id'] ?>>
                    <img src="book_images/<?php echo $row['image_url']; ?>" class="card-img-top" alt="..." height="300px">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $row['book_name']; ?></h5>
                    </div>
                    <div class="card-footer border-0 bg-body">
                      <p class="card-text text-danger fw-bold"><?php echo $row['price']; ?>đ</p>
                      <?php
                        if (isset($_SESSION['user_id'])) {
                          // Luong su kien them vao gio hang
                          $order_id = $_SESSION['order_id'];
                          $book_id = $row['book_id'];
                          $detail_query = "SELECT * FROM order_details WHERE order_id = '$order_id' and book_id = '$book_id' and payment_status ='0'";
                          $detail_result = $conn->query($detail_query);
                          if ($detail_result->num_rows > 0) {
                            echo '<a href="cart.php" class="btn btn-secondary">Thêm vào giỏ hàng</a>';
                          } else {
                            echo '<a href="php/add_detail.php?book_id=' . $row['book_id'] .'" class="btn btn-secondary">Thêm vào giỏ hàng</a>';
                          }
                        } else {
                          echo '<a href="" class="btn btn-secondary">Thêm vào giỏ hàng</a>';
                        }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
          }
        ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#book_slide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#book_slide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </div>
</div>

<?php
  require 'includes/footer.php'
?>
