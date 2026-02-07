SendMailer Pro – Contact & Registration Management System

SendMailer Pro is a web-based contact and registration management system developed using PHP, MySQL, HTML, CSS, and PHPMailer.
The project allows users to submit contact or registration details through a professional web form, store the data securely in a database, and automatically send confirmation emails using SMTP.

This project is designed to demonstrate real-world full-stack web development skills and is suitable for academic submissions, interviews, and portfolio showcases.

🚀 Features
👤 User Module

Contact / Registration form

Server-side validation

Optional file upload support (PDF / image)

Automatic email notification using PHPMailer

Clean and responsive UI

🛠 Admin Panel

View all submitted messages

Add new records manually

Update existing user details

Delete messages and uploaded files

Manage complete user data (CRUD operations)

🧰 Technologies Used

Frontend: HTML, CSS, JavaScript

Backend: PHP

Database: MySQL

Email Service: PHPMailer (SMTP)

Server: Apache (XAMPP)

🗂 Project Structure
SendMailer-Pro/
│── home.php
│── contact.php
│── sendMailer.php
│── success.php
│── admin/
│   ├── dashboard.php
│   ├── add.php
│   ├── edit.php
│   ├── delete.php
│── uploads/
│── config/
│   └── db.php
│── phpmailer/
│── README.md

⚙️ Installation & Setup

Install XAMPP

Place the project inside:

C:\xampp\htdocs\


Start Apache and MySQL

Create a MySQL database and import the provided SQL file

Configure database credentials in db.php

Configure SMTP details in sendMailer.php

Run the project:

http://localhost/SendMailer-Pro

📌 Use Cases

Contact management system

Registration system

Customer inquiry handling

College / mini project

Interview & portfolio project

🔮 Future Enhancements

Admin authentication & role-based access

Search and pagination

QR code scanner for project demo access

REST API integration

Cloud deployment

Dashboard analytics01
