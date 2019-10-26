<?php 

require_once("../includes/db.php");
require_once("../includes/functions.php");

session_start();

if(isset($_POST['submit'])){
   echo"Username: ". $username = $_POST['username'];
    echo"Password: ".$password = $_POST['password'];
}

$username = mysqli_real_escape_string($connection , $username);
$password = mysqli_real_escape_string($connection , $password);

$query = "SELECT * FROM user where email = '$username' & password='$password'";

$select_user_details = mysqli_query($connection,$query);

checkQueryResult($select_user_details);


//proceed if there is data returned otherwise there would be errors

if(mysqli_num_rows($select_user_details)>1){
    die("how");
    
}
else{
    
    header("Location: ../index.php");
}
//if i m coming here  thet means i have exactly 0/1 row!
//$db_password = "";


?>