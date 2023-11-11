<?php
  require 'includes/header.php';
  require 'php/dbconnection.php';
?>
<div class="d-flex py-5">
    <h1 class="mx-auto">Giỏ hàng</h1>
</div>

<div class="cart-container">
    <div class="container">
        <div class="container-fluid">   
            <?php
                $total_price = 0;
                if (isset($_SESSION['order_id'])) {
                    $order_id = $_SESSION['order_id'];
                    $detail_query = "SELECT * FROM order_details WHERE order_id='$order_id' && payment_status='0'";
                    $detail_result = $conn->query($detail_query);
                    if ($detail_result->num_rows > 0 ) {
                        while ($detail_row = $detail_result->fetch_assoc()) {
                            $book_id = $detail_row['book_id'];
                            $book_query = "SELECT * FROM books WHERE book_id='$book_id'";
                            $book_result = $conn->query($book_query);
                            if ($book_result->num_rows > 0) {
                                $book_row = $book_result->fetch_assoc();
                                $total_price += ($book_row['price'] * $detail_row['quantity']);
                                ?>
                                <div class="card mb-3" style="max-height: 300px;">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <img src="book_images/<?php echo $book_row['image_url']; ?>" class="rounded-start" alt="Sách" height="290px">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $book_row['book_name']; ?></h5>
                                                <p class="card-text"><span class="text-danger fw-bold"><?php echo $book_row['price']; ?>đ</span></p>
                                                <div class="input-group">
                                                    <?php
                                                        if ($detail_row['quantity'] == 1) {
                                                            ?>
                                                                <a href="php/edit_detail.php?detail_id=<?php echo $detail_row['detail_id']; ?>&quantity=1" class="btn btn-light">-</a>
                                                            <?php
                                                        } else {
                                                            ?>
                                                                <a href="php/edit_detail.php?detail_id=<?php echo $detail_row['detail_id']; ?>&quantity=<?php echo $detail_row['quantity'] - 1; ?>" class="btn btn-light">-</a>
                                                            <?php
                                                        }
                                                    ?>
                                                    <input type="text" name="quantity" class="text-center" value="<?php echo $detail_row['quantity'] ?>" style="width: 40px;">
                                                    <a href="php/edit_detail.php?detail_id=<?php echo $detail_row['detail_id']; ?>&quantity=<?php echo $detail_row['quantity'] + 1; ?>" class="btn btn-light">+</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="php/delete_detail.php?detail_id=<?php echo $detail_row['detail_id']; ?>" class="btn btn-close float-end m-1"></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    }
                }
            ?>
            <div class="pt-5 pb-3">
                <div class="border"></div>
            </div>
            <div class="total-container">
                <div class="row p-4">
                    <div class="col-8"></div>
                    <div class="col-4">
                        <div class="row">
                            <h2 class="float-end">Tổng tiền: <?php echo $total_price; ?>đ</h2>
                        </div>
                        <div class="row">
                            <a href="php/add_payment.php" class="btn btn-danger float-end">Thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
  require 'includes/footer.php'
?>
