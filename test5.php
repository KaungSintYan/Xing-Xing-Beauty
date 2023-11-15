<?php

require_once ("dbconnection.php"); 

//$teacher_id = $_GET['teacher_id'];
//$treatment_id = $_GET['treatment_id']; 
$teacher_treatment_id = $_GET['teacher_treatment_id'];

// $material_price_query = "SELECT xy_teacher_treatment.teacher_id, xy_teacher_treatment.treatment_id, xy_price.price FROM xy_teacher_treatment INNER JOIN xy_price ON xy_teacher_treatment.price_id = xy_price.id WHERE teacher_id =" .$teacher_id; 
// $result = mysqli_query($connection, $material_price_query);
// $prices = [];
// while($data = mysqli_fetch_assoc($result)){
//     $prices[] = $data;
// }
// echo json_encode($prices);

$treatment_price_query = "SELECT * FROM xy_price WHERE id=".$teacher_treatment_id; 
$result = mysqli_query($connection, $treatment_price_query);
$prices = [];
while($data = mysqli_fetch_assoc($result)){
    $prices[] = $data;
}
echo json_encode($prices); 

?>
