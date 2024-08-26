<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount'] == 'other' ? $_POST['custom_amount'] : $_POST['amount'];
    $frequency = $_POST['frequency'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Here you would typically save the data to a database and process the payment
    // For example:
    // $conn = new mysqli('localhost', 'username', 'password', 'database');
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // $sql = "INSERT INTO donations (amount, frequency, name, email) VALUES ('$amount', '$frequency', '$name', '$email')";
    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    // $conn->close();

    // For simplicity, we'll just display a thank you message
    echo "Thank you, $name, for your $frequency donation of $$amount!";
}
?>
