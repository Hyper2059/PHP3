<?php
$servername = "localhost";
$username = "root";  // Default username for XAMPP
$password = "";      // Default password for XAMPP (usually empty)
$dbname = "himalaya_college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO students (photo, name, email, phone, address) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $photo, $name, $email, $phone, $address);

// Set parameters and execute
$photo = $_POST['photo'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
