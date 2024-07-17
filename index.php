<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home page</title>
 <?php
 include "includes/head_link.php";
 ?>
  <link rel="stylesheet" href="css/home.css">
 
 <link rel="stylesheet" href="CSS2.CSS">
 <link rel="stylesheet" href="css/all.css">
</head>
<body>
    <?php
    include "includes/header.php";
?>

    <div class="banner-container">
        <h2 class="white pb-3">Happiness per Square Foot</h2>

        <form id="search-form" action="https://www.pglifes.com/property_list.php" method="GET">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id="city" name="city" placeholder="Enter your city to search for PGs">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="city-heading">
            Major Cities
        </h1>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="https://www.pglifes.com/property_list.php?city=Delhi">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img">
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="https://www.pglifes.com/property_list.php?city=Mumbai">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img">
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="https://www.pglifes.com/property_list.php?city=Bengaluru">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img">
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="https://www.pglifes.com/property_list.php?city=Hyderabad">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img">

                    </div>
                </a>
            </div>
        </div>
    </div>

               
                <?php
                include "includes/signup_modal.php";
                include "includes/login_modal.php";
                include "includes/footer.php";
                
                ?>

<script type="text/javascript" src="./Welcome _ PG Life_files/jquery.js.download"></script>
<script type="text/javascript" src="./Welcome _ PG Life_files/bootstrap.min.js.download"></script>
<script type="text/javascript" src="./Welcome _ PG Life_files/common.js.download"></script>


</body>
</html>