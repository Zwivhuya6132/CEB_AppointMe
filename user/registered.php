<!DOCTYPE html>
<html>
<head>
  <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
  <style>
    body {
  font-family: Arial, sans-serif;
  height: 90vh;
  /* background-color: red; */
  display: flex;
  justify-content: center;
  align-items: center;
}

/* h1 {
  color: #333333;
  text-align: center;
} */

/* .result {
  color: #666666;
  font-size: 16px;
  text-align: center;
} */


.buts {
  cursor: pointer;
  position: relative;
  padding: 10px 24px;
  font-size: 18px;
  color: #e65300;
  border: 2px solid;
  border-radius: 34px;
  background-color: transparent;
  font-weight: 600;
  transition: all 0.3s cubic-bezier(0.23, 1, 0.320, 1);
  overflow: hidden;
  margin: auto;
  /* margin-top: 90px; */
}

.buts::before {
  content: '';
  position: absolute;
  inset: 0;
  margin: auto;
  width: 50px;
  height: 50px;
  border-radius: inherit;
  scale: 0;
  z-index: -15;
  background-color: #e65300;
  transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
}

.buts:hover::before {
  scale: 3;
}

.buts:hover {
  color: #fff;
  scale: 1.1;
  box-shadow: 0 0px 20px rgba(193, 163, 98,0.4);
}

.button:active {
  scale: 1;
}

a{
    color: #e65300;
    text-decoration: none;
    z-index: 1;
}

.cen{
    border: 2px solid #e65300;
    border-radius: 15px;
    width: 50%;
    padding: 10px;
    text-align: center;
    line-height: 1.2;
    height: 40%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

  </style>
</head>
<body>
    <div class="cen">
        <h1>Successfully Registerd. Plase save your student Number</h1>
        <?php
            session_start();
        ?>
        <div class="result">
            <strong>Student Number:</strong> <?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : "N/A"; ?>
        </div>
        <button class="buts" onclick="window.location.href='index.php'"><a href="../includes/logout.inc.php">Go to Login</a></button>
    </div>

    <?php
  include_once '../includes/footer.php';
?>
