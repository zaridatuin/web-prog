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

// Fetch DISTINCT product names from the database
$productsQuery = "SELECT DISTINCT productname FROM products";
$productsResult = $conn->query($productsQuery);

// Check if the query execution was successful
if (!$productsResult) {
    die("Query failed: " . $conn->error);
}

// Check if there are product names
if ($productsResult->num_rows > 0) {
    // Fetch all product names into an array
    $productNames = $productsResult->fetch_all(MYSQLI_ASSOC);
} else {
    // Handle the case when no product names are found
    $productNames = array();
}

// Fetch products for each product name
$productsByProductName = array();
foreach ($productNames as $productNameData) {
    $productName = $productNameData['productname'];

    $productsQuery = "SELECT * FROM products WHERE productname='$productName'";
    $productsResult = $conn->query($productsQuery);

    // Check if the query execution was successful
    if (!$productsResult) {
        die("Query failed: " . $conn->error);
    }

    // Check if there are products for the product name
    if ($productsResult->num_rows > 0) {
        // Fetch all products for the product name into an array
        $productsByProductName[$productName] = $productsResult->fetch_all(MYSQLI_ASSOC);

        // Format the prices for each product
        foreach ($productsByProductName[$productName] as &$productData) {
            $productData['formattedPrice'] = '₱' . number_format($productData['price'], 2);
        }
        unset($productData); // Unset to avoid potential side effects
    } else {
        // Handle the case when no products are found for the product name
        $productsByProductName[$productName] = array();
    }
}

// Fetch DISTINCT categories from the database using prepared statements
$distinctCategoriesQuery = "SELECT DISTINCT category FROM products";
$stmt = $conn->prepare($distinctCategoriesQuery);
$stmt->execute();
$stmt->bind_result($category);
$distinctCategories = array();
while ($stmt->fetch()) {
    $distinctCategories[] = $category;
}
$stmt->close();

// Fetch all product data
$allProductsQuery = "SELECT * FROM products";
$allProductsResult = $conn->query($allProductsQuery);

$productNames = [];
$productsByProductName = [];

if ($allProductsResult->num_rows > 0) {
    while ($row = $allProductsResult->fetch_assoc()) {
        $productName = $row['productname'];
        $category = $row['category'];

        // Group products by product name
        $productsByProductName[$productName][] = [
            'description' => $row['description'],
            'price' => $row['price'],
            // Add other product details as needed
        ];

        $productNames[] = [
            'productname' => $productName,
            'category' => $category,
            // Add other product details as needed
        ];
    }
}

$conn->close();
?>


