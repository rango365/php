<?php
session_start(); // ???? ????
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // ????? ?? ???? ???? ?? ???? ??? ????
    exit();
}
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>???? ????</title>
    <link rel="stylesheet" href="style.css"> <!-- ???? ?? ???? CSS -->
</head>
<body>
    <div class="container">
        <h1>??? ?????? <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <a href="logout.php">????</a>
    </div>
</body>
</html>
