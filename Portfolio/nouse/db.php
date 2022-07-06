
  <?php
   include dbcon.php;
  if(isset($_POST['submit'])){ 
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
  
    $pass=password_hash($password, PASSWORD_BCRYPT);
    $confirmpass=password_hash($confirmpassword, PASSWORD_BCRYPT);  
    
    $emailquery = "select * from signup where email='$email'";
    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
      echo "email already present";
    }
    else{
      if(password === $confirmpassword){
        $insertquery = "insert into signup(name,email,password,confirmpassword, phone) values('$name','$email','$pass','$confirmpass','phone')";
        $iquery = mysqli_query($con,$insertquery);
    
      if($iquery){
          ?>
          <script>
              alert("inserted successfully")
          </script>
          <?php
      }
      else{
          ?>
          <script>
              alert("no insertion");
          </script>
          <?php
      }


      }else{
        echo "password not matched";
      }
    }
  
  }
  
  ?>