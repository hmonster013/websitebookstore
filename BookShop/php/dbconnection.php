<?php
    $servername = "localhost";
    $php_username = "root";
    $php_password = "";
    $dbname = "dbbookstore";

    $conn = new mysqli($servername, $php_username, $php_password, $dbname);

    if ($conn->connect_error) {
        die ("Kết nối đến CSDL thất bại" . $conn->connect_error);
    }
?>