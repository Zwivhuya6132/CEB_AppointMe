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

function userExist($conn, $IdNo){
    $sql = "SELECT * FROM students WHERE IdNo =?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: registration.php?eror=stmtfailed");
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
        header("location: registration.php?eror=stmtfailed");
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
        header("location: registration.php?error=stmtfailed");
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
    header("location: ../registered.php");
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
        header("location: ../login.php?error=wronglogin");
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
        
        header("location: ../page.php");
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