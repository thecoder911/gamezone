<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "test"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and passwords are provided
    if (isset($_POST['email']) && isset($_POST['password1'])) {
        // Sanitize inputs to prevent SQL injection
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);
       
        // Check if email is not null
        if (!empty($email) && !empty($password)){
            $sql = "UPDATE login SET pass = $password  WHERE email = $email;";

            if ($conn->query($sql) === TRUE) 
            {
                // Redirect to another page on successful registration
              echo "PassWord Reset Successfull";
               header("Location: ../../index.html");
               exit; // Terminate script after redirection
             } 
             else 
             {
              echo "Error: " . $sql . "<br>" . $conn->error;
             }
        }
    }
}

// Close connection
$conn->close();

 // Check if passwords match
        
    //             // SQL query to insert data
    //             $sql = "INSERT INTO `login` (`email`, `pass`) VALUES ('$email', '$password2');";
                
    //             // Execute SQL query
    //            
    //         } else {
    //             echo "Passwords do not match";
    //         }
    //     } else {
    //         echo "Email cannot be empty";
    //     }
    // } else {
    //     echo "Email and passwords are required.";
    // }
?>
