<?php
   session_start();

   if(!isset($_SESSION['name'])){
     header('location:./register.php');
   }

   ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/tools.css">


    
  <!-- nav start -->
  <link rel="stylesheet" href="styles/nav.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
  <!-- nav end -->

</head>

<body>
<nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="indexnew.php"><i class="fas fa-tachometer-alt"></i>HOME</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="register.php"><i class="far fa-address-book"></i>REGISTER</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link active" href="tools.php"><i class="far fa-clone"></i>Components</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Calendar</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Charts</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php"><i class="far fa-copy"></i>DASHBOARD</a>
                </li>
            </ul>
        </div>
  </nav>
    <div class="tools">
        <div class="tool">
            <p>tool</p>
            <div id="tool1">
                <button id="btn1">svs</button>
                <div class="container"></div>
            </div>
        </div>

        <div class="tool">
            <p>tool</p>
            <div id="tool2">
                <button id="btn2">svs</button>
                <div class="container"></div>
            </div>
        </div>

        <div class="tool">
            <p>tool</p>
            <div id="tool3">
                <button id="btn3">svs</button>
                <div class="container"></div>
            </div>
        </div>

        <div class="tool">
            <p>tool</p>
            <div id="tool4">
                <button id="btn4">svs</button>
                <div class="container"></div>
            </div>
        </div>

        <div class="tool">
            <p>tool</p>
            <div id="tool5">
                <button id="btn5">svs</button>
                <div class="container"></div>
            </div>
        </div>

        <div class="tool">
            <p>tool</p>
            <div id="tool6">
                <button id="btn6">svs</button>
                <div class="container"></div>
            </div>
        </div>

        <div class="tool">
            <p>tool</p>
            <div id="tool7">
                <button id="btn7">svs</button>
                <div class="container"></div>
            </div>
        </div>

        <div class="tool">
            <p>tool</p>
            <div id="tool8">
                <button id="btn8">svs</button>
                <div class="container"></div>
            </div>
        </div>

    </div>


</body>
<script src="scripts/tool.js"></script>


  <!-- nav script starts -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
  <script src="scripts/nav.js"></script>
  
  <!-- nav script ends -->

</html>