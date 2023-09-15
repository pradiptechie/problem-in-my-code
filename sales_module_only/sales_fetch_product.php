<?php
    include "connect.php";

if (isset($_GET['product_id'])) {
  $productId = $_GET['product_id'];

  // Perform a database query to fetch product details based on the product ID
  $sql = "SELECT product_name, selling_rate FROM purchases WHERE product_id = $productId";
  $result = mysqli_query($conn, $sql);

  if ($result && mysqli_num_rows($result) > 0) {
    $productDetails = mysqli_fetch_assoc($result);
    echo $productDetails['product_name'] . ',' . $productDetails['selling_rate'];
  } else {
    echo ''; // Return an empty string if product ID is not found
  }
}