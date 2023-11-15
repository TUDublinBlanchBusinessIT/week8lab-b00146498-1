<?php
include("CarPolicy2.php");


date_default_timezone_set('GMT');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $policyNumber = $_POST["policyNumber"];
    $yearlyPremium = $_POST["yearlyPremium"];
    $dateOfLastClaim = $_POST["dateOfLastClaim"];
    
    $carPolicy = new CarPolicy($policyNumber, $yearlyPremium);
    $carPolicy->setDateOfLastClaim($dateOfLastclaim);
    
    $initialPremium = $yearlyPremium;
    $dicountedPremium = $carPolicy->getDiscountedPremium();
    
    echo "initial Premium: $initialPremium<br>";
    echo "dicounted Premium: $discountedPremium<br>";
} else{
    echo "Form not submitted";
}


?>