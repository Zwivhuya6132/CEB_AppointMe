<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulink</title>
    <link rel="website icon" type="png" href="images/uj.png">
    <link rel="stylesheet" href="all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">

</head>
<body>
<header class="head">
    <div class="head-left">
        <img src="images/uj.png" alt="uj logo" class="logo">
        <?php
        if (isset($_SESSION["StudentNo"])) {
            echo '
                <ul class="nav-links">
                    <li><a href="includes/logout.inc.php"><i class="fa-solid fa-power-off"></i>&nbsp;&nbsp;&nbsp;Log-out</a></li>
                    <li><a href="news-events.php"><i class="fa-solid fa-question"></i>&nbsp;&nbsp;&nbsp;Help</a></li>
                    <li><a href="help.php"><i class="fa-regular fa-bell"></i>&nbsp;&nbsp;&nbsp;Notifications</a></li>
                </ul>';
        } else {
            echo '
            <ul class="nav-links">
                <li><a href="https://www.uj.ac.za/contact/alumni/" target="_blank"><i class="fa-solid fa-user-graduate"></i>&nbsp;&nbsp;&nbsp;Alumni</a></li>
                <li><a href="https://www.uj.ac.za/news/" target="_blank"><i class="fa-solid fa-newspaper"></i>&nbsp;&nbsp;&nbsp;News And Events</a></li>
                <li><a href="https://ulink.uj.ac.za/Help" target="_blank"><i class="fa-solid fa-circle-question"></i>&nbsp;&nbsp;&nbsp;Help</a></li>
                <li><a href="https://ulink.uj.ac.za/Contact" target="_blank"><i class="fa-regular fa-address-card"></i>&nbsp;&nbsp;&nbsp;Contact</a></li>
            </ul>';
        }
        ?>
    </div>
    <div class="head-right">
        <small class="head-wel">
        <?php
            if(isset($_SESSION["StudentNo"])){

                echo'<p>Welcome'.' '.$_SESSION["Tittle"].' '.$_SESSION["Fname"][0].' '. $_SESSION["Lname"].'</p>';
                echo'<p>'.$_SESSION["EmailAdd"].'</p>';
            }else{
                echo '<p>&nbsp;</p>';
                echo '<p>&nbsp;</p>';
            }
        ?>
            <!-- <p>Welcome Mr Z Davhana</p>
            <p>zwivhuyadavhana6132@gmail.com</p> -->
        </small>
        <small class="big-ulink">
            <h1>uLink</h1>
        </small>
    </div>
</header>
