<?php

if(isset($_POST['submit'])){

    $StudentNo = $_POST['StudentNumber'];
    $EmployeeStatus = $_POST['employee-status'];
    $EmployeeNumber = $_POST['employee-number'];
    $PreviouslyEmployed = $_POST['previously-employed'];
    $FacultyDivision = $_POST['faculty-division'];
    $AppointedAs = $_POST['appointed-as'];
    $ConfirmCare = $_POST['confirm-care'];
    $Faculty = $_POST['faculty'];
    $EmploymentGroup = $_POST['employment-group'];
    $AppointmentCategory = $_POST['appointment-category'];
    $StartDate = $_POST['start-date'];
    $EndDate= $_POST['end-date'];
    $ReasonTempEmployment = $_POST['reason-temp-employment'];
    
    // var_dump($Password);
    // exit();
    require_once 'conn.inc.php';
    require_once 'function.inc.php';

    // if(emptyLoginInputs( $StudentNumber, $Password) !== false){
    //     header("location: ../login.php?error=emptyinput");
    //     exit();
    // }

    // loginUser($conn, $StudentNumber, $Password);
    tutorReg($conn,$StudentNo, $EmployeeStatus, $EmployeeNumber, $PreviouslyEmployed, $FacultyDivision, $AppointedAs, $ConfirmCare, $Faculty, $EmploymentGroup, $AppointmentCategory, $StartDate, $EndDate, $ReasonTempEmployment);

} else{
    header("location: ../login.php");
    exit();
}