<?php
// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "finalwebpage";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get user input from the login form
    $loginUsername = $_POST['name'];
    $loginPassword = $_POST['Password'];

    // Check if the username and password match a record in the "profile" table
    $checkLoginQuery = "SELECT * FROM profile WHERE username=? AND password=?";
    $stmt = $conn->prepare($checkLoginQuery);
    $stmt->bind_param("ss", $loginUsername, $loginPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Login successful!";
        // You can set session variables, redirect, etc. for a successful login
    } else {
        echo "Error: Incorrect username or password.";
    }

    // Close the database connection
    $conn->close();
}
?>