<?php

require_once("../../includes/db.php");

// session_start();
// $employee_id = $_SESSION['employee_id'];
if(isset($_POST['deleteBtn'])){
    $doctor_id = $_POST['doctor_id'];
    $query = "update  doctor set is_deleted = 1 where doctor_id = $doctor_id";
    
    mysqli_query($connection,$query);
    echo "Deleted Successfully";
    
}


?>