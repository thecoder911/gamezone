<?php
session_start();
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

// Include the database connection script


// Handle the AJAX request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Decode the JSON data sent by the game
    $data = json_decode(file_get_contents("php://input"), true);

    // Extract player information and game statistics
    $playerName = $_SESSION["username"];
    $score = $data['score'];

    if($score<=10){
        $gameResult = "lose";
    }
    else{
        $gameResult = "win";
    }
    
    $gameDate = date("Y-m-d H:i:s");

    // Prepare and execute SQL statement to insert data into the database
    $sql = "INSERT INTO player_snake (player_name, score, game_result, game_date) 
            VALUES ('$playerName', $score, '$gameResult', '$gameDate')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

