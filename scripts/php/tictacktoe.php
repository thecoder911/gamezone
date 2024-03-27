<?php
// MySQL database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Connect to MySQL database
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to insert player information into the database
function insertPlayer($name) {
    global $conn;
    $name = mysqli_real_escape_string($conn, $name);
    $sql = "INSERT INTO players (name) VALUES ('$name')";
    if ($conn->query($sql) === TRUE) {
        echo "Player information inserted successfully.";
    } else {
        echo "Error inserting player information: " . $conn->error;
    }
}

// Function to record game result in the database
function recordGameResult($playerName, $result) {
    global $conn;
    $playerName = mysqli_real_escape_string($conn, $playerName);
    $result = mysqli_real_escape_string($conn, $result);
    $sql = "INSERT INTO snake (player_name, result) VALUES ('$playerName', '$result')";
    if ($conn->query($sql) === TRUE) {
        echo "Game result recorded successfully.";
    } else {
        echo "Error recording game result: " . $conn->error;
    }
}

// Check if action is specified in the request
if (isset($_POST['action'])) {
    $action = $_POST['action'];
    
    // Call corresponding function based on the action
    if ($action === 'insertPlayer' && isset($_POST['name'])) {
        insertPlayer($_POST['name']);
    } elseif ($action === 'recordGameResult' && isset($_POST['playerName']) && isset($_POST['result'])) {
        recordGameResult($_POST['playerName'], $_POST['result']);
    }
}

// Close MySQL connection
$conn->close();
?>
