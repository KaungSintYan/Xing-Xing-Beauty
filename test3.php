<?php

require_once ("dbconnection.php"); 

$teacher_id = $_GET['teacher_id'];
$treatment_id = $_GET['treatment_id']; 

// $teacher_treatment_query = "SELECT * FROM xy_teacher_treatment WHERE teacher_id = $teacher_id and treatment_id =".$treatment_id;
// $result = mysqli_query($connection,$teacher_treatment_query); 
// while($data = mysqli_fetch_assoc($result)){
//     $teacher_treatment_id = $data['id']; 
// }
// echo json_encode($teacher_treatment_id); 

// "SELECT xy_teacher_treatment.teacher_id, xy_teacher_treatment.treatment_id,xy_treatment.name FROM xy_teacher_treatment INNER JOIN xy_treatment ON xy_teacher_treatment.treatment_id = xy_treatment.id WHERE teacher_id=8";

$teacher_query = "SELECT xy_teacher_treatment.teacher_id, xy_teacher_treatment.treatment_id,xy_treatment.name FROM xy_teacher_treatment INNER JOIN xy_treatment ON xy_teacher_treatment.treatment_id = xy_treatment.id WHERE teacher_id = ".$teacher_id; 
$result = mysqli_query($connection,$teacher_query); 
$treatments = []; 
while($data = mysqli_fetch_assoc($result)){
    $treatments[] = $data; 
}
echo json_encode($treatments); 

// $teacher_treatment_query = "SELECT * FROM xy_teacher_treatment WHERE teacher_id = $teacher_id and treatment_id =".$treatment_id;
// $resultII = mysqli_query($connection,$teacher_treatment_query);
// while($data = mysqli_fetch_assoc($resultII)){
//     $teacher_treatment_id = $data['id']; 
// }

// $treatment_price_query = "SELECT * FROM xy_price WHERE teacher_treatment_id =".$teacher_treatment_id;
// $resultI = mysqli_query($connection,$treatment_price_query); 
// $materials = [];
// while($data = mysqli_fetch_assoc($resultI)){
//     $materials[] = $data; 
// }
// echo json_encode($materials); 



?>