<?php
session_start();
?>

<?php
 include 'dbcon.php';

 $name = $email = $password = $confirmpassword = $phone = $gender = "";
 $error = "";
 $nameerror = $emailerror = $phoneerror = $passworderror ="";
 $pasvalerror = $emavalerror ="";

 $emails = $passwords = "";

  if(isset($_POST['submit'])){
    function cleaninput($field){
      $field = trim($field);
      $field = stripslashes($field);
      $field = htmlspecialchars($field);
      return $field;
    }

      $name =  cleaninput($_POST['name']);
      $email =  cleaninput($_POST['email']);
      $password =  cleaninput($_POST['password']);
      $confirmpassword =  cleaninput($_POST['confirmpassword']);
      $phone =  cleaninput($_POST['phone']);
      $gender =  cleaninput($_POST['gender']);

      $pass = password_hash($password, PASSWORD_BCRYPT);
      $confirmpass = password_hash($confirmpassword, PASSWORD_BCRYPT);  

    if(isset($name) && $name != "" && isset($email) && $email != "" && isset($password) && $password != "" && isset($confirmpassword) && $confirmpassword != "" && isset($phone) && $phone != "" && isset($gender) && $gender != ""){
  
      if (! preg_match ("/^[a-z A-z]*$/", $name) ) {
        $nameerror = "only letter and white spaces are allowed";
      }
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailerror = "enter correct email";
      }
      if($password!=$confirmpassword){
        $passworderror="passwords did not matched";
      }
      if(!filter_var($phone, FILTER_SANITIZE_NUMBER_INT)){
        $phoneerror="enter correct number";
      }

      $emailquery = "select * from signup where email='$email'";
      $query = mysqli_query($con, $emailquery);
      $emailcount = mysqli_num_rows($query);
      $phonequery = "select * from signup where phone='$phone'";
      $query = mysqli_query($con, $phonequery);
      $phonecount = mysqli_num_rows($query);
      if($phonecount>0||$emailcount>0){
        if($emailcount>0){
          ?> <script>alert("Email already registered");</script> <?php
        }
        if($phonecount>0){
          ?> <script>alert("phone already registered");</script> <?php
        }
      }
      else{
        if($password === $confirmpassword && $nameerror=="" && $emailerror=="" && $phoneerror==""){
            $insertquery = "insert into signup(name,email,password,confirmpassword,phone,gender) values('$name','$email','$pass','$confirmpass','$phone','$gender')";
            $iquery = mysqli_query($con,$insertquery);
        
            if($iquery){
              ?> <script> /*alert("inserted successfully"); */</script> <?php
            }
            else{
                ?> <script> /*alert("no insertion");*/ </script> <?php
            }
        }
      }
    }
    else{
       $error = "adcaedc";
    }
  }

  if(isset($_POST['submits'])){ 
    function cleaninput($field){
        $field = trim($field);
        $field = stripslashes($field);
        $field = htmlspecialchars($field);
        return $field;
      }

    $emails =  cleaninput($_POST['emails']);
    $passwords =  cleaninput($_POST['passwords']);

    $emailsearch = "select * from signup where email='$emails'";
    $searchquery = mysqli_query($con, $emailsearch);
    $emailcount = mysqli_num_rows($searchquery);
    if($emailcount){

        $emailpass = mysqli_fetch_assoc($searchquery);
        $databasepassword = $emailpass['password'];

        $passdecode = password_verify($passwords,$databasepassword);

        if($passdecode){

            $_SESSION['name'] = $emailpass['name'];
            $_SESSION['email'] = $emailpass['email'];
            $_SESSION['phone'] = $emailpass['phone'];
            $_SESSION['gender'] = $emailpass['gender'];
            ?>
           <script>
            // alert("succesful");
            location.replace("dashboard.php");
            </script>
            <?php
        }
        else{
            // $emavalerror = "adcaedc";
            // echo "password incorect";
            // header('location:./register.php#Sign-in-box');
            ?>

            <?php
        }
    }
    else{
        // $pasvalerror = "adcaedc";
        // echo"invalid email ";
    }
    echo "";
  }
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="styles/form.css"/>



  <link rel="stylesheet" href="styles/nav.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
 
