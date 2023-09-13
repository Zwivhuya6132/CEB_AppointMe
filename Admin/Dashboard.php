<?php 
    $page = "Dashboard";
    include_once 'includes/header.php';
?>

<div class="tables-main">

        <div class="flex-container">
            <div class="div-applications">
                <h1 class="ActiveTutors-title" style="text-align: center;"> Applications </h1>

                <table class="table-center">
                    <tr>
                        <th>Student Number</th>
                        <th>First Name</th>
                        <th>Last Name</th>
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
                    </tr>

                    <?php } ?>
                </table>
            </div>


            <div class="div-applications">
                <h1 class="ActiveTutors-title" style="text-align: center;"> Approved Applications </h1>

                <table class="table-center">

                    <tr>
                        <th>Student Number</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                    </tr>

                    <?php
                        include_once 'includes/conn.inc.php';
                        $sql = "SELECT students.StudentNo, students.FName, students.LName, tutor_reg.UjEmployment
                                FROM students
                                INNER JOIN tutor_reg ON students.StudentNo = tutor_reg.StudentNo 
                                WHERE tutor_reg.status = 'approved'";
                        $result = $conn->query($sql);

                        while($row = mysqli_fetch_assoc($result)){
                    ?>

                    <tr>
                        <td><?php echo $row['StudentNo'];?></td>
                        <td><?php echo $row['FName'];?></td>
                        <td><?php echo $row['LName'];?></td>
                    </tr>

                    <?php } ?>


                </table>
            </div>


        </div>

        <h1 class="ActiveTutors-title" style="text-align: center;"> Active Tutors</h1>

        <table class="table-center">

            <tr>
                <th>Student Number</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>

            <tr>
                <td>219362512</td>
                <td>Maria</td>
                <td>Anders</td>
            </tr>
            <tr>
                <td>2554228639</td>
                <td>Francisco</td>
                <td>Chang</td>
            </tr>
            <tr>
                <td>7845547166</td>
                <td>Roland</td>
                <td>Mendel</td>
            </tr>
            <tr>
                <td>2291447416</td>
                <td>Helen</td>
                <td>Bennett</td>
            </tr>
            <tr>
                <td>1260576965</td>
                <td>Karissa</td>
                <td>Gager</td>
            </tr>
            <tr>
                <td>083366839</td>
                <td>Ermentrude</td>
                <td>Stork</td>
            </tr>
            

        </table>


        <h1 class="ActiveTutors-title" style="text-align: center;"> Pending Tutors</h1>

        <table class="table-center">

            <tr>
                <th>Student Number</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            <?php
                include_once 'includes/conn.inc.php';
                $sql = "SELECT students.StudentNo, students.FName, students.LName, tutor_reg.UjEmployment
                        FROM students
                        INNER JOIN tutor_reg ON students.StudentNo = tutor_reg.StudentNo 
                        WHERE tutor_reg.status = 'Pending'";
                $result = $conn->query($sql);

                while($row = mysqli_fetch_assoc($result)){
            ?>

            <tr>
                <td><?php echo $row['StudentNo'];?></td>
                <td><?php echo $row['FName'];?></td>
                <td><?php echo $row['LName'];?></td>
            </tr>

            <?php } ?>

        </table>
    </div>

    <?php 
        include_once 'includes/footer.php';
    ?>