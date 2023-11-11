<?php
require 'dbconnection.php';

$genre_id = $_GET['genre_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['genre_name'])) {
        $genre_name = $_POST['genre_name'];

        $sql = "UPDATE genres SET genre_name='$genre_name' WHERE genre_id=$genre_id";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../genres.php");
        } else {
            echo "Lỗi: " . $conn->error;
        }
    }
}

$conn->close();
?>