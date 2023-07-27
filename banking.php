<?php
    include_once 'includes/header.php';
?>

    <div style="text-align: center;">
        <h1 style="font-size: 25px;">BANKING CONFIRMATION</h1>
        <p style="color: red; width: 50%; margin:10px auto;">
            Before submitting please make sure everything is filled correctly
        </p>
    </div>


    <form action="" method="POST" enctype="multipart/form-data"  name="form-reg" class="form">

    <div class="d-div">
        <h1>Banking Details</h1>
    </div>
    <div class="new-clearfix">
        <div class="new-form-group">
            <label for="account-holder" class="new-label">Account Holder Name:</label>
            <input type="text" id="account-holder" class="new-form-control" >
        </div>
        
        <div class="new-form-group">
            <label for="bank-name" class="new-label">Bank Name:</label>
            <input type="text" id="bank-name" class="new-form-control">
        </div>
        
        <div class="new-form-group">
            <label for="bank-branch" class="new-label">Bank Branch:</label>
            <input type="text" id="bank-branch" class="new-form-control">
        </div>
    </div>
    
    <div class="new-clearfix">
        <div class="new-form-group">
            <label for="branch-code" class="new-label">Branch Code:</label>
            <input type="text" id="branch-code" class="new-form-control">
        </div>
        
        <div class="new-form-group">
            <label for="account-number" class="new-label">Account Number:</label>
            <input type="text" id="account-number" class="new-form-control">
        </div>
        
        <div class="new-form-group">
            <label for="account-type" class="new-label">Account Type:</label>
            <select id="account-type" class="new-form-control">
                <option value="savings">Savings</option>
                <option value="cheque">Cheque</option>
                <option value="current">Current</option>
            </select>
        </div>
    </div>
    
    <div class="new-clearfix">
        <div class="new-form-group">
            <label for="iban" class="new-label">IBAN No (International):</label>
            <input type="text" id="iban" class="new-form-control">
        </div>
        
        <div class="new-form-group">
            <label for="swift-code" class="new-label">Swift Code (International):</label>
            <input type="text" id="swift-code" class="new-form-control">
        </div>
        
        <div class="new-form-group">
            <label for="bank-address" class="new-label">Bank Physical Address:</label>
            <input type="text" id="bank-address" class="new-form-control">
        </div>
    </div>
    <label for="upload">Attach Your proof of banking</label><br>
    <input type="file" name="" id="upload" style="border: 2px solid #2e1a46; padding: 5px; border-radius: 10px; cursor: pointer;">


    <div class="end-butt">
        <a href="page.php">
            <input type="button" value="Return to Start" class="back butt" name="back">
        </a>
        <a href="page.php">
            <input type="button" value="Upload Document" class="submit butt" name="submit"> 
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