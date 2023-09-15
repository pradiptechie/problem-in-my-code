
<?php
    // //session and login holder
    // session_start();
    // $user_id = $_SESSION['user_id'];
    // if ($user_id == false) {
    //     header('location:..\index.php');
    // }
    //include "connect.php";
    //$sql = "SELECT * FROM sales";
    //$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" href="../style-global.css"> -->
    <style>
        /* ================================================ Globals ================================================= */

        @import url("https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap");

        * {
        font-family: "Ubuntu", sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        :root {
            --blue: #2a2185;
            --white: #fff;
            --gray: #f4f4f4;
            --black1: #222;
            --black2: #999;
        }
        body {
            min-height: 100vh;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
        }
        /* ======================== End of Global ======================= */



        .container {
            background-color: var(--gray);
            margin: 0 auto; 
            padding: 5px;
        }

        h1 {
            text-align: center;
            background-color: var(--blue);
            color: var(--white);
            font-size: 24px;
            margin-bottom: 20px;

        }
        form {
            padding: 20px;
            text-align: center;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .container {
                padding: 10px; 
            }
            
            h1 {
                font-size: 20px; 
            }
        }

        th, label {
            color: var(--black1);
        }


        #salesTable {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        #salesTable th,
        #salesTable td {
            padding: 10px;
            border: 1px solid var(--black2);
        }

        #salesTable th {
            background-color: var(--gray);
        }

        #salesTable input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid var(--black2); 
            border-radius: 5px;
            background-color: var(--gray);
        }

        #salesTable input[type="total"] {
            width: 100%;
            padding: 5px;
            border: 1px solid var(--black2); 
            border-radius: 5px;
            background-color: var(--gray);
        }

        #salesTable button {
            width: 100%;
            padding: 8px;
            background-color: var(--blue); 
            color: var(--white); 
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        #customer {
            width: 100%;
            border-collapse: collapse;
        }

        #customer td {
            padding: 10px;
            border: 1px solid var(--black2);
        }

        #customer input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid var(--black2); 
            border-radius: 5px;
            background-color: var(--gray); 
        }

        #sales_update {
            width: 100%;
            padding: 12px;
            background-color: var(--blue); 
            color: var(--white); 
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        #sales_update:hover {
            background-color: #0056b3; 
        }

        #sales_update:focus {
            outline: none;
        }
        #salesTable button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<!-- section of sales booth -->
<div class="container">
  <h1>Sales Booth</h1>
  <script src="sales.js"></script>

  <form id="salesForm" method="POST">
    <table id="salesTable">
        <tr>
            <th><label for="product_id" >Product Id</label></th>
            <th><label for="product_name">Product Name</label></th>
            <th><label for="product_sp">Price</label></th>
            <th><label for="quantity"> Quantity</label></th>
            <th><label for="total"> Total</label></th>
        </tr>
        <tr>
            <td><input type="text" id="show_product_id" onblur="fetchProduct()"> </td>
            <td><input type="text" id="show_product_name"></td>
            <td><input type="text" id="show_product_sp"></td>
            <td><input type="text" id="show_quantity"></td>
            <td><input type="total" id="show_total"  onfocus="calculate()"></td>
      </tr>       
      <tr>
        <td colspan="2">
            <button type="button" onclick="addTableRow()">Add Row</button>
          </td>
        <td colspan="2"><button type="button" onfocus="totalpayment()">Total</button>
        </td>
        <td><input type="text" id="show_grand_total"></td>
      </tr>  
    </table>
    <table id = "customer">
      <tr>
        <td>Customer Name</td>
        <td><input type="text" id="customer_name"></td>
      </tr>
    </table>
    <div><button type="button" id="sales_update" onclick="salesupdate()">Complete</button></div>
  </form>
</div>
<!-- sales record section end -->


<!-- <div>
    <div>
        Sales Records
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Sales_ID</th>
                    <th>Product_ID</th>
                    <th>Product_Name</th>
                    <th>Quantity</th>
                    <th>Selling_Rate</th>
                    <th>Customer_Name</th>
                    <th>Total_Amount</th>


                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Date</th>
                    <th>Sales_ID</th>
                    <th>Product_ID</th>
                    <th>Product_Name</th>
                    <th>Quantity</th>
                    <th>Selling_Rate</th>
                    <th>Customer_Name</th>
                    <th>Total_Amount</th>

                </tr>
            </tfoot>
            <tbody>
               // php code deleted from here ...
            </tbody>

        </table>
    </div>
</div> -->
</body>
</html>
