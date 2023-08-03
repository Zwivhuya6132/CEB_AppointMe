<?php

if(isset($_POST['submit'])){
    $StudentNumber = $_POST['StudentNumber'];
    $AccountHolder = $_POST['account-holder'];
    $BankName = $_POST['bank-name'];
    $BankBranch = $_POST['bank-branch'];
    $BranchCode = $_POST['branch-code'];
    $AccountNumber = $_POST['account-number'];
    $AccountType = $_POST['account-type'];
    $IbanCode = $_POST['iban'];
    $SwiftCode = $_POST['swift-code'];
    $ProofOfBanking = $_FILES['ProofOfBanking']['name'];

    require_once 'conn.inc.php';
    require_once 'function.inc.php';

    if(emptyBanking($AccountHolder, $BankName, $BankBranch, $BranchCode, $AccountNumber, $AccountType, $IbanCode, $SwiftCode, $ProofOfBanking) !== false){
        header("location: ../banking.php?error=emptybankingdetails");
        exit();
    }

    bankingDetails($conn, $StudentNumber, $AccountHolder, $BankName, $BankBranch, $BranchCode, $AccountNumber, $AccountType, $IbanCode, $SwiftCode, $ProofOfBanking);
}else{
    header("location: ../tutor.php");
    exit();
}