</head>

<body>
   <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">Portfolio</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="indexnew.php"><i class="fas fa-tachometer-alt"></i>HOME</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="register.php"><i class="far fa-address-book"></i>REGISTER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tools.php"><i class="far fa-clone"></i>Components</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php"><i class="far fa-copy"></i>DASHBOARD</a>
                </li>
            </ul>
        </div>
   </nav>
  <br>
  <div class="transform">
    <div class="trans">
      <div id="Sign-up-box">
        <div class="formheading">Register Here</div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
          <div class="form">
            <input type="text " name="name" autocomplete="off" required value="<?php echo $name ?>">
            <label for="name" class="label-name">
              <span class="content-name">Full Name</span>
            </label>
          </div>
          <div class="errorname">
            <?php
           if($nameerror){
            echo '<span style="display:block;">'.$nameerror.'</span>';
             }
           ?>
          </div>


          <div class="form">
            <input type="text " name="email" autocomplete="off" required value="<?php echo $email?>">
            <label for="name" class="label-name">
              <span class="content-name">E-Mail</span>
            </label>
          </div>
          <div class="erroremail">
            <?php
           if($emailerror){
            echo '<span style="display:block;">'.$emailerror.'</span>';
             }
           ?>
          </div>


          <div class="form">
            <input type="text " name="password" autocomplete="off" required value="<?php echo $password?>">
            <label for="name" class="label-name">
              <span class="content-name">Password</span>
            </label>
          </div>
          <div class="a">
              <!-- 
                tut
               -->
          </div>


          <div class="form">
            <input type="text " name="confirmpassword" autocomplete="off" required
              value="<?php echo $confirmpassword?>">
            <label for="name" class="label-name">
              <span class="content-name">Confirm Password</span>
            </label>
          </div>
          <div class="errorpassword">
            <?php
           if($passworderror){
            echo '<span style="display:block;">'.$passworderror.'</span>';
             }
           ?>
          </div>


          <div class="form">
            <input type="text" name="phone" autocomplete="off" required value="<?php echo $phone?>">
            <label for="number" class="label-name">
              <span class="content-name">Mobile No.</span>
            </label>
          </div>
          <div class="errorphone">
            <?php
           if($phoneerror){
            echo '<span style="display:block;">'.$phoneerror.'</span>';
             }
           ?>
          </div>


          <div class="gender-details">
            <input type="radio" name="gender" id="dot-1" checked value="M">
            <input type="radio" name="gender" id="dot-2" value="F">
            <!-- <input type="radio" name="gender" id="dot-3"> -->
            <span class="gender-title">Gender</span>
            <div class="gender-category">
              <label for="dot-1">
                <span class="dot-one"></span>
                <span class="gender">Male</span>
              </label>
              <label for="dot-2">
                <span class="dot-two"></span>
                <span class="gender">Female</span>
              </label>
              <!-- <label for="dot-3">
              <span class="dot-three"></span>
              <span class="gender">Prefer not to say</span>
            </label> -->
            </div>
          </div>
          <div class="register-button">
            <input type="submit" name="submit" value="Register">
          </div>
        </form>
        <br><p>Already Registered? <button id="reg-option-1">Sign-In</button>
        </p>
      </div>

      <div id="Sign-in-box">
        <div class="formheading">Login Here</div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div class="form">
          <input type="text " name="emails" autocomplete="off" required>
          <label for="name" class="label-name">
            <span class="content-name">Email</span>
          </label>
        </div>
        <div class="form">
          <input type="text " name="passwords" autocomplete="off" required>
          <label for="name" class="label-name">
            <span class="content-name">Password</span>
          </label>
        </div>
        <div class="sign-in-button">
          <input type="submit" name="submits" value="Sign-In">
        </div>
        </form>
        <br> <p>Not Registered Yet! <button id="reg-option-2" >Sign-Up</button>
        </p>
      </div>
    </div>
  </div>
  <br>
  
  
  
</body>


  <!--  -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
  <script src="scripts/nav.js"></script>
  <!--  -->

<script src="scripts/app.js"></script>

</html>