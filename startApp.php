    <?php 
        include_once "includes/header.php";
    ?>

    <div style="text-align: center;">
        <h1 style="font-size: 25px;">REGISTRATION PROCESS</h1>
    </div>

    <div class="progress-bar">
        <div class="progress">25%</div>
    </div>


    <form action="" method="POST" enctype="multipart/form-data"  name="form-reg" class="regform">
        <div class="d-div">
            <h1>Personal Details</h1>
        </div>

        <div class="fields-group">
            <div class="fields names-in">
                <label for="first-name">First Name</label><br>
                <input type="text" class="fName inputs" id="first-name" name="first-name" value="<?php if(isset($_SESSION['StudentNo'])){
                    echo $_SESSION["Fname"];
                }?>" disabled>
            </div>

            <div fields class="fields names-in">
                <label for="second-name">Last Name</label><br>
                <input type="text" class="lName inputs" id="second-name" name="second-name" value="<?php if(isset($_SESSION['StudentNo'])){
                    echo $_SESSION["Lname"];
                }?>" disabled>
            </div>
        </div>

        <div>
            <div class="fields">
                <label for="id">ID/Passport Number</label><br>
                <input type="text" class="id inputs" id="id" name="id-num" value="<?php if(isset($_SESSION['StudentNo'])){
                    echo $_SESSION["IdNo"];
                }?>" disabled>
            </div>
        </div>

    </div>

    <div>
        <div class="fields">
            <label for="student">Student Number</label><br>
            <input type="text" class="student inputs" id="student" name="student" value="<?php if(isset($_SESSION['StudentNo'])){
                    echo $_SESSION["StudentNo"];
                }?>" disabled>
        </div>
    </div>

    <div class="fields-group">
        <div class="fields">
            <label for="title" class="label">Title:</label>
            <select id="title" class="inputs" disabled>
                <option value="<?php if(isset($_SESSION['StudentNo'])){
                    echo $_SESSION["IdNo"];
                }?>"><?php if(isset($_SESSION['StudentNo'])){
                    echo $_SESSION["Tittle"];
                }?></option>
                <option value="mr">Mr.</option>
                <option value="ms">Ms.</option>
                <option value="mrs">Mrs.</option>
                <option value="dr">Dr.</option>
            </select>
        </div>
        <div class="fields">
            <label for="gender" class="label">Gender:</label>
            <select id="gender" class="inputs" disabled>
            <option value="<?php if(isset($_SESSION['StudentNo'])){
                    echo $_SESSION["IdNo"];
                }?>"><?php if(isset($_SESSION['StudentNo'])){
                    echo $_SESSION["Gender"];
                }?></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="fields" >
            <label for="race" class="label">Race:</label>
            <select id="race" class="inputs" disabled>
            <option value="<?php if(isset($_SESSION['StudentNo'])){
                    echo $_SESSION["IdNo"];
                }?>"><?php if(isset($_SESSION['StudentNo'])){
                    echo $_SESSION["Race"];
                }?></option>
                <option value="african">African</option>
                <option value="caucasian">Caucasian</option>
                <option value="asian">Asian</option>
                <option value="hispanic">Hispanic</option>
                <option value="other">Other</option>
            </select>
        </div>

    </div>

    <div class="fields">
        <label for="nationality">Nationality</label><br>
        <input type="text" class="fName inputs" id="nationality" name="nationality" value="<?php if(isset($_SESSION['StudentNo'])){
                echo $_SESSION["Nationality"];
            }?>" disabled>
    </div>

    <div class="fields">
        <label for="language">Home Language</label><br>
        <input type="text" class="lName inputs" id="language" name="language" value="<?php if(isset($_SESSION['StudentNo'])){
                echo $_SESSION["HomeLang"];
            }?>" disabled>
    </div>

    <div class="d-div">
        <h1>Contact Details</h1>
    </div>

    <div class="fields-group">
        <div class="fields names-in">
            <label for="email">Email Address</label><br>
            <input type="email" class="fName inputs" id="email" name="email" value="<?php if(isset($_SESSION['StudentNo'])){
                    echo $_SESSION["EmailAdd"];
                }?>" disabled>
        </div>

        <div class="fields names-in">
            <label for="number">Cell Phone Number</label><br>
            <input type="text" class="lName inputs" id="number" name="number" value="0<?php if(isset($_SESSION['StudentNo'])){
                    echo $_SESSION["PhoneNo"];
                }?>" disabled>
        </div>
    </div>

    <div>
        <div class="fields">
            <label for="street">Street Address</label><br>
            <input type="text" class="inputs" id="street" name="id-num" value="<?php if(isset($_SESSION['StudentNo'])){
                    echo $_SESSION["StreetAdd"];
                }?>" disabled>
        </div>
    </div>

    <div class="id-con fields-group">
        <div class="fields">
            <label for="town" class="label">Town:</label>
            <input type="text" class="inputs" id="town" name="town" value="<?php if(isset($_SESSION['StudentNo'])){
                    echo $_SESSION["Town"];
                }?>" disabled>
        </div>
        <div class="fields">
            <label for="city" class="label">City:</label>
            <input type="text" class="inputs" id="city" name="city" value="<?php if(isset($_SESSION['StudentNo'])){
                    echo $_SESSION["City"];
                }?>" disabled>
        </div>
        <div class="fields" >
            <label for="race" class="label">Postal Code:</label>
            <input type="text" class="inputs" id="street" name="id-num" value="<?php if(isset($_SESSION['StudentNo'])){
                    echo $_SESSION["PostalCode"];
                }?>" disabled>
        </div>

    </div>

    <div class="button-groups">
    <a href="page.php">
        <button class="submits-button login-inputs" type="button" onclick="window.location.href='page.php'">&nbsp;&nbsp;&nbsp;back&nbsp;&nbsp;&nbsp;</button>
        <!-- <button class="submits-button login-inputs" name="back">&nbsp;&nbsp;&nbsp;back&nbsp;&nbsp;&nbsp;</button> -->
    </a>

    <a href="tutor.php">
        <button class="submits-button login-inputs" type="button" onclick="window.location.href='tutor.php'">&nbsp;&nbsp;&nbsp;next&nbsp;&nbsp;&nbsp;</button>
        <!-- <button type="submit" class="submits-button login-inputs" name="submit">Continue</button> -->
    </a>

    </div>
    </form>

    <?php
        include_once "includes/footer.php";
    ?>