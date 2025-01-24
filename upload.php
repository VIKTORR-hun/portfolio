<?php
$conn = new mysqli("localhost", "root", "", "weboldal");
$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];
$date = $_POST['date'];
$image = $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], "uploads/".$image);

$sql = "INSERT INTO hirek (title, content, author, date, image) VALUES ('$title', '$content', '$author', '$date', '$image')";
$conn->query($sql);
header("Location: admin.php");
?>
