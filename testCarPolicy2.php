<?php
require_once('CarPolicy2.php');

$policy1 = new CarPolicy2(1234, "Alice", "2023-11-10", 1000);

echo $policy1 . "<br>";
echo "Years No Claims: " . $policy1->getTotalYearsNoClaims() . "<br>";
echo "Discount: " . $policy1->getDiscount() . "%<br>";
echo "Discounted Premium: $" . $policy1->getDiscountedPremium() . "<br>";
?>