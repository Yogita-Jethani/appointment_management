<?php
// session_start();
require_once($_SERVER["DOCUMENT_ROOT"]."/medical/pages/includes/functions.php");
// $employee_id = $_SESSION['employee_id'];

if(isset($_POST['add_doctor'])){
    //Checking whether the file was uploaded or not!
    if(isset($_FILES['doctor_image'])){
        $image_name = $_FILES['doctor_image']['name'];
        $image_size = $_FILES['doctor_image']['size'];
        $temp_name = $_FILES['doctor_image']['tmp_name'];
        $file_type = $_FILES['doctor_image']['type'];
        $file_extension = strtolower(end(explode(".", $image_name)));
        
        

    }
    $doctor_name = $_POST['doctor_name'];
    $doctor_email = $_POST['doctor_email'];
    $doctor_contact = $_POST['doctor_contact'];
    $doctor_experience = $_POST['doctor_experience'];
    $doctor_specialization = $_POST['doctor_specialization'];
    $doctor_degree = $_POST['doctor_degree'];
    
    $tablename = "doctor";
    $columns = "doctor_id , doctor_name , email, contact, experience, specialization, degree,image_extension";
    $values = "'doctor_name', '$doctor_email','$doctor_contact','$doctor_email',
    $doctor_experience,'$doctor_specialization','$doctor_degree','$file_extension'";
    
    $result = insert($tablename, $columns, $values);
    //doctor has been added
    
   echo $result;
    
    $doctor_id = mysqli_insert_id($connection);
    if(isset($_FILES['doctor_image'])){
        move_uploaded_file($temp_name, "../../../assets/doctor/images/".$doctor_id.".".$file_extension);
    }
    echo "ADDED";
    //$_SESSION['status']=DOCTOR_ADD_SUCCESS;
}
?>