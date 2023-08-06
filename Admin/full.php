<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="1-Dashboard.css">
    <title>Ulink</title>
    <style>
        

        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&family=Source+Sans+Pro:wght@200;400;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    font-size: 14px ;
    font-family: sa;
}

.head{
    background-color: #2e1a46;
    width: 100%;
    height: 120px;
    display: flex;
    /* justify-content: space-around; */
    color: #ffffff;
    margin-bottom: 25px;
}

.logo{
    height: 120px;
}

.head-left{
    display: flex;
    color: #ffffff;
    width: 40%;
}

.nav-links{
    list-style-type: none;
    display: flex;
    justify-content: space-between;
    width: 45%;
}

.nav-links li{
    padding: 5px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.nav-links li:hover{
    background-color:#e65300;
}

.head-right{
    line-height: 2;
    text-align: right;
}

.big-ulink h1{
    font-size: 28px;
}

.form{
    margin: 140px auto 0 550px;
    border: 3px solid #2e1a46;
    border-radius: 25px;
    /* padding: 10px 5px; */
    width: 45%;
    /* height: 800px; */
    overflow: hidden;
}

.names{
    display: flex;
    justify-content: space-around;
}

.names span{
    width: 45%;
}

.name,
.id,
.student{
    width: 100%;
    border-radius: 10px;
    border: 2px solid #2e1a46;
    padding: 5px;
}

.sel{
    display: flex;
    justify-content: space-between;
}

.form input{
    margin: 10px 0;
}

.d-div{
    background-color: #e65300;
    height: 45px;
    display: flex;
    align-items: center;
    color: #ffffff;
    padding-left: 5px;
    margin-bottom: 15px;
}

.d-div h1{
    font-size: 22px;
}

.id-con{
    /* background-color: #e65300; */
    width: 95%;
    margin: auto;
}

.selection{
    width: 100%;
    padding: 5px;
    border: 2px solid #2e1a46;
    border-radius: 10px;
}

.container {
    display: flex;

    width: 32%;
    flex-direction: column;
    /* align-items: center; */
    margin-bottom: 10px;
}

.addr{
    border: 2px solid #2e1a46;
    padding: 5px;
    border-radius: 10px;
}

.end-butt{
    display: flex;
    justify-content: space-around;
}

.butt{
    background-color: #2e1a46;
    padding: 10px;
    color: #ffffff;
    border: 2px solid;
    border-radius: 15px;
    cursor: pointer;
    transition: 0.5s;
    width: 150px;
}

.butt:hover{
    border: 2px solid #e65300;
    background-color: #ffffff;
    color: #2e1a46;
}

.progress-bar {
    width: 44%;
    height: 20px;
    background-color: #f0f0f0;
    border-radius: 10px;
    overflow: hidden;
    margin: auto;
    margin-bottom: 20px;
    text-align: center;
    color: #ffffff;
}

.progress {
    width: 55%;
    height: 100%;
    background-color: #e65300;
    transition: width 0.5s ease;
}

.form-group {
    display: inline-block;
    width: calc(50% - 10px);
    margin-bottom: 20px;
}

.label {
    display: block;
    margin-bottom: 5px;
}

.form-control,
.new-form-control {
    width: 90%;
    padding: 5px;
    border-radius: 10px;
    border: solid 2px #2e1a46;
}

.clearfix::after {
    content: "";
    display: table;
    clear: both;
}

.new-form-group {
    display: inline-block;
    width: calc(33.33% - 10px);
    margin-bottom: 20px;
}

.new-label {
    display: block;
    margin-bottom: 5px;
}

/* .new-form-control {
    width: 100%;
    height: 25px;
} */

.new-clearfix::after {
    content: "";
    display: table;
    clear: both;
}




    </style>
</head>

<body>
    <header class="head">
        <img src="Images/uj.png" alt="uj logo" class="logo">
    </header>

    <div class="sidebar">
        <a href="1-Dashboard.html">Dashboard</a>
        <a class="active" href="2-Application.html">Applications</a>
        <a href="3-Approval.html">Approved</a>
        <a href="4-Disapproval.html">Disapproved</a>
        <a href="../page.html">Log Out</a>
    </div>



    <div class="tables-main" >
        yhjmkhscnjuijskhcjm ikshcjmskl cjikjcmxoalksjcmx ieuskhcjnmsknc
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
        <a href="full.html">
            <input type="button" value="Back" class="back butt" name="back">
        </a>
        <a href="fullApp.html">
            <input type="button" value="Next" class="submit butt" name="submit"> 
        </a>
    </div>
    <script src="all.js"></script>
</body>

</html>