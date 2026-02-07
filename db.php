<?php
$conn = new mysqli("127.0.0.1", "root", "root", "contact_db", 3306);

if ($conn->connect_error) {
    die("Database Connection Failed");
}
?>
