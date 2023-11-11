<?php
require 'dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['author_name'])) {
        $author_name = $_POST['author_name'];

        $sql = "INSERT INTO authors (author_name) VALUES ('$author_name')";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../authors.php");
        } else {
            echo "Lỗi: " . $conn->error;
        }
    }
}

$conn->close();
?>