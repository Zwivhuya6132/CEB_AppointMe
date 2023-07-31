<?php
    include_once "includes/header.php";
?>

<main>
<form action="includes/register.inc.php" method="POST" enctype="multipart/form-data" name="form-reg" class="regform">

        <div class="reg-error">
            <?php
            if(isset($_GET["error"])){
                if ($_GET["error"]=="emptyinput"){
                    echo "<p>All fields are reqiured</p>";
                }

                if ($_GET["error"]=="invalidphone"){
                    echo "<p>Please enter a valid phone number</p>";
                }

                if ($_GET["error"]=="invalidemail"){
                    echo "<p>Please enter a valid EmailAddress</p>";
                }

                if ($_GET["error"]=="passdontmatch"){
                    echo "<p>Passwords do not match</p>";
                }

                if ($_GET["error"]=="UserAlreadyExist"){
                    echo "<p>ID Number already exist </p>";
                }

            }
            
            ?>
        </div>
        <div class="sections">

            <div class="d-div">
                <h1>PERSONAL DETAILS</h1>
            </div>
            
            <div class="fields-group">
                <div class="fields names-in">
                    <label for="first-name">First Name:</label>
                    <input type="text" class="inputs" id="first-name" name="first-name" placeholder="Enter your first name">
                </div>
                <div class="fields names-in">
                    <label for="last-name">Last Name:</label>
                    <input type="text" class="inputs" id="last-name" name="last-name" placeholder="Enter your last name">
                </div>
            </div>
            
            <div class="fields">
                <label for="id-number">ID/Passport Number:</label>
                <input type="text" class="inputs" id="id-number" name="id-number" placeholder="Enter your ID/Passport number">
            </div>

            <div class="fields-group">
                <div class="fields">
                    <label for="title">Title:</label>
                    <select id="title" class="inputs" name="tittle">
                        <option value="mr">Mr.</option>
                        <option value="ms">Ms.</option>
                        <option value="mrs">Mrs.</option>
                        <option value="dr">Dr.</option>
                    </select>
                </div>
                <div class="fields">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" class="inputs">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="fields">
                    <label for="race">Race:</label>
                    <select id="race" name="race" class="inputs">
                        <option value="african">African</option>
                        <option value="caucasian">Caucasian</option>
                        <option value="asian">Asian</option>
                        <option value="hispanic">Hispanic</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>

            <div class="fields">
                <label for="nationality">Nationality:</label>
                <input type="text" class="inputs" id="nationality" name="nationality" placeholder="Enter your nationality">
            </div>
            <div class="fields">
                <label for="home-language">Home Language:</label>
                <input type="text" class="inputs" id="home-language" name="home-language" placeholder="Enter your home language">
            </div>
        </div>

        <div class="section">
            <div class="d-div">
                <h1 class="h1">CONTACT DETAILS</h1>
            </div>

            <div class="fields">
                <label for="email">Email Address:</label>
                <input type="email" class="inputs" id="email" name="email" placeholder="Enter your email address">
            </div>

            <div class="fields">
                <label for="phone">Cell Phone Number:</label>
                <input type="tel" class="inputs" id="phone" name="phone" placeholder="Enter your phone number">
            </div>

            <div class="fields">
                <label for="street">Street Address:</label>
                <input type="text" class="inputs" id="street" name="street" placeholder="Enter your street address">
            </div>

            <div class="fields-group">
                <div class="fields">
                    <label for="town">Town:</label>
                    <input type="text" class="inputs" id="town" name="town" placeholder="Enter your town">
                </div>
                <div class="fields">
                    <label for="city">City:</label>
                    <input type="text" class="inputs" id="city" name="city" placeholder="Enter your city">
                </div>
                <div class="fields">
                    <label for="postal-code">Postal Code:</label>
                    <input type="text" class="inputs" id="postal-code" name="postal-code" placeholder="Enter your postal code">
                </div>
            </div>
        </div>

        <div class="fields">
            <label for="password">Password:</label>
            <input type="password" class="inputs" id="password" name="password" placeholder="Enter your password">
            <ul class="passwordStrength">
                <li id="lower">At least one lower character</li>
                <li id="upper">At least one upper character</li>
                <li id="number">At least one number</li>
                <li id="special">At least one special character </li>
                <li id="length">At least one 8 characters</li>
            </ul>
        </div><br>
        <div class="fields">
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" class="inputs" id="confirm-password" name="confirm-password" placeholder="Confirm your password">
        </div><br>

        <div class="button-groups">
            <button type="submit" class="submits-button login-inputs" name="back">&nbsp;&nbsp;cancel&nbsp;&nbsp;</button>
            <button type="submit" class="submits-button login-inputs" name="submit">Register</button>
<!--             
            <input type="button" value="Back to Start" class="back-button">
            <input type="submit" value="Continue Application" name="submit" class="submit-button"> -->
        </div>
    </form>
</main>





<?php
    include_once "includes/footer.php";
?>