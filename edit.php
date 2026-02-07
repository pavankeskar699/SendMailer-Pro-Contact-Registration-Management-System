<?php
include 'db.php';

$id = $_GET['id'];
$data = $conn->query("SELECT * FROM messages WHERE id=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Message</title>
</head>
<body style="font-family:Arial; padding:30px;">

<h2>Edit Message</h2>

<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    Name:<br>
    <input type="text" name="name" value="<?= $data['name'] ?>"><br><br>

    Email:<br>
    <input type="email" name="email" value="<?= $data['email'] ?>"><br><br>

    Subject:<br>
    <input type="text" name="subject" value="<?= $data['subject'] ?>"><br><br>

    Message:<br>
    <textarea name="message" rows="5"><?= $data['message'] ?></textarea><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
