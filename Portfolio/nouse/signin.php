<?php
session_start();
?>

<?php
 include 'dbcon.php';
 if(isset($_POST['submits'])){ 
    function cleaninput($field){
        $field = trim($field);
        $field = stripslashes($field);
        $field = htmlspecialchars($field);
        return $field;
      }

    $email =  cleaninput($_POST['email']);
    $password =  cleaninput($_POST['password']);

    $emailsearch = "select * from signup where email='$email'";
    $searchquery = mysqli_query($con, $emailsearch);
    $emailcount = mysqli_num_rows($searchquery);
    if($emailcount){

        $emailpass = mysqli_fetch_assoc($searchquery);
        $databasepassword = $emailpass['password'];

        $passdecode = password_verify($password,$databasepassword);

        if($passdecode){

            $_SESSION['name'] = $emailpass['name'];
            ?>
           <script>
            // alert("succesful");
            location.replace("indexnew.php");
            </script>
            <?php
        }
        else{
            echo "password incorect";
        }


    }
    else{
        echo"invalid email ";
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./form.css" />
</head>
<body>
<div class="Sign-in-box">
        <div class="formheading">Login Here</div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div class="form">
          <input type="text " name="email" autocomplete="off" required>
          <label for="name" class="label-name">
            <span class="content-name">Email</span>
          </label>
        </div>
        <div class="form">
          <input type="text " name="password" autocomplete="off" required>
          <label for="name" class="label-name">
            <span class="content-name">Password</span>
          </label>
        </div>
        <div class="sign-in-button">
          <input type="submit" name="submits" value="sign-in">
        </div>
        </form>
        <p>Not Registered Yet! <button class="reg-option-1"><a href="./register.php">Sign-up</a></button>
        </p>
</div>
  <br>
</body>
</html>