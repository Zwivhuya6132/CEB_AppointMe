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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Link.css">
    <link rel="stylesheet" href="slide.css">
    <link rel="stylesheet" href="sty.css">
    <link rel="stylesheet" href="style.css">
    <style>

    .log-form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .reg-error{
        color:red;
        background-color: #2e1a46;
        width: 75%;
        text-align: center;
        margin: auto;
        line-height: 2.2;
        /* padding: 10px 5px; */
        font-weight: 700;
        margin-bottom: 25px;
    }

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

.fields {
    flex-basis: calc(33.33% - 20px);
    margin-bottom: 20px;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
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

.button-groups {
    display: flex;
    justify-content: space-between;
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

footer {
  background-color: #f0f0f0;
  padding: 20px;
  text-align: center;
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  margin-top: 20px;
}

footer p {
  margin: 8px 0;
}

footer a {
  color: #0066cc;
}


a{
    text-decoration: none;
    color: #fff;
}

.nav-links{
    list-style-type: none;
    display: flex;
    justify-content: space-between;
    width: 75%;
}

.nav-links li{
    /* display: block; */
    min-width: 120px ;
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
    </style>
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
                <li><a href="alumni.php"><i class="fa-solid fa-power-off"></i>&nbsp;&nbsp;&nbsp;Alumni</a></li>
                <li><a href="news-events.php"><i class="fa-solid fa-question"></i>&nbsp;&nbsp;&nbsp;News And Events</a></li>
                <li><a href="help.php"><i class="fa-regular fa-bell"></i>&nbsp;&nbsp;&nbsp;Help</a></li>
                <li><a href="contact.php"><i class="fa-regular fa-bell"></i>&nbsp;&nbsp;&nbsp;Contact</a></li>
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
            <h1>Ulink</h1>
        </small>
    </div>
</header>
