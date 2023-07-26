<?php

function createUser ( $conn, $Fname, $Lname, $IdNo, $Tittle, $Gender, $Race, $Nationality, $HomeLang, $EmailAdd, $PhoneNo, $StreetAdd, $Town, $City, $PostalCode, $Password){
    $sql = "INSERT INTO students  (Fname, Lname, IdNo, Tittle, Gender, Race, Nationality, HomeLang, EmailAdd, PhoneNo, StreetAdd, Town, City, PostalCode, Password ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        // header("location: registration.php?eror=stmtfailed");
        echo "failed";
        exit();
    }

    $PassHashed = password_hash($Password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssssssssssissss", $Fname, $Lname, $IdNo, $Tittle, $Gender, $Race, $Nationality, $HomeLang, $EmailAdd, $PhoneNo, $StreetAdd, $Town, $City, $PostalCode, $PassHashed);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    echo "Phakathi",
    
    // header("location: ../login.php");
    exit();
}