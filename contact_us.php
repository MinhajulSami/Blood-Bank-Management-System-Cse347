<!DOCTYPE html>
<html>
<head>
    <title>Blood Bank - Contact Us</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header, nav, section, footer {
    margin: 20px;
    padding: 20px;
    border: 1px solid #ddd;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 10px;
}

        
        .contact-form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>
    <section>
        <h2>Get in Touch:</h2>
        <div class="contact-form">
            <p>If you have any questions or concerns, please fill out the form below:</p>
            <form action="contact_us.php" method="POST">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required><br><br>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea><br><br>

                <button type="submit">Submit</button>
            </form>
        </div>

        <div class="contact-info">
            <h2>Contact Information</h2>
            <p>Phone Number: 01771692001</p>
            <p>Email: bloodbank44a@gmail.com</p>
            <a href="landing.php" class="home-button">Home</a>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Blood Bank</p>
    </footer>
</body>
</html>
<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Your message has been sent. We will get back to you soon.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
