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


    <link rel="stylesheet" type="text/css" href="styles/dashboard.css">

    <!-- nav start -->
    <link rel="stylesheet" href="styles/nav.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <!-- nav end -->

</head>

<body>
    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="indexnew.php"><i class="fas fa-tachometer-alt"></i>HOME</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="register.php"><i class="far fa-address-book"></i>REGISTER</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="tools.php"><i class="far fa-clone"></i>Components</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Calendar</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Charts</a>
                </li> -->
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard.php"><i class="far fa-copy"></i>DASHBOARD</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="full">
        <div class="title">
            <h3 class="dark-color">CRP 2022</h3>
        </div><br>

        <div class="mainabout">
            <div class="image">
                <div class="avatar">
                    <img  src="https://bootdey.com/img/Content/avatar/avatar7.png" id="avatarImg" title="" alt="">
                </div>
            </div>

            <div class="details">
                <div class="media">
                    <div> <label>Email- </label></div>
                    <div>
                        <p id="email">
                            <?php echo $_SESSION['email'];?>
                        </p>
                    </div>
                </div>
                <div class="media">
                    <div> <label>Phone- </label></div>
                    <div>
                        <p id="mobile">
                            <?php echo $_SESSION['phone'];?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="outsideabout">
            <div class="insideabout1">
                <div class="common">
                    <h6 id="name">
                        <?php echo $_SESSION['name'];?>
                    </h6>
                </div>
                <div class="common">
                    <!-- <button onclick="logout()">Log Out</button> -->
                    <button><a href="./logout.php">logout</a></button>
                </div>
            </div>
            <div class="insideabout2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat magnam corrupti tempora magni
                    architecto ipsam cupiditate quaerat vero hic sed!</p>
            </div>
        </div>
    </div><br><br><br><br>


    <div class="fullb">
        <div class="titleb">
            <h3 class="dark-color">CRP 2022</h3>
        </div>

        <div class="mainaboutb">
            <div class="imageb">
                <div class="avatarb">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" id="avatarImgb" title="" alt="">
                </div>
            </div>
            <div class="insideabout1b">
                <div class="commonb">
                    <h6 id="name">
                        <?php echo $_SESSION['name'];?>
                    </h6>
                </div>
                <div class="commonb">
                    <!-- <button ><a href="./logout.php">Log Out</a></button> -->
                    <button><a href="./logout.php">logout</a></button>
                </div>
            </div>


        </div>
        <div class="outsideaboutb">
            <div class="detailsb">
                <div></div>
                <div class="mediab">
                    <div> <label>Email - </label></div>
                    <div>
                        <p id="email">
                            <?php echo $_SESSION['email'];?>
                        </p>
                    </div>
                </div>
                <div class="mediab">
                    <div> <label>Phone - </label></div>
                    <div>
                        <p id="mobile">
                            <?php echo $_SESSION['phone'];?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="insideabout2b">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat magnam corrupti tempora magni
                    architecto ipsam cupiditate quaerat vero hic sed!</p>
            </div>
        </div>

    </div><br><br>





    <script type="text/javascript">
        function getContent() {


            let a =  "<?php echo $_SESSION['gender'];?>";
            console.log(a);

            if (a == "M") {
                document.getElementById("avatarImg").src = "./img/SBI.png";
            }
            else {
                document.getElementById("avatarImg").src = "./img/SGI.png";
            }
            if (a == "M") {
                document.getElementById("avatarImgb").src = "./img/SBI.png";
            }
            else {
                document.getElementById("avatarImgb").src = "./img/SGI.png";
            }

        }
        getContent();
    </script>

    <!-- nav script starts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script src="scripts/nav.js"></script>

    <!-- nav script ends -->
</body>

</html>