<?php
// Establish a database connection
$host = "localhost";
$username = "root";
$password = "Sunswin284";
$database = "ThrO";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process user input from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    



    // Validate and sanitize user input (you should add more validation)
    $name = mysqli_real_escape_string($conn, $name);

    // Insert data into the database
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>