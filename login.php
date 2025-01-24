<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Bejelentkezés</title>
</head>
<body>
    <h2>Admin Belépés</h2>
    <form action="auth.php" method="post">
        <input type="text" name="username" placeholder="Felhasználónév" required><br><br>
        <input type="password" name="password" placeholder="Jelszó" required><br><br>
        <button type="submit">Belépés</button>
    </form>
</body>
</html>
