<?php 
    $page = "Application";
    include_once 'includes/header.php';
?>



    <div class="tables-main">

        <h1 class="ActiveTutors-title" style="text-align: center;"> Pending Approval </h1>

        <table class="table-center">

            <tr>
                <th>Student Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Action</th>
            </tr>

            <?php
                include_once 'includes/conn.inc.php';
                $sql = "SELECT students.StudentNo, students.FName, students.LName, tutor_reg.UjEmployment
                        FROM students
                        INNER JOIN tutor_reg ON students.StudentNo = tutor_reg.StudentNo";
                $result = $conn->query($sql);

                while($row = mysqli_fetch_assoc($result)){
            ?>

            <tr>
                <td><?php echo $row['StudentNo'];?></td>
                <td><?php echo $row['FName'];?></td>
                <td><?php echo $row['LName'];?></td>
                <td>              
                    <center>
                        <a href="fullApp.html">
                            <input type="button" value="View Application" class="reject-button btn">
                        </a>
                    </center>
                </td>
            </tr>
            <?php } ?>

        </table>

    </div>

    <?php 
        include_once 'includes/footer.php';
    ?>