<?php
error_log('Request received');
include "connect.php";

// Retrieve the row data from the POST request
$productId = $_POST['productId'];
$quantity = $_POST['quantity'];
$customerName = $_POST['customerName'];



// Prepare the SQL statement to insert the data into the sales table
$sql = "INSERT INTO sales (product_id, sales_quantity, customer_name) VALUES ('$productId', '$quantity', '$customerName')";
$result = mysqli_query($conn, $sql);

// Check if the insertion was successful
if ($result) {
  echo "Row data inserted successfully";
  
  // Subtract the quantity from the existing value in the products table
  $updateQuery = "UPDATE purchases SET quantity = (quantity - $quantity) WHERE product_id = $productId";
  $updateResult = mysqli_query($conn, $updateQuery);

  // Check if the subtraction was successful
  if ($updateResult) {
    echo "Quantity subtracted successfully";
  } else {
    echo "Error subtracting quantity: " . mysqli_error($conn);
  }
} else {
  echo "Error inserting row data: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
