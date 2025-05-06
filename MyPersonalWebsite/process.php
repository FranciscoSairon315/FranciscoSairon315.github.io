<?php
include 'db.php'; // Connect to the database
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $full_name = htmlspecialchars($_POST["full_name"]);
        $email = htmlspecialchars($_POST["email"]);
        $phone = htmlspecialchars($_POST["phone"]);
        $message = htmlspecialchars($_POST["message"]);
    
    // Validate phone number (11 digits)
    if (!preg_match('/^\d{11}$/', $phone)) {
        echo "Error: Phone number must be exactly 11 digits.";
        exit();
    }
    
    // Check if email already exists
        $checkEmail = $conn->prepare("SELECT email FROM users WHERE email = ?");
        $checkEmail->bind_param("s", $email);
        $checkEmail->execute();
        $checkEmail->store_result();
    
    if ($checkEmail->num_rows > 0) {
        echo "Error: The email address is already in use.";
        exit();
    }

    // Insert new user
        $stmt = $conn->prepare("INSERT INTO users (full_name, email, phone, message) VALUES (?,
        ?, ?, ?)");
        $stmt->bind_param("ssss", $full_name, $email, $phone, $message);
    
    if ($stmt->execute()) {
        echo "User added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
        $stmt->close();
        $checkEmail->close();
        $conn->close();
    } 
?>