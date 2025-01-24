<?php
session_start();

// Saját belépési adataid (ezeket állítsd be biztonságosan)
$valid_username = 'admin';
$valid_password = 'jelszo123';

// Felhasználónév és jelszó ellenőrzése
if ($_POST['username'] == $valid_username && $_POST['password'] == $valid_password) {
    $_SESSION['admin_logged_in'] = true;
    header("Location: admin.php"); // Tovább az admin oldalra
} else {
    echo "Hibás felhasználónév vagy jelszó!";
}
?>
