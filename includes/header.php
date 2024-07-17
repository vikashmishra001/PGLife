<div class="header sticky-top">
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="https://www.pglifes.com/index.php">
            <img src="img/logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
            <ul class="navbar-nav">
                                    <li class="nav-item">
                        <a class="nav-link" href="https://www.pglifes.com/#" data-toggle="modal" data-target="#signup-modal">
                            <i class="fas fa-user"></i>Signup
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.pglifes.com/#" data-toggle="modal" data-target="#login-modal">
                            <i class="fas fa-sign-in-alt"></i>Login
                        </a>
                    </li>
                            </ul>
        </div>
    </nav>
</div>

<div id="loading">
</div>

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
    include "includes/signup_model.php";