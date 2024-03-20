<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "finalwebpage";


    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST['name'];
    $email = $_POST['Email'];
    $password = $_POST['Password']; 
    $address = $_POST['address'];
    $number = $_POST['number'];

  
    $join_date = date("Y-m-d H:i:s");

   
    $checkUsernameQuery = "SELECT * FROM profile WHERE username='$username'";
    $result = $conn->query($checkUsernameQuery);

   
    $confirmPassword = $_POST['Confirm'];

    if ($result->num_rows > 0) {
        echo "Error: Username already exists. Please choose a different username.";
    } elseif ($_POST['Password'] !== $confirmPassword) {
        echo "Error: Passwords do not match.";
    } else {
        
        $sql = "INSERT INTO profile (username, email, password, address, number, join_date) 
                VALUES ('$username', '$email', '$password', '$address', '$number', '$join_date')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!"; 
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    
    $conn->close();
}
?>