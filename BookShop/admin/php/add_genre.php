<?php
require 'dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['genre_name'])) {
        $genre_name = $_POST['genre_name'];

        $sql = "INSERT INTO genres (genre_name) VALUES ('$genre_name')";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../genres.php");
        } else {
            echo "Lỗi: " . $conn->error;
        }
    }
}

$conn->close();
?>