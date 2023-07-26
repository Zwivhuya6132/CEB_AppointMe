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

function createUser ( $conn, $Fname, $Lname, $IdNo, $Tittle, $Gender, $Race, $Nationality, $HomeLang, $EmailAdd, $PhoneNo, $StreetAdd, $Town, $City, $PostalCode, $Password){
    $sql = "INSERT INTO students  (Fname, Lname, IdNo, Tittle, Gender, Race, Nationality, HomeLang, EmailAdd, PhoneNo, StreetAdd, Town, City, PostalCode, Password ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: registration.php?eror=stmtfailed");
        // echo "failed";
        exit();
    }

    $PassHashed = password_hash($Password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssssssssssissss", $Fname, $Lname, $IdNo, $Tittle, $Gender, $Race, $Nationality, $HomeLang, $EmailAdd, $PhoneNo, $StreetAdd, $Town, $City, $PostalCode, $PassHashed);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header("location: ../login.php");
    exit();
}