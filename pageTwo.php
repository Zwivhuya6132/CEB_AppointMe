    <?php
        include_once 'includes/header.php';
    ?>

    <div style="text-align: center;">
        <h1 style="font-size: 25px;">REGISTRATION PROCESS</h1>
    </div>

    <div class="progress-bar">
        <div class="progress">55%</div>
    </div>


    <form action="" method="POST" enctype="multipart/form-data"  name="form-reg" class="form">
        <div class="d-div">
            <h1>Employment Background</h1>
        </div>

        <div class="form-group">
            <label for="employee-status" class="label">Returning or New Employee:</label>
            <select id="employee-status" class="form-control">
                <option value="returning">Returning</option>
                <option value="new">New</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="employee-number" class="label">Employee Number:</label>
            <input type="text" id="employee-number" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="previously-employed" class="label">Previously employed at UJ:</label>
            <select id="previously-employed" class="form-control">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="faculty-division" class="label">If yes, please select faculty/division:</label>
            <input type="text" id="faculty-division" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="appointed-as" class="label">Appointed as:</label>
            <input type="text" id="appointed-as" class="form-control">
        </div>

    <div class="d-div">
        <h1>Personal Details</h1>
    </div>

    <div class="clearfix">
        <div class="form-group">
            <label for="confirm-care" class="label">Confirm Care of Intermediary:</label>
            <select id="confirm-care" class="form-control">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="faculty" class="label">Faculty:</label>
            <input type="text" id="faculty" class="form-control">
        </div>
    </div>

    <div class="d-div">
        <h1>Temporary Appointment Details</h1>
    </div>

    <div id="new-form-container">
        <form>
            <div class="new-clearfix">
                <div class="new-form-group">
                    <label for="employment-group" class="new-label">Employment Group:</label>
                    <select id="employment-group" class="new-form-control">
                        <option value="group1">Group 1</option>
                        <option value="group2">Group 2</option>
                    </select>
                </div>
                
                <div class="new-form-group">
                    <label for="appointment-category" class="new-label">Appointment Category:</label>
                    <select id="appointment-category" class="new-form-control">
                        <option value="category1">Category 1</option>
                        <option value="category2">Category 2</option>
                    </select>
                </div>
            </div>
            
            <div class="new-clearfix">
                <div class="new-form-group">
                    <label class="new-label">Duration of Appointment:</label>
                    <div>
                        <label for="start-date">Start Date:</label>
                        <input type="date" id="start-date" class="new-form-control">
                    </div>
                    <div>
                        <label for="end-date">End Date:</label>
                        <input type="date" id="end-date" class="new-form-control">
                    </div>
                </div>
            </div>
            
            <div class="new-clearfix">
                <div class="new-form-group">
                    <label for="reason-temp-employment" class="new-label">Reason for Temporary Employment:</label>
                    <select id="reason-temp-employment" class="new-form-control">
                        <option value="reason1">Reason 1</option>
                        <option value="reason2">Reason 2</option>
                    </select>
                </div>
            </div>

    <div class="end-butt">
        <a href="index.php">
            <input type="button" value="Back to Start" class="back butt" name="back">
        </a>
        <a href="pageThree.php">
            <input type="button" value="Continue Application" class="submit butt" name="submit"> 
        </a>
    </div>
    </form>
    <script src="all.js"  ></script>
    <?php
  include_once 'includes/footer.php';
?>