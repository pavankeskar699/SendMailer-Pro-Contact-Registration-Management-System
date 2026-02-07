<?php
ob_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
$conn = new mysqli("127.0.0.1", "root", "root", "contact_db", 3306);
    // /* ================= DATABASE CONNECTION ================= */
    // $conn = new mysqli("host=127.0.0.1 user=root password=  dbname=contact_db port=3306");
    $conn = new mysqli("127.0.0.1", "root", "root", "contact_db", 3306);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

$sql = "INSERT INTO messages (name, email, subject, message)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $subject, $message);
$stmt->execute();

    $stmt->close();
    $conn->close();
    /* ======================================================= */

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'pavankeskar699@gmail.com';
        $mail->Password   = 'qosxzvpfrmqqyngo'; // App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender & Receiver
        $mail->setFrom('pavankeskar699@gmail.com', 'Contact Form');
        $mail->addAddress('pavankeskar699@gmail.com');
        $mail->addReplyTo($email, $name);

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = "
            <h3>New Contact Message</h3>
            <p><b>Name:</b> {$name}</p>
            <p><b>Email:</b> {$email}</p>
            <p><b>Message:</b><br>{$message}</p>
        ";

        $mail->send();
        header("Location: success.php");
        echo "<script>alert('Message sent & saved successfully!');</script>";

    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
ob_end_flush();
?>
