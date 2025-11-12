<?php

$yp = $_POST['yearlyPremium'];
$pn = $_POST['policyNumber'];
$doc = $_POST['dateOfLastClaim'];

include('CarPolicy.php');

$thisCarPolicy = new CarPolicy($pn, $yp);

$thisCarPolicy->setDateOfLastClaim($doc);

echo "Yearly premium is: " 




?>
