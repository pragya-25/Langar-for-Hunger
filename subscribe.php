<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Here you would typically save the data to a database
    // For example:
    // $conn = new mysqli('localhost', 'username', 'password', 'database');
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // $sql = "INSERT INTO subscribers (email) VALUES ('$email')";
    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    // $conn->close();

    // For simplicity, we'll just display a thank you message
    echo "Thank you for subscribing to our newsletter!";
}
?>
