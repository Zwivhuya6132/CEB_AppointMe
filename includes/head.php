<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//User/styles/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="..//User/styles/homestyle.css">
    <link rel="stylesheet" href="..//User/styles/bootstrap.css"> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&family=Source+Sans+Pro:wght@200;400;600;700&display=swap');

* {
    margin: 0;
    padding: 0;
    font-size: 14px;
    font-family: sa;
}

.head {
    background-color: #2e1a46;
    width: 100%;
    height: 120px;
    display: flex;
    justify-content: space-around;
    color: #ffffff;
    margin-bottom: 25px;
}

.logo {
    height: 120px;
}

.head-left {
    display: flex;
    color: #ffffff;
    width: 40%;
}

.nav-links {
    list-style-type: none;
    display: flex;
    justify-content: space-between;
    width: 45%;
}

.nav-links li {
    padding: 5px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.nav-links li:hover {
    background-color: #e65300;
}

.head-right {
    line-height: 2;
    text-align: right;
}

.big-ulink h1 {
    font-size: 28px;
}

.form {
    margin: auto;
    border: 3px solid #2e1a46;
    border-radius: 25px;
    /* padding: 10px 5px; */
    width: 45%;
    /* height: 800px; */
    overflow: hidden;
}

.names {
    display: flex;
    justify-content: space-around;
}

.names span {
    width: 45%;
}

.name,
.id,
.student {
    width: 100%;
    border-radius: 10px;
    border: 2px solid #2e1a46;
    padding: 5px;
}

.sel {
    display: flex;
    justify-content: space-between;
}

.form input {
    margin: 10px 0;
}

.d-div {
    background-color: #e65300;
    height: 45px;
    display: flex;
    align-items: center;
    color: #ffffff;
    padding-left: 5px;
    margin-bottom: 15px;
}

.d-div h1 {
    font-size: 22px;
}

.id-con {
    /* background-color: #e65300; */
    width: 95%;
    margin: auto;
}

.selection {
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

.addr {
    border: 2px solid #2e1a46;
    padding: 5px;
    border-radius: 10px;
}

.end-butt {
    display: flex;
    justify-content: space-around;
}

.butt {
    background-color: #2e1a46;
    padding: 10px;
    color: #ffffff;
    border: 2px solid;
    border-radius: 15px;
    cursor: pointer;
    transition: 0.5s;
}

.butt:hover {
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
    width: 25%;
    height: 100%;
    background-color: #e65300;
    transition: width 0.5s ease;
}

.center {
    text-align: center;
    /* this centers the image */
}

.list-group {
    margin-bottom: 20px;
    padding-left: 0;
}

.list-group-item {
    width: 90%;
    position: relative;
    display: block;
    padding: 10px 15px;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid #ddd;
}

.list-group-item:first-child {
    border-top-right-radius: 4px;
    border-top-left-radius: 4px;
}

.list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
}

a.list-group-item,
button.list-group-item {
    color: #555;
}

a.list-group-item .list-group-item-heading,
button.list-group-item .list-group-item-heading {
    color: #333;
}

a.list-group-item:hover,
button.list-group-item:hover,
a.list-group-item:focus,
button.list-group-item:focus {
    text-decoration: none;
    color: #555;
    background-color: #f5f5f5;
}

button.list-group-item {
    width: 100%;
    text-align: left;
}

.list-group-item.disabled,
.list-group-item.disabled:hover,
.list-group-item.disabled:focus {
    background-color: #eeeeee;
    color: #777777;
    cursor: not-allowed;
}

.list-group-item.disabled .list-group-item-heading,
.list-group-item.disabled:hover .list-group-item-heading,
.list-group-item.disabled:focus .list-group-item-heading {
    color: inherit;
}

.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text {
    color: #777777;
}

.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
    z-index: 2;
    color: #fff;
    background-color: #337ab7;
    border-color: #337ab7;
}

.list-group-item.active .list-group-item-heading,
.list-group-item.active:hover .list-group-item-heading,
.list-group-item.active:focus .list-group-item-heading,
.list-group-item.active .list-group-item-heading>small,
.list-group-item.active:hover .list-group-item-heading>small,
.list-group-item.active:focus .list-group-item-heading>small,
.list-group-item.active .list-group-item-heading>.small,
.list-group-item.active:hover .list-group-item-heading>.small,
.list-group-item.active:focus .list-group-item-heading>.small {
    color: inherit;
}

.list-group-item.active .list-group-item-text,
.list-group-item.active:hover .list-group-item-text,
.list-group-item.active:focus .list-group-item-text {
    color: #c7ddef;
}

.list-group-item-success {
    color: #3c763d;
    background-color: #dff0d8;
}

a.list-group-item-success,
button.list-group-item-success {
    color: #3c763d;
}

a.list-group-item-success .list-group-item-heading,
button.list-group-item-success .list-group-item-heading {
    color: inherit;
}

