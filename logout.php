
<?php
    // //session and login holder
    // session_start();
    // $user_id = $_SESSION['user_id'];
    // if ($user_id == false) {
    //     header('location:..\index.php');
    // }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="../style-global.css">
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


        /* Center the content vertically and horizontally */
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 10vh;
            /* background-color: var(--gray); */
        }

        .logout-box {
            background-color: var(--white);
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: var(--black1);
        }

        p {
            font-size: 16px;
            margin-bottom: 20px;
            color: var(--black2);
        }

        /* Styling for buttons */
        .button-container {
            display: flex;
            justify-content: center;
        }

        .button {
            display: inline-block;
            padding: 10px 20px; 
            margin: 0 10px; 
            text-align: center;
            text-decoration: none;
            border: none;
            background-color: var(--blue); 
            color: var(--white); 
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logout-box">
            <h1>Are you sure, you want to Sign out?</h1>
            <a href="../_logout.php" class="button">Logout</a>
        </div>
    </div>
</body>
</html>
