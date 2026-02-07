<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Message Sent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5;url=index.php">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .success-card {
            background: #ffffff;
            width: 90%;
            max-width: 420px;
            padding: 35px 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .icon {
            font-size: 60px;
            color: #28a745;
            margin-bottom: 15px;
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            font-size: 15px;
            margin-bottom: 25px;
            line-height: 1.5;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            background: #007bff;
            color: #fff;
            padding: 12px 28px;
            border-radius: 6px;
            font-size: 15px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #0056b3;
        }

        .small-text {
            margin-top: 20px;
            font-size: 13px;
            color: #999;
        }
    </style>
</head>
<body>

    <div class="success-card">
        <div class="icon">✅</div>
        <h2>Message Sent Successfully</h2>
        <p>
            Thank you for contacting us.  
            We have received your message and will get back to you shortly.
        </p>

        <a href="home.php" class="btn">Back to Home</a>

        <div class="small-text">
            You will be redirected automatically in a few seconds.
        </div>
    </div>

</body>
</html>
