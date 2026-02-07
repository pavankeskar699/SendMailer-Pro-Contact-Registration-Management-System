<?php
include 'db.php';
$result = $conn->query("SELECT * FROM messages ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <style>
        body { font-family: Arial; background:#f4f6f8; padding:30px; }
        table {
            width:100%; border-collapse: collapse; background:#fff;
            box-shadow:0 10px 25px rgba(0,0,0,0.1);
        }
        th, td {
            padding:12px; border-bottom:1px solid #ddd;
        }
        th { background:#2563eb; color:#fff; }
        a {
            text-decoration:none; padding:6px 12px;
            border-radius:4px; color:#fff;
        }
        .edit { background:#28a745; }
        .delete { background:#dc3545; }
    </style>
</head>
<body>

<h2>📩 Contact Messages (Admin)</h2>
<br>
<a href="add.php" style="
background:#2563eb;
color:white;
padding:10px 18px;
border-radius:6px;
text-decoration:none;
font-weight:600;">
➕ Add New Message
</a>
<br><br>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
    <th>Action</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['subject'] ?></td>
    <td><?= $row['message'] ?></td>
    <td>
        <a class="edit" href="edit.php?id=<?= $row['id'] ?>">Edit</a>
        <a class="delete" href="delete.php?id=<?= $row['id'] ?>"
           onclick="return confirm('Delete this message?')">Delete</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
