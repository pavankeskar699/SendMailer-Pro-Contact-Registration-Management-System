<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyCompany | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
        }

        body {
            background: #f8fafc;
            color: #1f2937;
            line-height: 1.6;
        }

        /* ===== NAVBAR ===== */
        header {
            background: #ffffff;
            padding: 18px 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        header h1 {
            font-size: 24px;
            font-weight: 700;
            color: #2563eb;
        }

        nav a {
            color: #374151;
            text-decoration: none;
            margin-left: 30px;
            font-size: 15px;
            font-weight: 500;
        }

        nav a:hover {
            color: #2563eb;
        }

        /* ===== HERO SECTION ===== */
        .hero {
            background: linear-gradient(135deg, #1e3a8a, #2563eb);
            color: white;
            text-align: center;
            padding: 110px 20px;
        }

        .hero h2 {
            font-size: 46px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero p {
            font-size: 18px;
            max-width: 700px;
            margin: auto;
            margin-bottom: 35px;
            color: #e5e7eb;
        }

        .hero a {
            display: inline-block;
            background: #ffffff;
            color: #2563eb;
            padding: 14px 36px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
        }

        .hero a:hover {
            background: #e5e7eb;
        }

        /* ===== SERVICES ===== */
        .services {
            max-width: 1200px;
            margin: 90px auto;
            padding: 0 20px;
            text-align: center;
        }

        .services h3 {
            font-size: 32px;
            margin-bottom: 50px;
            font-weight: 700;
        }

        .service-box {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            background: white;
            width: 320px;
            padding: 35px 30px;
            border-radius: 14px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.08);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 45px rgba(0,0,0,0.12);
        }

        .card h4 {
            margin-bottom: 15px;
            color: #2563eb;
            font-size: 20px;
            font-weight: 600;
        }

        .card p {
            font-size: 15px;
            color: #6b7280;
        }

        /* ===== CONTACT ===== */
        .contact {
            max-width: 900px;
            margin: 90px auto;
            padding: 0 20px;
        }

        .contact h3 {
            text-align: center;
            margin-bottom: 35px;
            font-size: 30px;
            font-weight: 700;
        }

        form {
            background: white;
            padding: 40px;
            border-radius: 14px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.08);
        }

        form input, form textarea {
            width: 100%;
            padding: 14px;
            margin-bottom: 18px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 15px;
        }

        form input:focus,
        form textarea:focus {
            outline: none;
            border-color: #2563eb;
        }

        form textarea {
            resize: none;
            height: 130px;
        }

        form button {
            width: 100%;
            background: #2563eb;
            color: white;
            padding: 14px;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }

        form button:hover {
            background: #1e40af;
        }

        /* ===== FOOTER ===== */
        footer {
            background: #0f172a;
            color: #94a3b8;
            text-align: center;
            padding: 22px;
            margin-top: 80px;
            font-size: 14px;
        }
    </style>
</head>

<body>

<header>
    <h1>MyCompany</h1>
   <nav>
    <a href="home.php">Home</a>
    <a href="#services">Services</a>
    <a href="#contact">Contact</a>
    <a href="admin.php" style="color:#2563eb;font-weight:600;">Admin</a>
</nav>
</header>

<section class="hero">
    <h2>Build Professional Solutions</h2>
    <p>
        We help you create modern, secure, and scalable applications 
        using the latest enterprise technologies.
    </p>

    <a href="#contact">Get in Touch</a>

    <!-- SCANNER BUTTON -->
    <br><br>
    <a href="scanner.php" style="
        background:#22c55e;
        color:white;
        padding:14px 32px;
        border-radius:30px;
        font-weight:600;
        text-decoration:none;
        display:inline-block;
    ">
        📱 Scan Project
    </a>
</section>


<section class="services" id="services">
    <h3>Our Services</h3>
    <div class="service-box">
        <div class="card">
            <h4>Web Development</h4>
            <p>Enterprise-grade responsive websites using modern UI standards.</p>
        </div>
        <div class="card">
            <h4>Backend Development</h4>
            <p>Robust backend solutions with Java, Spring Boot & secure databases.</p>
        </div>
        <div class="card">
            <h4>Email Integration</h4>
            <p>Reliable automated email systems using SMTP & PHPMailer.</p>
        </div>
    </div>
</section>

<section class="contact" id="contact">
    <h3>Contact Us</h3>
    <form action="sendMail.php" method="post">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit" name="send">Send Message</button>
    </form>
</section>

<footer>
    © 2026 MyCompany | Enterprise Web Solutions
</footer>

</body>
</html>
