<?php
require 'dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book_id = $_GET['book_id'];
    $book_name = $_POST['book_name'];
    $author_id = $_POST['author_id'];
    $genre_id = $_POST['genre_id'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];
    $description = $_POST['description'];
    $publication_date = $_POST['publication_date'];
    $image_url = $_POST['hidden_image_url'];

    $edit_book_query = "UPDATE books SET book_name = '$book_name', author_id = '$author_id', genre_id = '$genre_id', price = '$price', stock_quantity = '$stock_quantity', description = '$description', publication_date = '$publication_date', image_url = '$image_url' WHERE book_id = '$book_id'";
    if ($conn->query($edit_book_query) === TRUE) {
        header("Location: ../books.php");
    } else {
        echo "Lỗi: " . $edit_book_query . "<br>" . $conn->error;
    }
}

$conn->close();
?>
