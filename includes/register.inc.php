<?php

if (isset($_POST['submit'])){

    $Fname = $_POST['first-name'];
    $Lname = $_POST['last-name'];
    $IdNo = $_POST['id-number'];
    $Tittle = $_POST['tittle'];
    $Gender = $_POST['gender'];
    $Race = $_POST['race'];
    $Nationality = $_POST['nationality'];
    $HomeLang = $_POST['home-language'];
    $EmailAdd = $_POST['email'];
    $PhoneNo = $_POST['phone'];
    $StreetAdd = $_POST['street'];
    $Town = $_POST['town'];
    $City = $_POST['city'];
    $PostalCode = $_POST['postal-code'];
    $Password = $_POST['password'];
    $CPassword = $_POST['confirm-password'];

    // var_dump($_POST);
    // exit;

    require_once 'conn.inc.php';
    require_once 'function.inc.php';

    if(emptyInputs($Fname, $Lname, $IdNo, $Tittle, $Gender, $Race, $Nationality, $HomeLang, $EmailAdd, $PhoneNo, $StreetAdd, $Town, $City, $PostalCode, $Password, $CPassword) !== false){
        header("location: ../user/registration.php?error=emptyinput");
        exit();
    }

    if(invalidPhone($PhoneNo) !== false){
        header("location: ../user/registration.php?error=invalidphone");
        exit();
    }

    if(invalidEmail($EmailAdd) !== false){
        header("location: ../user/registration.php?error=invalidemail");
        exit();
    }

    if(passworddMatch($Password, $CPassword) !== false){
        header("location: ../user/registration.php?error=passdontmatch");
        exit();
    }

    // Add the new password validation check
    if(!isPasswordValid($Password)) {
        header("location: ../user/registration.php?error=invalidpassword");
        exit();
    }

    if(userExist($conn, $IdNo) !== false){
        header("location: ../user/registration.php?error=UserAlreadyExist");
        exit();
    }


    createUser($conn, $Fname, $Lname, $IdNo, $Tittle, $Gender, $Race, $Nationality, $HomeLang, $EmailAdd, $PhoneNo, $StreetAdd, $Town, $City, $PostalCode, $Password);


}