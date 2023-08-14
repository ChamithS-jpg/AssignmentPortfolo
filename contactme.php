<?php
$connection = mysqli_connect('localhost', 'root', '', 'contactme'); // Update with your database details

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$mobile_number = $_POST['mobile_number'];
$email = $_POST['email'];
$email_subject = $_POST['email_subject'];
$message = $_POST['message'];

$query = "INSERT INTO contactme (name, mobile_number, email, email_subject, message) VALUES ('$name', '$mobile_number', '$email', '$email_subject', '$message')";

if (mysqli_query($connection, $query)) {
    echo "Message sent successfully";
} else {
    echo "Error: " . mysqli_error($connection);
}

mysqli_close($connection);
?>
