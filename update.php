<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$conn->query("
UPDATE messages SET
name='$name',
email='$email',
subject='$subject',
message='$message'
WHERE id=$id
");

header("Location: admin.php");
?>
