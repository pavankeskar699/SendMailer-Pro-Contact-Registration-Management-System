<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$conn->query("
INSERT INTO messages (name,email,subject,message)
VALUES ('$name','$email','$subject','$message')
");

header("Location: admin.php");
?>
