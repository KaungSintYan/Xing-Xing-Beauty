<?php

require_once("dbconnection.php");

$treatment_id = $_GET['treatment_id']; 
$teacher_id = $_GET['teacher_id']; 

$teacher_treatment_query = "SELECT * FROM xy_teacher_treatment WHERE teacher_id=$teacher_id and treatment_id=".$treatment_id; 
$result = mysqli_query($connection,$teacher_treatment_query);
while($data = mysqli_fetch_assoc($result)){
    $teacher_treatment_id = $data['id']; 
}

$treatment_price_query = "SELECT * FROM xy_price WHERE teacher_treatment_id=".$teacher_treatment_id;
$result = mysqli_query($connection,$treatment_price_query);
$materils = [];
while($data = mysqli_fetch_assoc($result)){
    $materils[] = $data; 
}
echo json_encode($materils); 

?>