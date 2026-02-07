<!DOCTYPE html>
<html>
<head>
    <title>Scan Project</title>
    <style>
        body {
            font-family: Arial;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f1f5f9;
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        img {
            width: 250px;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>📱 Scan to View Project</h2>
    <p>Scan this QR code to open SendMailer Pro</p>

    <img src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=http://localhost/sendmailer/home.php">

    <p style="margin-top:15px;">Open using any mobile QR scanner</p>
</div>

</body>
</html>
