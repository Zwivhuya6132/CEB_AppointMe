    <?php 
        include_once "includes/header.php";
    ?>

    <div style="text-align: center;">
        <h1 style="font-size: 25px;">REGISTRATION PROCESS</h1>
    </div>

    <div class="progress-bar">
        <div class="progress">25%</div>
    </div>


    <form action="" method="POST" enctype="multipart/form-data"  name="form-reg" class="form">
        <div class="d-div">
            <h1>Personal Details</h1>
        </div>

        <div class="names">
            <span>
                <label for="first-name">First Name</label><br>
                <input type="text" class="fName name" id="first-name" name="first-name" value="Zwivhuya" disabled>
            </span>

            <span>
                <label for="first-name">Last Name</label><br>
                <input type="text" class="lName name" id="second-name" name="second-name" value="Davhana" disabled>
            </span>
        </div>
        <div>
            <div class="id-con">
                <label for="id">ID/Passport Number</label><br>
                <input type="text" class="id" id="id" name="id-num" value="9801037777777" disabled>
            </div>
        </div>
    </div>
    <div>
        <div class="id-con">
            <label for="student">Student Number</label><br>
            <input type="text" class="student" id="student" name="student" value="218007282" disabled>
        </div>
    </div>

    <div class="id-con sel">
        <div class="container">
            <label for="title" class="label">Title:</label>
            <select id="title" class="selection" disabled>
                <option value="mr">Mr.</option>
                <option value="ms">Ms.</option>
                <option value="mrs">Mrs.</option>
                <option value="dr">Dr.</option>
            </select>
        </div>
        <div class="container">
            <label for="gender" class="label">Gender:</label>
            <select id="gender" class="selection" disabled>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="container" >
            <label for="race" class="label">Race:</label>
            <select id="race" class="selection" disabled>
                <option value="african">African</option>
                <option value="caucasian">Caucasian</option>
                <option value="asian">Asian</option>
                <option value="hispanic">Hispanic</option>
                <option value="other">Other</option>
            </select>
        </div>

    </div>

    <div class="names">
        <span>
            <label for="nationality">Nationality</label><br>
            <input type="text" class="fName name" id="nationality" name="nationality" value="South Africa" disabled>
        </span>

        <span>
            <label for="language">Home Language</label><br>
            <input type="text" class="lName name" id="language" name="language" placeholder="TshiVenda" disabled>
        </span>
    </div>

    <div class="d-div">
        <h1>Contact Details</h1>
    </div>

    <div class="names">
        <span>
            <label for="email">Email Address</label><br>
            <input type="email" class="fName name" id="email" name="email" value="zwivhuyadavhana6132@gmail.com" disabled>
        </span>

        <span>
            <label for="number">Cell Phone Number</label><br>
            <input type="text" class="lName name" id="number" name="number" value="078 568 3557" disabled>
        </span>
    </div>

    <div>
        <div class="id-con">
            <label for="street">Street Address</label><br>
            <input type="text" class="id" id="street" name="id-num" value="3881 Ratsuru Road" disabled>
        </div>
    </div>

    <div class="id-con sel">
        <div class="container">
            <label for="town" class="label">Town:</label>
            <input type="text" class="addr" id="town" name="town" value="Braamfischerville" disabled>
        </div>
        <div class="container">
            <label for="city" class="label">City:</label>
            <input type="text" class="addr" id="city" name="city" value="Roodepoort" disabled>
        </div>
        <div class="container" >
            <label for="race" class="label">Postal Code:</label>
            <input type="text" class="addr" id="street" name="id-num" value="1725" disabled>
        </div>

    </div>

    <div class="end-butt">
        <a href="page.html">
          <input type="button" value="Back to Start" class="back butt" name="back">
        </a>
        <a href="pageTwo.html">
            <input type="button" value="Continue Application" class="submit butt" name="submit"> 
        </a>
    </div>
    </form>

    <?php
        include_once "includes/footer.php";
    ?>