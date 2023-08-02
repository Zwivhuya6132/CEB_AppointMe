<?php 
  include_once 'includes/conn.inc.php';

    // Check if the user is logged in
    if (!isset($_SESSION['StudentNo'])) {
        // Redirect to the login page or any other page as needed
        header("Location: login.php");
        exit();
    }

    // Get the logged-in user's student number from the session
    $loggedInStudentNo = $_SESSION['StudentNo'];

    // Assuming you have already established the database connection
    $sql = "SELECT s.StudentNo, s.Fname, s.Lname, t.Status, t.EmployeeNumber, b.LastAction
            FROM students s
            LEFT JOIN tutor_reg t ON s.StudentNo = t.StudentNo
            LEFT JOIN banking b ON s.StudentNo = b.StudentNo
            WHERE s.StudentNo = ?";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        // Handle the query error if needed
        echo "Error preparing the query: " . mysqli_error($conn);
        exit;
    }

    mysqli_stmt_bind_param($stmt, "s", $loggedInStudentNo);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);