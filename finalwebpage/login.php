<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "finalwebpage";

   
    $conn = new mysqli($servername, $username, $password, $dbname);

 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

  
    $loginUsername = $_POST['name'];
    $loginPassword = $_POST['Password'];

   
    $checkLoginQuery = "SELECT * FROM profile WHERE username=? AND password=?";
    $stmt = $conn->prepare($checkLoginQuery);
    $stmt->bind_param("ss", $loginUsername, $loginPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
       
        session_start();
        
      
        $_SESSION['email'] = $loginUsername;
        
      
        echo "success";
        exit(); 
    } else {
   
        echo "error";
        exit(); 
    }

    
    $conn->close();
}
?>