<?php
  require 'includes/header.php';
  require 'php/dbconnection.php';
  $genre_id = $_GET['genre_id'];

  $genre_query = "SELECT genre_name FROM genres WHERE genre_id='$genre_id'";
  $genre_result = $conn->query($genre_query);
  $genre_name = "";

  if ($genre_result->num_rows > 0) {
      $genre_row = $genre_result->fetch_assoc();
      $genre_name = $genre_row['genre_name'];
  }
?>

<div class="books-container container">
    <div class="container-fluid">
        <h1 class="my-5"><?php echo $genre_name; ?></h1>
        <div class="border"></div>
        <?php
        $books_query = "SELECT * FROM books WHERE genre_id='$genre_id'";
        $result = $conn->query($books_query);
        if ($result->num_rows > 0) {
            $count = 0;
            echo '<div class="row py-5">';

            while ($row = $result->fetch_assoc()) {
                $book_id = $row['book_id'];
                echo '<div class="col-md-4 mb-4">';
                
                // Thẻ "card"
                echo '<div class="card-wrapper">';
                echo '<div class="card book-card" book_id="' . $book_id . '">';
                echo '<img src="http://localhost/BookShop/book_images/' . $row['image_url'] . '" class="card-img-top" alt="..." height="300px">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['book_name'] . '</h5>';
                echo '</div>';
                echo '<div class="card-footer border-0 bg-body">';
                echo '<p class="card-text text-danger fw-bold">' . $row['price'] . 'đ</p>';

                if (isset($_SESSION['user_id'])) {
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

                echo '</div>';
                echo '</div>';
                echo '</div>';

                echo '</div>';

                $count++;

                if ($count % 3 == 0) {
                    echo '</div>';
                    echo '<div class="row">';
                }
            }

            echo '</div>';
        }
        ?>
    </div>
</div>


<?php
    require 'includes/footer.php'
?>