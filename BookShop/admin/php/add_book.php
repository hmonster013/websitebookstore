<?php
require 'dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book_name = $_POST['book_name'];
    $author_id = $_POST['author_id'];
    $genre_id = $_POST['genre_id'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];
    $description = $_POST['description'];
    $publication_date = $_POST['publication_date'];
    $image_url = $_POST['hidden_image_url'];

    $add_book_query = "INSERT INTO books (book_name, author_id, genre_id, price, stock_quantity, description, publication_date, image_url) VALUES ('$book_name', '$author_id', '$genre_id', '$price', '$stock_quantity', '$description', '$publication_date', '$image_url')";
    if ($conn->query($add_book_query) === TRUE) {
        header("Location: ../books.php");
    } else {
        echo "Lỗi: " . $add_book_query . "<br>" . $conn->error;
    }
}

$conn->close();
?>
