<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $availability = $_POST['availability'];
    $interests = $_POST['interests'];

    // Here you would typically save the data to a database
    // For example:
    // $conn = new mysqli('localhost', 'username', 'password', 'database');
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // $sql = "INSERT INTO volunteers (name, email, phone, availability, interests) VALUES ('$name', '$email', '$phone', '$availability', '$interests')";
    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    // $conn->close();

    // For simplicity, we'll just display a thank you message
    echo "Thank you, $name, for registering as a volunteer! We will contact you soon.";
}
?>
