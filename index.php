<?php 
    include_once 'includes/header.php';
?>

<form action="includes/login.inc.php" method="POST" enctype="multipart/form-data" name="form-login" class="log-form">
    <div class="d-div">
        <h1>uLink Sign In</h1>
    </div>

    <div class="fields">
        <label for="StudentNumber">Student Number</label><br>
        <input type="text" class="StudentNumber login-inputs" id="StudentNumber" name="StudentNumber" placeholder="Student Number">
    </div>

    <div class="fields toggle">
        <label for="password">Password</label><br>
        <input type="password" class="input login-inputs" id="password" name="password" placeholder="Enter your password">
        <span id="toggleBtn"></span>
        <a href="registration.php">Not registered? <em>click Here</em></a>

    </div>


    <div class="button-group">
        <button type="submit" class="submits-button login-inputs" name="submit">Login</button>
        <!-- <input type="button" value="Back to Start" class="back-button"> -->
        <!-- <input type="submit" value="Login" class="submit-button login-inputs" name="submit"> -->
    </div>

    <?php ?>
</form>

<?php 
    include_once 'includes/footer.php';
?>