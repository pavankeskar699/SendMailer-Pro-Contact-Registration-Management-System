<!DOCTYPE html>
<html>
<head>
    <title>Add New Message</title>
</head>
<body style="font-family:Arial; padding:30px;">

<h2>Add New Message (Admin)</h2>

<form action="insert.php" method="post">
    Name:<br>
    <input type="text" name="name" required><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    Subject:<br>
    <input type="text" name="subject" required><br><br>

    Message:<br>
    <textarea name="message" rows="5" required></textarea><br><br>

    <button type="submit">Save</button>
</form>

</body>
</html>
