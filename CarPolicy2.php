<?php
class CarPolicy2 {
    private $policyNumber;
    private $policyHolderName;
    private $dateOfLastClaim;
    private $yearlyPremium;

    public function __construct($policyNumber, $policyHolderName, $dateOfLastClaim, $yearlyPremium) {
        $this->policyNumber = $policyNumber;
        $this->policyHolderName = $policyHolderName;
        $this->dateOfLastClaim = $dateOfLastClaim;
        $this->yearlyPremium = $yearlyPremium;
    }

    public function getPolicyNumber() {
        return $this->policyNumber;
    }

    public function getPolicyHolderName() {
        return $this->policyHolderName;
    }

    public function getDateOfLastClaim() {
        return $this->dateOfLastClaim;
    }

    public function getYearlyPremium() {
        return $this->yearlyPremium;
    }

    public function getTotalYearsNoClaims() {
        $currentDate = new DateTime();
        $lastDate = new DateTime($this->dateOfLastClaim);
        $interval = $currentDate->diff($lastDate);
        return $interval->format("%y");
    }

    public function getDiscount() {
        $years = $this->getTotalYearsNoClaims();

        if ($years >= 3 && $years <= 5) {
            $discount = 0.1;
        } else if ($years > 5) {
            $discount = 0.15;
        } else {
            $discount = 0;
        }

        return $discount;
    }

    public function getDiscountedPremium() {
        $discount = $this->getDiscount();
        $discountedPremium = $this->yearlyPremium - ($this->yearlyPremium * $discount);
        return $discountedPremium;
    }

    public function __toString() {
        return "PN: " . $this->policyNumber;
    }
}
?>