<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalwebpage";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = 1;


$stmt = $conn->prepare("SELECT username, email, address, number, join_date FROM profile WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();


$result = $stmt->get_result();


if ($result->num_rows > 0) {
 
    $row = $result->fetch_assoc();

  
    echo json_encode($row);
} else {
    echo json_encode(array('error' => 'User not found'));
}


$stmt->close();
$conn->close();
?>