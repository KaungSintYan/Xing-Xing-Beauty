<?php

require_once ("dbconnection.php"); 

$teacher_treatment_id = $_GET['teacher_treatment_id']; 
// $price_id = $_GET['price_id']; 

$treatment_price_query = "SELECT * FROM xy_price WHERE teacher_treatment_id=".$teacher_treatment_id;
$result = mysqli_query($connection,$treatment_price_query); 
$prices = [];
while($data = mysqli_fetch_assoc($result)){
    $prices[] = $data;
}
echo json_encode($prices); 

?>