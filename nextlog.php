<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Link  -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&family=Work+Sans:wght@700;900"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">

    <title>pickNdrop Services</title>
</head>

<body>
    <!-- NAVIGATION BAR  -->
    <nav class="navbar sticky-top navbar-expand-md">
        <a class="navbar-brand fs-3 ms-3 " href="Home.html">
            <img class="logo" src="assets/IMG/placeholder.png" alt="" height="30px" width="35px">
            <!-- pickNdrop -->
            <font color="#13375b">pickNdrop</font>
        </a>
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-target="#btn">
            <i class='bx bx-menu'></i>
        </button>
        <div class="collapse navbar-collapse " id="btn">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link mx-3" href="./registration.php">
                        <button class="btn1">
                            
                            Publish Ride
                        </button>
                    </a>
                </li>
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <font color="#13375b" class="nav-link mx-3 btn1"><?php 
                                                                   echo $_SESSION["name"];
                                                                   echo" ". $_SESSION["lname"]
                                                                ?>
                </font>
                </li>

                <li class="nav-item">
                    
                        <button class="btn1 nav-link mx-3">
                            <img src="assets/IMG/login.png" alt="" height="35px" width="35px" >
                            
                        </button>
                    
                </li>
            </ul>
        </div>
    </nav>

    <!-- BANNER AND SEARCH BUTTONS -->
    <div class="banner-container1">
       <div class="banner-contents">
        <div class="tag">
            <h1><b>EASY RIDE!</b></h1><br>
        </div>
        <div class="container-fluid">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Leaving from..." aria-label="Search">
            </form>
        </div>
        <div class="container-fluid">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Going to..." aria-label="Search">
            </form>
        </div>
        
            <button type="button" class="btn btn-light my-4">SEARCH</button>
        
       </div>
    </div>



</body>

</html>