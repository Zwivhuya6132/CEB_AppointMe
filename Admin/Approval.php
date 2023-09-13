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
            <?php
                include_once 'includes/conn.inc.php';
                $sql = "SELECT students.*, tutor_reg.*
                FROM students
                INNER JOIN tutor_reg ON students.StudentNo = tutor_reg.StudentNo 
                WHERE tutor_reg.status = 'approved'";
                $result = $conn->query($sql);

                while($row = mysqli_fetch_assoc($result)){
            ?>

            <tr>
                <td><?php echo $row['StudentNo'];?></td>
                <td><?php echo $row['Fname'];?></td>
                <td><?php echo $row['Lname'];?></td>
                <td><?php echo $row['EndDate'];?></td>
                <td>
                    <center> <btn class="btn">Reverse approval</btn> </center>
                </td>
            </tr>

            <?php } ?>
        </table>

    </div>

    <?php 
        include_once 'includes/footer.php';
    ?>