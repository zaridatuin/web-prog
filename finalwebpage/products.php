<?php
// Your database connection parameters
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

// Fetch all product categories from the database
$categoriesQuery = "SELECT DISTINCT category FROM products";
$categoriesResult = $conn->query($categoriesQuery);

// Check if there are categories
if ($categoriesResult->num_rows > 0) {
    // Fetch all categories into an array
    $categories = $categoriesResult->fetch_all(MYSQLI_ASSOC);
} else {
    // Handle the case when no categories are found
    $categories = array();
}

// Fetch products for each category
$productsByCategory = array();
foreach ($categories as $category) {
    $categoryName = $category['category'];

    $productsQuery = "SELECT * FROM products WHERE category='$categoryName'";
    $productsResult = $conn->query($productsQuery);

    // Check if there are products for the category
    if ($productsResult->num_rows > 0) {
        // Fetch all products for the category into an array
        $productsByCategory[$categoryName] = $productsResult->fetch_all(MYSQLI_ASSOC);

        // Format the prices for each product
        foreach ($productsByCategory[$categoryName] as &$productData) {
            $productData['formattedPrice'] = '₱' . number_format($productData['price'], 2);
        }
        unset($productData); // Unset to avoid potential side effects
    } else {
        // Handle the case when no products are found for the category
        $productsByCategory[$categoryName] = array();
    }
}

$conn->close();
?>