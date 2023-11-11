<?php
    require 'includes/header.php';
    require 'php/dbconnection.php';
    $book_id = $_GET['book_id'];
    $book_query = "SELECT * FROM books WHERE book_id='$book_id'";
    $book_result = $conn->query($book_query);
    if ($book_result->num_rows > 0) {
        $book_row = $book_result->fetch_assoc();
    }
?>

<div class="container">
    <div class="container-fluid">
        <div class="row py-5">
            <div class="col-6 border-end">
                <img src="book_images/<?php echo $book_row['image_url']; ?>" alt="" height="500px">
            </div>
            <div class="col-6">
                <div class="flex-row">
                    <h3 class="mb-2"><?php echo $book_row['book_name']; ?></h3>
                    <div class="border-bottom mb-2"></div>
                    <h4 class="mb-2 text-danger"><?php echo $book_row['price']; ?>đ</h4>
                    <div class="border-bottom mb-2"></div>
                    <div class="mb-2">
                        <?php
                            if (isset($_SESSION['user_id'])) {
                                // Luong su kien them vao gio hang
                                $order_id = $_SESSION['order_id'];
                                $detail_query = "SELECT * FROM order_details WHERE order_id = '$order_id' and book_id = '$book_id' and payment_status ='0'";
                                $detail_result = $conn->query($detail_query);
                                // Da co trong gio hang va chua thanh toan thi mo gio hang
                                if ($detail_result->num_rows > 0) {
                                    ?>
                                    <div class="row">
                                        <div class="input_group">
                                            <a href="#" class="btn btn-light" id="decrement">-</a>
                                            <input type="text" name="quantity" class="text-center" style="width: 40px;" id="quantity" value="1">
                                            <a href="#" class="btn btn-light" id="increment">+</a>
                                        </div>
                                    </div>
                                    <div class="row mx-1 mb-2">
                                    <?php
                                    echo '<a href="cart.php" class="btn btn-secondary">Thêm vào giỏ hàng</a>';
                                    ?> </div> <?php
                                // Chua co them vao csdl va mo gio hang
                                } else {
                                    ?>
                                    <form action="http://localhost/BookShop/php/add_detail.php?book_id=<?php echo $book_id ?>" method="post">
                                        <div class="row">
                                            <div class="input_group">
                                                <a href="#" class="btn btn-light" id="decrement">-</a>
                                                <input type="text" name="quantity" class="text-center" style="width: 40px;" id="quantity" value="1">
                                                <a href="#" class="btn btn-light" id="increment">+</a>
                                            </div>
                                        </div>
                                        <div class="row mx-1 mb-2">
                                            <button type="submit" class="btn btn-secondary">Thêm vào giỏ hàng</button>
                                        </div>
                                    </form> <?php
                                }
                                // Chua dang nhap thi k hien thi gi
                            } else {
                                ?>
                                <div class="row">
                                    <div class="input_group">
                                        <a href="#" class="btn btn-light" id="decrement">-</a>
                                        <input type="text" name="quantity" class="text-center" style="width: 40px;" id="quantity" value="1">
                                        <a href="#" class="btn btn-light" id="increment">+</a>
                                    </div>
                                </div>
                                <div class="row mx-1 mb-2">
                                <?php
                                echo '<a href="" class="btn btn-secondary">Thêm vào giỏ hàng</a>';
                                ?> </div> <?php
                            }
                        ?>
                    </div>
                    <div class="border-bottom mb-2"></div>
                    <h5>Mô tả sản phẩm</h5>
                    <p><?php echo $book_row['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require 'includes/footer.php'
?>