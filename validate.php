<?php

require_once 'dbconnection.php'; 

function validateDate($date){
    global $dateError, $isValid; 
    if($date == ''){
        $dateError = 'Date Field is required'; 
        $isValid = false; 
        return false; 
    }
    return true; 
}

function validateTime($time){
    global $timeError, $isValid;
    if($time == ''){
        $timeError = 'Time Field is required';
        $isValid = false;
        return false;
    }
    return true; 
}

function validateName($name){
    global $nameError,$isValid;
    if($name == ''){
        $nameError = 'Name Field is required';
        $isValid = false;
        return false;
    }
    return true; 
}

function validatePhone($phone){
    global $phoneError,$isValid; 
    if($phone == ''){
        $phoneError = 'Email Field is required';
        $isValid = false;
        return false;
    }
    return true;
}

function validateMessage($message){
    global $messageError,$isValid;
    if($message == ''){
        $messageError = 'Message Field is required'; 
        $isValid = false;
        return false;
    }
    return true; 
}

?>