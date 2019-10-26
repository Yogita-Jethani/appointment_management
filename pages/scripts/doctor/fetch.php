<?php

require_once("../../includes/db.php");

if(isset($_POST['doctor_id'])){
    $doctor_id = $_POST['doctor_id'];
    $query = "select doctor_name,email,contact,experience,specialization,degree from doctor where doctor_id = $doctor_id ";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
}

?>