<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "portfoliosignup";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
    ?> <script>    // alert("done connection")
    </script> <?php
}
else{
    ?> <script> alert("no connection"); </script> <?php
}
?>