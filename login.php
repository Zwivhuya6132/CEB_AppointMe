<?php 
    include_once 'includes/header.php';
?>

<form action="" method="POST" enctype="multipart/form-data" name="form-login" class="log-form">
    <div class="d-div">
        <h1>Login</h1>
    </div>

    <div class="fields">
        <label for="email">Student Number</label><br>
        <input type="email" class="StudentNumber" id="StudentNumber" name="StudentNumber" placeholder="Student Number">
    </div>

    <div class="fields">
        <label for="password">Password</label><br>
        <input type="password" class="input" id="password" name="password" placeholder="Enter your password">
    </div>

    <div class="button-group">
        <!-- <input type="button" value="Back to Start" class="back-button"> -->
        <input type="submit" value="Login" class="submit-button" name="submit">
    </div>
</form>

<?php 
    include_once 'includes/footer.php'
?>