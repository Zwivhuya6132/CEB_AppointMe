<?php 
    $page = "Approval";
    include_once 'includes/header.php';
?>



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
                    <center> <btn class="btn">Reverse approval</btn> </center>
                </td>
            </tr>
            <tr>
                <td>22182321</td>
                <td>Roland</td>
                <td>Van Der Klerk</td>
                <td>13/08/2017</td>
                <td>
                    <center> <btn class="btn">Reverse approval</btn> </center>
                </td>
            </tr>
            <tr>
                <td>22182321</td>
                <td>Helen</td>
                <td>Molefe</td>
                <td>13/08/2017</td>
                <td>
                    <center> <btn class="btn">Reverse approval</btn> </center>
                </td>
            </tr>
            <tr>
                <td>22182321</td>
                <td>Karissa</td>
                <td>Moodley</td>
                <td>13/08/2017</td>
                <td>
                    <center> <btn class="btn">Reverse approval</btn> </center>
                </td>
            </tr>
        </table>

    </div>

    <?php 
        include_once 'includes/footer.php';
    ?>