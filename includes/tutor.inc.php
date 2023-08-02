<?php

if (isset($_POST['submit'])) {

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
    $EndDate = $_POST['end-date'];
    $ReasonTempEmployment = $_POST['reason-temp-employment'];

    require_once 'conn.inc.php';
    require_once 'function.inc.php';

    // Check for empty inputs or any validation you need here
    // For example:
    if (emptyBackground($EmployeeStatus, $EmployeeNumber, $PreviouslyEmployed, $FacultyDivision, $AppointedAs, $ConfirmCare, $Faculty, $EmploymentGroup, $AppointmentCategory, $StartDate, $EndDate, $ReasonTempEmployment) !== false) {
        header("location: ../tutor.php?error=emptyinput");
        exit();
    }

    tutorReg($conn, $StudentNo, $EmployeeStatus, $EmployeeNumber, $PreviouslyEmployed, $FacultyDivision, $AppointedAs, $ConfirmCare, $Faculty, $EmploymentGroup, $AppointmentCategory, $StartDate, $EndDate, $ReasonTempEmployment);

    // Save the form data to a session variable for later use in confirmation
    // session_start();
    // $_SESSION['tutor_data'] = $_POST;

    // Redirect to the confirmation page
    header("Location: ../confirm_tutor.php");
    exit();
} else {
    header("location: ../login.php");
    exit();
}