<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_ids";

// ایجاد اتصال به دیتابیس
$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>