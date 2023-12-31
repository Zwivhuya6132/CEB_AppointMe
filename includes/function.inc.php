<?php

function emptyInputs($Fname, $Lname, $IdNo, $Tittle, $Gender, $Race, $Nationality, $HomeLang, $EmailAdd, $PhoneNo, $StreetAdd, $Town, $City, $PostalCode, $Password, $CPassword) {
    $result = "";

    if(empty($Fname) || empty($Lname) || empty($IdNo) || empty($Tittle) || empty($Gender) ||
     empty($Race) || empty($Nationality) || empty($HomeLang) || empty($EmailAdd) ||
      empty($PhoneNo) || empty($StreetAdd) || empty($Town) || empty($City) || empty($PostalCode) || empty($Password) || empty($CPassword) ){

        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function invalidPhone($PhoneNo){
    $result =""; 

    if(!preg_match("/^[0-9]*$/",$PhoneNo)){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function invalidEmail($EmailAdd){
    $result = "";

    if(!filter_var($EmailAdd, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}


function passworddMatch($Password, $CPassword){
    $result = "";

    if($Password !== $CPassword){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function isPasswordValid($password) {
    // Regular expression pattern to check for at least one lowercase character
    $lower = '/(?=.*[a-z])/';

    // Regular expression pattern to check for at least one uppercase character
    $upper = '/(?=.*[A-Z])/';

    // Regular expression pattern to check for a minimum length of 10 characters
    $length = '/(?=.{10,})/';

    // Check if the password matches all the required patterns
    return (preg_match($lower, $password) && preg_match($upper, $password) && preg_match($length, $password));
}

function userExist($conn, $IdNo){
    $sql = "SELECT * FROM students WHERE IdNo =?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: user/registration.php?eror=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $IdNo);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result =false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function userLogs($conn, $StudentNumber){
    $sql = "SELECT * FROM students WHERE StudentNo =?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../user/registration.php?eror=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $StudentNumber);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result =false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $Fname, $Lname, $IdNo, $Tittle, $Gender, $Race, $Nationality, $HomeLang, $EmailAdd, $PhoneNo, $StreetAdd, $Town, $City, $PostalCode, $Password) {
    $sql = "INSERT INTO students (Fname, Lname, IdNo, Tittle, Gender, Race, Nationality, HomeLang, EmailAdd, PhoneNo, StreetAdd, Town, City, PostalCode, Password) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../user/registration.php?error=stmtfailed");
        exit();
    }

    $PassHashed = password_hash($Password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssssssssssissss", $Fname, $Lname, $IdNo, $Tittle, $Gender, $Race, $Nationality, $HomeLang, $EmailAdd, $PhoneNo, $StreetAdd, $Town, $City, $PostalCode, $PassHashed);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // Start the session
    session_start();

    // Get the newly inserted user ID
    $userId = mysqli_insert_id($conn);

    // Store the user ID in the session variable
    $_SESSION['user_id'] = $userId;

    // Redirect to the login page or any other page as needed
    header("location: ../user/registered.php");
    exit();
}


function emptyLoginInputs($StudentNumber, $Password) {
    $result = "";

    if( empty($StudentNumber) || empty($Password)){
        
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $StudentNumber, $Password){
    $unhashedpass = $Password;

    $uidExists = userLogs($conn, $StudentNumber);
    $PassHashed = $uidExists["Password"];
    $checkPass = password_verify($Password, $PassHashed);
    // var_dump($uidExists);
    // exit();
    // $row = $uidExists["UserType"];

    if($checkPass === false){
        header("location: ../index.php?error=wronglogin");
        exit();

    }else {
        session_start();
        $_SESSION["StudentNo"] = $uidExists["StudentNo"];
        $_SESSION["Fname"] = $uidExists["Fname"];
        $_SESSION["Lname"] = $uidExists["Lname"];
        $_SESSION["IdNo"] = $uidExists["IdNo"];
        $_SESSION["Tittle"] = $uidExists["Tittle"];
        $_SESSION["Gender"] = $uidExists["Gender"];
        $_SESSION["Race"] = $uidExists["Race"];
        $_SESSION["Nationality"] = $uidExists["Nationality"];
        $_SESSION["HomeLang"] = $uidExists["HomeLang"];
        $_SESSION["EmailAdd"] = $uidExists["EmailAdd"];
        $_SESSION["PhoneNo"] = $uidExists["PhoneNo"];
        $_SESSION["StreetAdd"] = $uidExists["StreetAdd"];
        $_SESSION["Town"] = $uidExists["Town"];
        $_SESSION["City"] = $uidExists["City"];
        $_SESSION["PostalCode"] = $uidExists["PostalCode"];
        $_SESSION["Password"] = $uidExists["Password"];
        
        header("location: ../user/page.php");
        exit();
    } 
    // else {
    //     session_start();
    //     $_SESSION["id"] = $uidExists["id"];
    //     $_SESSION["Fname"] = $uidExists["Fname"];
    //     $_SESSION["Lname"] = $uidExists["Lname"];
    //     $_SESSION["Dbirth"] = $uidExists["Dbirth"];
    //     $_SESSION["Gender"] = $uidExists["Gender"];
    //     $_SESSION["Address"] = $uidExists["Address"];
    //     $_SESSION["Contact"] = $uidExists["Contact"];
    //     $_SESSION["Email"] = $uidExists["Email"];
    //     $_SESSION["Password"] = $uidExists["Password"];
    //     header("location: ../index.php");
    //     exit();
    // }

}

function emptyBackground($EmployeeStatus, $EmployeeNumber, $PreviouslyEmployed, $FacultyDivision, $AppointedAs, $ConfirmCare, $Faculty, $EmploymentGroup, $AppointmentCategory, $StartDate, $EndDate, $ReasonTempEmployment) {
    $result = false;

    if (empty($EmployeeStatus) || empty($EmployeeNumber) || empty($PreviouslyEmployed) || empty($FacultyDivision) || empty($AppointedAs) ||
        empty($ConfirmCare) || empty($Faculty) || empty($EmploymentGroup) || empty($AppointmentCategory) || empty($StartDate) || empty($EndDate) || empty($ReasonTempEmployment)) {
        $result = true;
    }

    return $result;
}

function tutorReg($conn, $StudentNo, $EmployeeStatus, $EmployeeNumber, $PreviouslyEmployed, $FacultyDivision, $AppointedAs, $ConfirmCare, $Faculty, $EmploymentGroup, $AppointmentCategory, $StartDate, $EndDate, $ReasonTempEmployment) {
    $sql = "INSERT INTO tutor_reg (StudentNo, EmployeeStatus, EmployeeNumber, UjEmployment, IfYes, Appointed, Intermediary, Fuculty, EmploymentGroup, Appointment, StartDate, EndDate, Employment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../user/registration.php?error=stmtfailed");
        exit();
    }

    // Convert start date to the correct format 'YYYY-MM-DD'
    $StartDateFormatted = date('Y-m-d', strtotime($StartDate));

    // Convert end date to the correct format 'YYYY-MM-DD'
    $EndDateFormatted = date('Y-m-d', strtotime($EndDate));

    // Bind the formatted dates to the statement
    mysqli_stmt_bind_param($stmt, "issssssssssss", $StudentNo, $EmployeeStatus, $EmployeeNumber, $PreviouslyEmployed, $FacultyDivision, $AppointedAs, $ConfirmCare, $Faculty, $EmploymentGroup, $AppointmentCategory, $StartDateFormatted, $EndDateFormatted, $ReasonTempEmployment);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // Redirect to the confirmation page or any other page as needed
    header("location: ../user/banking.php");
    exit();
}

function bankingDetails($conn, $StudentNo, $AccountHolder, $BankName, $Bankbranch, $BranchCode, $AccountNumber, $AccountType, $IbanCode, $SwiftCode, $ProofOfBanking) {

    // Validate and handle the file upload
    if ($_FILES['ProofOfBanking']['error'] === UPLOAD_ERR_OK) {
        $filePath = "../uploads/" .$ProofOfBanking;
        move_uploaded_file($_FILES['ProofOfBanking']['tmp_name'], $filePath);
    } else {
        header("location: ../user/banking.php?error=uploadfailed");
        exit();
    }

    $sql = "INSERT INTO banking (StudentNo, AccountOwner, BankName, BankBranch, BranchCode, AccountNo, AccountType, Iban, Swift, ProofOfBanking) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../user/banking.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "isssssssss", $StudentNo, $AccountHolder, $BankName, $Bankbranch, $BranchCode, $AccountNumber, $AccountType, $IbanCode, $SwiftCode, $filePath);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // Redirect to the confirmation page or any other page as needed
    header("location: ../user/StartApp.php");
    exit();
}

function emptyBanking($AccountHolder, $BankName, $Bankbranch, $BranchCode, $AccountNumber, $AccountType, $IbanCode, $SwiftCode, $ProofOfBanking) {
    $result = false;

    if (empty($AccountHolder) || empty($BankName) || empty($Bankbranch) || empty($BranchCode) || empty($AccountNumber) || empty($AccountType) || empty($IbanCode) || empty($SwiftCode) || empty($ProofOfBanking)) {
        $result = true;
    }

    return $result;
}