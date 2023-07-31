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
    <link rel="stylesheet" href="csss.css">
    <!-- <link rel="stylesheet" href="Link.css">
    <link rel="stylesheet" href="slide.css">
    <link rel="stylesheet" href="sty.css">
    <link rel="stylesheet" href="style.css"> -->
    <!-- <style>

.regform {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border: 2px solid orange;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 180px;
}

.fields-group {
    display: flex;
    justify-content: space-between;
}

select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.sections {
    margin-bottom: 30px;
}

.h1 {
    font-size: 24px;
    margin-bottom: 10px;
}

.back-button,
.submit-button {
    padding: 10px 20px;
    width: 40%;
    background-color: #2e1a46;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.back-button:hover,
.submit-button:hover {
    background-color: #0056b3;
}

    table {
      width: 50%;
      margin: auto;
      border-collapse: collapse;
      margin-bottom: 25px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
      
    }

    th {
      background-color: #f2f2f2;
    }

    .cancel-button,
    .reject-button {
      padding: 6px 12px;
      font-size: 14px;
      background-color: #e65300;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 4px;
    }

    .cancel-button:hover,
    .reject-button:hover{
        border: 2px solid #e65300;
        background-color: #ffffff;
        color: #e65300;
    }
    </style> -->
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
        <small>
        <?php
            if(isset($_SESSION["StudentNo"])){

                echo'<p>Welcome'.' '.$_SESSION["Fname"][0].' '. $_SESSION["Lname"].'</p>';
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