a.list-group-item-success:hover,
button.list-group-item-success:hover,
a.list-group-item-success:focus,
button.list-group-item-success:focus {
    color: #3c763d;
    background-color: #d0e9c6;
}

a.list-group-item-success.active,
button.list-group-item-success.active,
a.list-group-item-success.active:hover,
button.list-group-item-success.active:hover,
a.list-group-item-success.active:focus,
button.list-group-item-success.active:focus {
    color: #fff;
    background-color: #3c763d;
    border-color: #3c763d;
}

.list-group-item-info {
    color: #31708f;
    background-color: #d9edf7;
}

a.list-group-item-info,
button.list-group-item-info {
    color: #31708f;
}

a.list-group-item-info .list-group-item-heading,
button.list-group-item-info .list-group-item-heading {
    color: inherit;
}

a.list-group-item-info:hover,
button.list-group-item-info:hover,
a.list-group-item-info:focus,
button.list-group-item-info:focus {
    color: #31708f;
    background-color: #c4e3f3;
}

a.list-group-item-info.active,
button.list-group-item-info.active,
a.list-group-item-info.active:hover,
button.list-group-item-info.active:hover,
a.list-group-item-info.active:focus,
button.list-group-item-info.active:focus {
    color: #fff;
    background-color: #31708f;
    border-color: #31708f;
}

.list-group-item-warning {
    color: #8a6d3b;
    background-color: #fcf8e3;
}

a.list-group-item-warning,
button.list-group-item-warning {
    color: #8a6d3b;
}

a.list-group-item-warning .list-group-item-heading,
button.list-group-item-warning .list-group-item-heading {
    color: inherit;
}

a.list-group-item-warning:hover,
button.list-group-item-warning:hover,
a.list-group-item-warning:focus,
button.list-group-item-warning:focus {
    color: #8a6d3b;
    background-color: #faf2cc;
}

a.list-group-item-warning.active,
button.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
button.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus,
button.list-group-item-warning.active:focus {
    color: #fff;
    background-color: #8a6d3b;
    border-color: #8a6d3b;
}

.list-group-item-danger {
    color: #a94442;
    background-color: #f2dede;
}

a.list-group-item-danger,
button.list-group-item-danger {
    color: #a94442;
}

a.list-group-item-danger .list-group-item-heading,
button.list-group-item-danger .list-group-item-heading {
    color: inherit;
}

a.list-group-item-danger:hover,
button.list-group-item-danger:hover,
a.list-group-item-danger:focus,
button.list-group-item-danger:focus {
    color: #a94442;
    background-color: #ebcccc;
}

a.list-group-item-danger.active,
button.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
button.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus,
button.list-group-item-danger.active:focus {
    color: #fff;
    background-color: #a94442;
    border-color: #a94442;
}

.list-group-item-heading {
    margin-top: 0;
    margin-bottom: 5px;
}

.list-group-item-text {
    margin-bottom: 0;
    line-height: 1.3;
}
    </style>
    <title>Ulink</title>
</head>

<body>
    <header class="head">

        <div class="head-left">
            <img src="../images/uj.png" alt="uj logo" class="logo">

            <ul class="nav-links">
                <li style="font-family: sans-serif;"><i></i>&nbsp;&nbsp;&nbsp;Log-out</li>
                <li style="font-family: sans-serif;"><i></i>&nbsp;&nbsp;&nbsp;Help</li>
                <li style="font-family: sans-serif;"><i></i>&nbsp;&nbsp;&nbsp;Notification
                </li>
            </ul>
        </div>

        <div class="head-right">

            <small>
                <p style="font-family: sans-serif;"> Welcome Miss K Moodley </p>
                <p style="font-family: sans-serif;"> knmoodley1215@gmail.com </p>
            </small>

            <small class="big-ulink">
                <h1 style="font-family: sans-serif;">Ulink</h1>
            </small>

        </div>
    </header>

    <p style="color: grey;"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
        Home / Temporary Employment </p>
    <br>

    <div class="row">
        <div class="center">
            <img src="images/banner.png" alt="banner">
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-3 col-lg-3" style="text-align:center;"></div>
        <div class="col-md-6 col-lg-6">
            <br><br>

            <div>
                <strong style="font-size: 30px; font-family: sans-serif;"> Temporary Employment </strong>
            </div>
            <br>

            <div class="list-group" style="font-size:16px;">
                <a href="2.html" class="list-group-item">Start Application</a>
                <a href="6.html" class="list-group-item">Check Status / Cancel Application</a>
                <a href="ResultsAcademic.aspx" class="list-group-item">Submit Monthly Claims</a>
            </div>
            <br>
            <br>
            <br>

        </div>
        <div class="col-md-3 col-lg-3" style="text-align:center;"></div>

    </div>
















    <script src=" all.js">
    </script>
</body>

</html>