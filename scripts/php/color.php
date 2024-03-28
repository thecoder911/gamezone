<?php
// PHP code to save player information to MySQL database
session_start();
// Set up connection to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get player information from POST data
$username = $_POST['username'];
$score = $_POST['score'];// You need to implement scoring logic in JavaScript
$playerName = $_SESSION["username"];
// Prepare SQL statement to insert player information into database
$sql = "INSERT INTO color (mail,username, score) VALUES ('$playerName','$username', '$score')";

if ($conn->query($sql) === TRUE) {
    echo "Score saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>