<?php
// Include the dbconnection.php file
require_once 'db_connection.php';

// Function to sanitize user input
function sanitizeInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user input from the form
    $username = $_POST['username'];
    $password = sanitizeInput($_POST['password']);

    // Perform your database query to retrieve the hashed password
    // Replace this with your actual query logic
    $query = "SELECT password_hash FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password_hash'];

        // Verify the hashed password
        if (password_verify($password, $hashedPassword)) {
            // Successful login
            // Start the session and store the user information if needed
            session_start();
            $_SESSION['username'] = $username;

            // Redirect to hello.html
            header("Location: logged_user/home.php");
            exit();
        }
    }

    // Invalid credentials
    echo '<script>alert("Invalid username or password. Please try again.");</script>';
}
?>
