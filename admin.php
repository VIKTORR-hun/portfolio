<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php"); // Ha nincs bejelentkezve, visszairányítás
    exit();
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Felület</title>
</head>
<body>
    <h1>Üdvözöllek az admin felületen!</h1>
    <a href="logout.php">Kijelentkezés</a>

    <h2>Új hír hozzáadása</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Cím" required><br><br>
        <textarea name="content" placeholder="Tartalom" required></textarea><br><br>
        <input type="text" name="author" placeholder="Szerző" required><br><br>
        <input type="date" name="date" required><br><br>
        <input type="file" name="image" required><br><br>
        <button type="submit">Feltöltés</button>
    </form>
</body>
</html>
