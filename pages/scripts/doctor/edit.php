<?php

require_once("../../includes/functions.php");
require_once("../../includes/status-constants.php");
session_start();

if(isset($_POST['edit_customer'])){
    $doctor_id = $_POST['doctor_id'];
   $doctor_name = $_POST['doctor_name'];
    $doctor_email = $_POST['doctor_email'];
    $doctor_contact = $_POST['doctor_contact'];
    $doctor_experience = $_POST['doctor_experience'];
    $doctor_specialization = $_POST['doctor_specialization'];
    $doctor_degree = $_POST['doctor_degree'];
    
    $employee_id = $_SESSION['employee_id'];
    
    $query = " update doctor set doctor_name = '$doctor_name' ,email = '$doctor_email', contact = '$doctor_contact' ,experience='$doctor_experience',specialization ='$doctor_specialization', degree='$doctor_degree' where doctor_id = $doctor_id ";
    
    $result = mysqli_query($connection,$query);
    checkQueryResult($result);
    
    
    // $_SESSION['status'] = DOCTOR_EDIT_SUCCESS;
    header("Location:http://".BASE_SERVER."/medical/pages/manage-doctor.php");
    exit();
}

?>