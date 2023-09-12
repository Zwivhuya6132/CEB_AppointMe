<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" type="png" href="../images/uj.png">
    <link rel="stylesheet" href="all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/1-Dashboard.css">
    <link rel="stylesheet" href="css/2-Application.css">
    <link rel="stylesheet" href="css/3-Approval.css">
    <link rel="stylesheet" href="css/4-Disapproval.css">

    <?php
        $pageTitle = "Ulink";
        // Determine the current page and update the title accordingly
        if (strpos($_SERVER['REQUEST_URI'], '1-Dashboard.php') !== false) {
            $pageTitle .= " - Dashboard";
        } elseif (strpos($_SERVER['REQUEST_URI'], '2-Application.php') !== false) {
            $pageTitle .= " - Application"; 
        }elseif (strpos($_SERVER['REQUEST_URI'], '3-Approval.php') !== false) {
            $pageTitle .= " - Approval "; 
        }elseif (strpos($_SERVER['REQUEST_URI'], '4-Disapproval.php') !== false) {
            $pageTitle .= " - Disapproval "; 
        }elseif (strpos($_SERVER['REQUEST_URI'], 'tutor.php') !== false) {
            $pageTitle .= " - Application Form"; 
        }elseif (strpos($_SERVER['REQUEST_URI'], 'banking.php') !== false) {
            $pageTitle .= " - Banking Details"; 
        }elseif (strpos($_SERVER['REQUEST_URI'], 'confirm_tutor.php') !== false) {
            $pageTitle .= " - Application Confirmation"; 
        }elseif (strpos($_SERVER['REQUEST_URI'], 'status.php') !== false) {
            $pageTitle .= " - Application Status"; 
        }

        echo "<title>$pageTitle</title>";
    ?>
</head>

<body>
    <header class="head">
        <img src="Images/uj.png" alt="uj logo" class="logo">
    </header>

    <nav class="sidebar">
        <a <?php if($page == "Dashboard"){ echo 'class="active"';} ?> href="Dashboard.php">Dashboard</a>
        <a <?php if($page == "Application"){ echo 'class="active"';} ?> href="Application.php">Application</a>
        <a <?php if($page == "Approval"){ echo 'class="active"';} ?> href="Approval.php">Approval</a>
        <a <?php if($page == "Disapproval"){ echo 'class="active"';} ?> href="Disapproval.php">Disapproval</a>
        <a href="../page.php">Log Out</a>
    </nav>