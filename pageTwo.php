<?php
include_once 'includes/header.php';
?>

<div class="text-center">
    <h1 style="font-size: 25px;">REGISTRATION PROCESS</h1>
</div>

<div class="progress-bar">
    <div class="progress">55%</div>
</div>

<form action="includes/tutor.inc.php" method="POST" enctype="multipart/form-data" name="form-reg" class="regform">
    <div class="d-div">
        <h1>Employment Background</h1>
    </div>

    <div class="fields">
        <label for="employee-status" class="label">Returning or New Employee:</label>
        <select id="employee-status" class="inputs" name="employee-status">
            <option value="returning">Returning</option>
            <option value="new">New</option>
        </select>
    </div>

    <div class="fields">
        <label for="employee-number" class="label">Employee Number:</label>
        <input type="text" id="employee-number" class="inputs" name="employee-number">
    </div>

    <div class="fields">
        <label for="previously-employed" class="label">Previously employed at UJ:</label>
        <select id="previously-employed" class="inputs" name="previously-employed">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
    </div>

    <div class="fields">
        <label for="faculty-division" class="label">If yes, please select faculty/division:</label>
        <input type="text" id="faculty-division" class="inputs" name="faculty-division">
    </div>

    <div class="fields">
        <label for="appointed-as" class="label">Appointed as:</label>
        <input type="text" id="appointed-as" class="inputs" name="appointed-as">
    </div>

    <div class="d-div">
        <h1>Personal Details</h1>
    </div>

    <div class="fields-group">
        <div class="fields names-in">
            <label for="confirm-care" class="label">Confirm Care of Intermediary:</label>
            <select id="confirm-care" class="inputs" name="confirm-care">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>

        <div class="fields names-in">
            <label for="faculty" class="label">Faculty:</label>
            <input type="text" id="faculty" class="inputs" name="faculty">
        </div>
    </div>

    <input type="hidden" name="StudentNumber" value="<?php echo isset($_SESSION['StudentNo']) ? $_SESSION['StudentNo'] : ''; ?>">

    <div class="d-div">
        <h1>Temporary Appointment Details</h1>
    </div>

    <div id="fields-group">
        <div class="fields">
            <div class="new-form-group float-left">
                <label for="employment-group" class="new-label">Employment Group:</label>
                <select id="employment-group" class="inputs" name="employment-group">
                    <option value="group1">Group 1</option>
                    <option value="group2">Group 2</option>
                </select>
            </div>

            <div class="new-form-group float-right">
                <label for="appointment-category" class="new-label">Appointment Category:</label>
                <select id="appointment-category" class="inputs" name="appointment-category">
                    <option value="category1">Category 1</option>
                    <option value="category2">Category 2</option>
                </select>
            </div>
        </div>

        <div class="fields-group">
            <div class="fields names-in">
                <label class="new-label">Duration of Appointment:</label>
                <div>
                    <label for="start-date">Start Date:</label>
                    <input type="date" id="start-date" class="inputs" name="start-date">
                </div>
                <div>
                    <label for="end-date">End Date:</label>
                    <input type="date" id="end-date" class="inputs" name="end-date">
                </div>
            </div>
        </div>

        <div id="fields-group">
            <div class="fields">
                <div class="new-form-group float-left">
                    <label for="reason-temp-employment" class="new-label">Reason for Temporary Employment:</label>
                    <select id="reason-temp-employment" class="inputs" name="reason-temp-employment">
                        <option value="Reason1">Reason 1</option>
                        <option value="Reason2">Reason 2</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="button-groups">
        <button type="submit" class="submits-button login-inputs" name="back">&nbsp;&nbsp;&nbsp;&nbsp;back&nbsp;&nbsp;&nbsp;&nbsp;</button>
        <button type="submit" class="submits-button login-inputs" name="submit"><a href="pageThree.php">continue</a></button>
        <!--             
        <input type="button" value="Back to Start" class="back-button">
        <input type="submit" value="Continue Application" name="submit" class="submit-button"> -->
    </div>
</form>

<?php
include_once 'includes/footer.php';
?>
