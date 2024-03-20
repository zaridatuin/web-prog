<?php
// Check if the form is submitted
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
  
    // Get user input from the form
    $username = $_POST['name'];
    $email = $_POST['Email'];
    $password = $_POST['Password']; // Store the password as plain text

    // Check if the username already exists
    $checkUsernameQuery = "SELECT * FROM profile WHERE username='$username'";
    $result = $conn->query($checkUsernameQuery);

    // Check if the password matches the confirm password
    $confirmPassword = $_POST['Confirm'];

    if ($result->num_rows > 0) {
        echo "Error: Username already exists. Please choose a different username.";
    } elseif ($_POST['Password'] !== $confirmPassword) {
        echo "Error: Passwords do not match.";
    } else {
        // Insert user data into the "users" table
        $sql = "INSERT INTO profile (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!"; // Return the success message
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
}
?>