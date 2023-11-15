<?php

require_once ("dbconnection.php"); 

$treatment_id = $_GET['treatment_id']; 
$teacher_id = $_GET['teacher_id'];
// $teacher_treatment_id = $_GET['teacher_treatment_id']; 

$teacher_treatment_query = "SELECT * FROM xy_teacher_treatment WHERE teacher_id=$teacher_id and treatment_id=".$treatment_id; 
$result = mysqli_query($connection,$teacher_treatment_query); 
while($data = mysqli_fetch_assoc($result)){
    $teacher_treatment_id = $data['id']; 
} 

$treatment_price_query = "SELECT * FROM xy_price WHERE teacher_treatment_id=".$teacher_treatment_id;
$result = mysqli_query($connection,$treatment_price_query);
$materials = [];
while($data = mysqli_fetch_assoc($result)){
    $materials[] = $data;
}
echo json_encode($materials); 

// $teacher_treatment_query = "SELECT xy_teacher_treatment.teacher_id, xy_teacher_treatment.treatment_id, xy_price.material FROM xy_teacher_treatment INNER JOIN xy_price ON xy_teacher_treatment.price_id = xy_price.id WHERE teacher_id = ".$teacher_id; 
// $result = mysqli_query($connection,$teacher_treatment_query);
// $materials = [];
// while($data = mysqli_fetch_assoc($result)){
//     $materials[] = $data;
// }
// echo json_encode($materials); 
// $sql = "SELECT * FROM xy_price where teacher_treatment_id".$treatment_id.$teacher_treatment_id;
?>