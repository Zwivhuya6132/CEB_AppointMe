<?php

if(isset($_POST['submit'])){

    $StudentNumber = $_POST['StudentNumber'];
    $Password = $_POST['password'];
    // var_dump($Password);
    // exit();
    require_once 'conn.inc.php';
    require_once 'function.inc.php';

    if(emptyLoginInputs( $StudentNumber, $Password) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $StudentNumber, $Password);

} else{
    header("location: ../login.php");
    exit();
}