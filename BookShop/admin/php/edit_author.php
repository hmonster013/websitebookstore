<?php
require 'dbconnection.php';

$author_id = $_GET['author_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['author_name'])) {
        $author_name = $_POST['author_name'];

        $sql = "UPDATE authors SET author_name='$author_name' WHERE author_id=$author_id";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../authors.php");
        } else {
            echo "Lỗi: " . $conn->error;
        }
    }
}

$conn->close();
?>