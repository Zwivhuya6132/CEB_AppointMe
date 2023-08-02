<?php
    include_once 'includes/header.php';
?>

    <div style="text-align: center;">
        <h1 style="font-size: 25px;">BANKING CONFIRMATION</h1>
        <p style="color: red; width: 50%; margin:10px auto;">
            Before submitting please make sure everything is filled correctly
        </p>
    </div>


    <form action="includes/banking.inc.php" method="POST" enctype="multipart/form-data"  name="form-reg" class="regform">

    <div class="d-div">
        <h1>Banking Details</h1>
    </div> 

    <div class="new-form-group fields">
        <label for="account-holder" class="new-label">Account Holder Name:</label>
        <input type="text" name="account-holder" id="account-holder" class="new-form-control inputs" >
    </div>

    <input type="hidden" name="StudentNumber" value="<?php echo isset($_SESSION['StudentNo']) ? $_SESSION['StudentNo'] : ''; ?>">


    <div class="fields-group">
        <div class="new-form-group fields names-in">
            <label for="bank-name" class="new-label">Bank Name:</label>
            <input name="bank-name" type="text" id="bank-name" class="new-form-control inputs">
        </div>

        <div class="new-form-group fields names-in">
            <label for="bank-branch" class="new-label">Bank Branch:</label>
            <input name="bank-branch" type="text" id="bank-branch" class="new-form-control inputs">
        </div>
    </div>
        
    <div class="new-form-group fields">
        <label for="branch-code" class="new-label">Branch Code:</label>
        <input type="text" id="branch-code" name="branch-code" class="new-form-control inputs">
    </div>
    
    <div class="new-clearfix fields-group">
        
        <div class="names-in fields">
            <label for="account-number" class="new-label">Account Number:</label>
            <input type="text" id="account-number" name="account-number" class="new-form-control inputs">
        </div>
        
        <div class="names-in fields">
            <label for="account-type" class="new-label">Account Type:</label>
            <select id="account-type" name="account-type" class="new-form-control inputs">
                <option value="savings">Savings</option>
                <option value="cheque">Cheque</option>
                <option value="current">Current</option>
            </select>
        </div>
    </div>
    
    <div class="new-clearfix fields names-in">
        <div class="new-form-group fields">
            <label for="iban" class="new-label">IBAN No (International):</label>
            <input type="text" name="iban" id="iban" class="new-form-control inputs">
        </div>
        
        <div class="new-form-group">
            <label for="swift-code" class="new-label">Swift Code (International):</label>
            <input type="text" id="swift-code" name="swift-code" class="new-form-control inputs">
        </div>
        
    </div>
    <label for="upload">Attach Your proof of banking</label><br>
    <input type="file" class="inputs" name="ProofOfBanking" id="upload" style="border: 2px solid #2e1a46; padding: 5px; border-radius: 10px; cursor: pointer; margin-bottom:20px;">


    <div class="button-groups">
        <a href="page.php">
            <!-- <input type="button" value="Return to Start" class="back butts" name="back"> -->
            <button type="submit" class="submits-button login-inputs" name="back">&nbsp;&nbsp;cancel&nbsp;&nbsp;</button>

        </a>
        <a href="page.php">
            <button type="submit" class="submits-button login-inputs" name="submit">Upload</button>

            <!-- <input type="button" value="Upload Document" class="submit butts" name="submit">  -->
        </a>
    </div>
    </form>
    <script src="all.js"  ></script>
    <script>
        var alertButton = document.querySelector('.submit');
        alertButton.addEventListener('click', function() {
          alert('You have successfuly uploaded your banking detail!');
        });
    </script>
</body>
</html>