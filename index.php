<?php
    // //session and login holder
    // session_start();
    // $user_id = $_SESSION['user_id'];
    // if ($user_id == false) {
    //     header('location:..\index.php');
    // }
    include 'connect.php';

    // $sql = "SELECT username FROM `users_table` WHERE `users_table`.`user_id` = $user_id";
    // $result = mysqli_query($conn, $sql);

    // if ($result && mysqli_num_rows($result) > 0) {
    //     $row = mysqli_fetch_assoc($result);
    //     $username = $row['username'];
    // }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMS</title>
 <link rel="stylesheet" href="index_style.css">
 <!-- <link rel="stylesheet" href="../style-global.css"> -->
</head>
<body>
    <div id="top-nav">
        <div id="system-name">
            <span class="icon">
                <ion-icon name="bag-handle"></ion-icon>
            </span>
            SIMS
        </div>

        <div id="date-time">
            <span id="current-date-time"></span>
        </div>      
        <!-- <div class="search">
            <label>
                <input type="text" placeholder="Search here">
                <ion-icon name="search-outline"></ion-icon>
            </label>
        </div> -->
        <div id="user-welcome" class="user-welcome">
            <span><?php echo "Welcome, ".$username ?></span>
            <div class="user">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQquq9tRUa7tByP7rHLzcP3PK3O2KBInCaSpWGMtEtPZOaOZy30XXwJKgUm-OlefAZ-Itc&usqp=CAU" alt="user Img">
            </div>
        </div>
    </div>
    
    <div id="container">
        <nav id="left-nav">
            <ul>
                <li>
                    <a href="#dashboard">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#Sales">
                        <span class="icon">
                            <ion-icon name="card-outline"></ion-icon>
                        </span>
                        Sales 
                    </a>
                </li>
                <li>
                    <a href="#purchases">
                        <span class="icon">
                            <ion-icon name="cart-outline"></ion-icon>
                        </span>
                        Purchases
                    </a>
                </li>
                <li>
                    <a href="#inventory">
                        <span class="icon">
                            <ion-icon name="briefcase-outline"></ion-icon>
                        </span>
                        Inventory 
                    </a>
                </li>
                <li>
                    <a href="#customers">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        Customers
                    </a>
                </li>
                <li>
                    <a href="#password">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        Password 
                    </a>
                </li>
                <li>
                    <a href="#logout">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        Sign Out 
                    </a>
                </li>
            </ul>
        </nav>
        
        <main id="main-content">
            <!-- Content of each section loaded here dynamically -->
        </main>
    </div>
    <!-- ---------main js file------ -->
    <script src="index_script.js"></script>
    <!------------icon packs--------------- -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
