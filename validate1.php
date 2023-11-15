<?php
require_once 'dbconnection.php'; 

function validateName($name){
    global $nameError,$isValid; 
    if($name == ''){
        $nameError = 'You should need to fill this form.';
        $isValid = false;
        return false;
    }
    return true;
}

function validateEmail($email){
    global $emailError,$isValid;
    if($email == ''){
        $emailError = 'You should need to fill this form.';
        $isValid = false;
        return false;
    }
    return true;
}

function validateSubject($subject){
    global $subjectError,$isValid;
    if($subject == ''){
        $subjectError = 'You should need to fill this form.';
        $isValid = false;
        return false;
    }
    return true;
}

function validateMessage($message){
    global $messageError,$isValid;
    if($message == ''){
        $messageError = 'You should need to fill this form.';
        $isValid = false;
        return false;
    }
    return true;
}

?>