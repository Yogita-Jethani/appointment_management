<?php


require_once("../../includes/db.php");
require_once("../../includes/functions.php");
$columns=array("doctor_name","doctor_email","contact","experience","specialization","degree","");
$query="SELECT doctor_id, doctor_name, email,contact,experience,specialization,degree,image_extension from doctor where is_deleted = 0";


$number_filtered_row=mysqli_num_rows(mysqli_query($connection,$query));
//echo $query.$query1;
$result=mysqli_query($connection,$query);

$data=array();
while($row=mysqli_fetch_assoc($result)){
    $sub_array=array();
    $image_name = $row['doctor_id'] . "." . $row['image_extension'];
    if($row['image_extension'] != "")
        $image_path = "<img height = '75px' class = 'img-responsive' src ='http://localhost/medical/assets/doctor/images/" .$image_name . "'>";
    else
        $image_path = '<img height="75px" class ="img-responsive" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="no image" />';
    $sub_array[] = $image_path;
//   
    $sub_array[]=$row["doctor_name"];
    $sub_array[]=$row["doctor_email"];
    $sub_array[]=$row["contact"];
    $sub_array[]=$row["experience"];
    $sub_array[]=$row["specialization"];
    $sub_array[]=$row["degree"];
    $sub_array[]="<button class='fa fa-pencil btn blue edit' id='".$row['doctor_id']."' data-toggle='modal' data-target='#editModal'></button>";
    $sub_array[]="<button class='fa fa-trash btn red delete' id='".$row['doctoerid']."' data-toggle='modal' data-target='#deleteModal'></button>";
    //i my have to add some more columns!
    
    $data[]=$sub_array;
}

function get_all_data($connection){
    $query="SELECT image_extension,doctor_id, doctor_name, email,contact,experience,specialization,degree  from doctor where is_deleted = 0";
    return(mysqli_num_rows(mysqli_query($connection,$query)));
}

$output= array(
    "draw"=>intval($_POST['draw']),
    "recordsTotal"=>get_all_data($connection),
    "recordsFiltered"=>$number_filtered_row,
    "data"=>$data,
);


echo json_encode($output);


?>











