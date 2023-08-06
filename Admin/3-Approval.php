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
    <link rel="stylesheet" href="3-Approval.css">
    <title>Ulink</title>
</head>

<body>
    <header class="head">
        <img src="Images/uj.png" alt="uj logo" class="logo">
    </header>

    <div class="sidebar">
        <a href="1-Dashboard.html">Dashboard</a>
        <a href="2-Application.html">Applications</a>
        <a class="active" href="3-Approval.html">Approved</a>
        <a href="4-Disapproval.html">Disapproved</a>
        <a href="../page.html">Log Out</a>

    </div>


    <div class="tables-main">

        <h1 class="ActiveTutors-title" style="text-align: center;">Approved students</h1>

        <table class="table-center">
            <tr>
                <th>Student Number</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Approval date</th>
                <th>Action</th>
            </tr>

            <tr>
                <td>22182321</td>
                <td>Luyanda</td>
                <td>Mabaso</td>
                <td>13/08/2017</td>
                <td>
                    <center> <button class="button">Reverse approval</button> </center>
                </td>
            </tr>
            <tr>
                <td>22182321</td>
                <td>Roland</td>
                <td>Van Der Klerk</td>
                <td>13/08/2017</td>
                <td>
                    <center> <button class="button">Reverse approval</button> </center>
                </td>
            </tr>
            <tr>
                <td>22182321</td>
                <td>Helen</td>
                <td>Molefe</td>
                <td>13/08/2017</td>
                <td>
                    <center> <button class="button">Reverse approval</button> </center>
                </td>
            </tr>
            <tr>
                <td>22182321</td>
                <td>Karissa</td>
                <td>Moodley</td>
                <td>13/08/2017</td>
                <td>
                    <center> <button class="button">Reverse approval</button> </center>
                </td>
            </tr>
        </table>

    </div>







    <script src="all.js"></script>
</body>

</html>