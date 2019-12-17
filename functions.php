<?php
    function validateEmailPhone(){
        $contactEmail = $_POST["contactEmail"];
        $contactPhone = $_POST["contactPhone"];
        if (!filter_var($contactEmail, FILTER_VALIDATE_EMAIL)) {
            header("location: employeestudent.php?email=invalid");
            die();
        }
        if (!is_numeric($contactPhone)) {
            header("location:  employeestudent.php?phone=invalid");
            die();
        }
    }
    function checkUserPass($firstLastName, $companyName, $contactEmail, $contactPhone, $studentType) {
        if (!isset($firstLastName) || empty($firstLastName)) {
            header("location: employeestudent.php?notice=all_fields_required");
            // ob_end_flush();
            die();
        }
        if (!isset($companyName) || empty($companyName)) {
            header("location: employeestudent.php?notice=all_fields_required");
            ob_end_flush();
            die();
        }
        if (!isset($contactEmail) || empty($contactEmail)) {
            header("location: employeestudent.php?notice=all_fields_required");
            ob_end_flush();
            die();
        }
        if (!isset($contactPhone) || empty($contactPhone)) {
            header("location: employeestudent.php?notice=all_fields_required");
            ob_end_flush();
            die();
        }
        if (!isset($contactPhone) || empty($contactPhone)) {
            header("location: employeestudent.php?notice=all_fields_required");
            ob_end_flush();
            die();
        }
        if (!isset($studentType) || empty($studentType)) {
            header("location: employeestudent.php?notice=all_fields_required");
            ob_end_flush();
            die();
        }
    }
?>