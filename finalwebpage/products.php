<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalwebpage";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$categoriesQuery = "SELECT DISTINCT category FROM products";
$categoriesResult = $conn->query($categoriesQuery);

if ($categoriesResult->num_rows > 0) {
   
    $categories = $categoriesResult->fetch_all(MYSQLI_ASSOC);
} else {
  
    $categories = array();
}


$productsByCategory = array();
foreach ($categories as $category) {
    $categoryName = $category['category'];

    $productsQuery = "SELECT * FROM products WHERE category='$categoryName'";
    $productsResult = $conn->query($productsQuery);

   
    if ($productsResult->num_rows > 0) {
       
        $productsByCategory[$categoryName] = $productsResult->fetch_all(MYSQLI_ASSOC);

       
        foreach ($productsByCategory[$categoryName] as &$productData) {
            $productData['formattedPrice'] = '₱' . number_format($productData['price'], 2);
        }
        unset($productData); 
    } else {
       
        $productsByCategory[$categoryName] = array();
    }
}

$conn->close();
?>