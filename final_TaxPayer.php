<?php
class TaxPayer 
{
    public  $payersFirstName;
    public  $payersLastName;
    public  $totalTaxBill;
    public  $annualIncome;
    private $firstRemainder;
    private $secondRemainder;
    private $thirdRemainder;
    private $fourthRemainder;
    private $fifthRemainder;
    private $finalRemainder;
    private $initialTaxCharge1;
    private $initialTaxCharge2;
    private $initialTaxCharge3;
    private $initialTaxCharge4;
    private $initialTaxCharge5;
    private $initialTaxCharge6;
    
    const FIRST_TAX_RATE    = 0.00;
    const SECOND_TAX_RATE   = 0.10;
    const THIRD_TAX_RATE    = 0.15;
    const FOURTH_TAX_RATE   = 0.20;
    const FIFTH_TAX_RATE    = 0.25;
    const SIXTH_TAX_RATE    = 0.30;  
    const INCOME_PORTION_1  = 1000.00;  
    const INCOME_PORTION_2  = 9000.00;    
    const INCOME_PORTION_3  = 10200.00; 
    const INCOME_PORTION_4  = 10550.00; 
    const INCOME_PORTION_5  = 19250.00; 
    
    public function __construct($payersLastName, $payersFirstName, $annualIncome) {
        $this->payersLastName  = $payersLastName;
        $this->payersFirstName = $payersFirstName;
        $this->annualIncome    = $annualIncome;
    }
    
    public function __toString() {
        return $this->payersLastName . ", " . $this->payersFirstName . ":  " . 
               $this->getAnnualTaxBill($this->annualIncome) . PHP_EOL;
    }
    
    public function getAnnualIncome() {
        return $this->annualIncome . PHP_EOL;  
    }
    
    public function editAnnualIncome($annualIncome) {
        $this->annualIncome = $annualIncome;
    }
    
    public function editPayersName($payersLastName, $payersFirstName) {
        $this->payersLastname  = $payersLastName;
        $this->payersFirstName = $payersFirstName;
    }
    
    public function getPayersName() {
        return "NAME: " . $this->payersLastName . " " . $this->payersFirstName . PHP_EOL;
    }
    
    public function getAnnualTaxBill($annualIncome) {
    if( $this->annualIncome <= self::INCOME_PORTION_1 ) {
        $this->initialTaxCharge1 = $this->annualIncome * self::FIRST_TAX_RATE;
        return $this->totalTaxBill = $this->initialTaxCharge1;
    }
    else {
        $this->firstRemainder = $this->annualIncome - self::INCOME_PORTION_1;
        if( $this->firstRemainder <= self::INCOME_PORTION_2 ) {
            $this->initialTaxCharge2 = $this->firstRemainder * self::SECOND_TAX_RATE;
            $this->initialTaxCharge1 = $this->annualIncome * self::FIRST_TAX_RATE;
            return $this->totalTaxBill = $this->initialTaxCharge1 + $this->initialTaxCharge2;
        } 
        else {
            $this->secondRemainder = $this->firstRemainder - self::INCOME_PORTION_2;
            if( $this->secondRemainder <= self::INCOME_PORTION_3 ) {
                $this->initialTaxCharge3 = $this->secondRemainder * self::THIRD_TAX_RATE;
                $this->initialTaxCharge2 = $this->firstRemainder * self::SECOND_TAX_RATE;
                $this->initialTaxCharge1 = $this->annualIncome * self::FIRST_TAX_RATE;
                return $this->totalTaxBill =   
                       $this->initialTaxCharge1 + $this->initialTaxCharge2 + $this->initialTaxCharge3;
            }
            else {
                $this->thirdRemainder = $this->secondRemainder - self::INCOME_PORTION_3;
                if( $this->thirdRemainder <= self::INCOME_PORTION_4 ) {
                    $this->initialTaxCharge4 = $this->thirdremainder * self::FOURTH_TAX_RATE;
                    $this->initialTaxCharge3 = $this->secondRemainder * self::THIRD_TAX_RATE;
                    $this->initialTaxCharge2 = $this->firstRemainder * self::SECOND_TAX_RATE;
                    $this->initialTaxCharge1 = $this->annualIncome *self::FIRST_TAX_RATE;
                    return $this->totalTaxBill = $this->initialTaxCharge1 + $this->initialTaxCharge2 + 
                                           $this->initialTaxCharge3 + $this->initialTaxCharge4;
                } 
                else {
                    $this->fourthRemainder = $this->thirdRemainder - self::INCOME_PORTION_4;
                    if( $this->fourthRemainder <= self::INCOME_PORTION_5 ) {
                        $this->initialTaxCharge5 = $this->fourthRemainder * self::FIFTH_TAX_RATE;
                        $this->initialTaxCharge4 = $this->thirdRemainder * self::FOURTH_TAX_RATE;
                        $this->initialTaxCharge3 = $this->secondRemainder * self::THIRD_TAX_RATE;
                        $this->initialTaxCharge2 = $this->firstRemainder * self::SECOND_TAX_RATE;
                        $this->initialTaxCharge1 = $this->annualIncome * self::FIRST_TAX_RATE;
                        return $this->totalTaxBill = $this->initialTaxCharge1 + $this->initialTaxCharge2 + 
                               $this->initialTaxCharge3 + $this->initialTaxCharge4 + $this->initialTaxCharge5;
                    }  
                    else { 
                          $this->finalRemainder = $this->annualIncome - (self::INCOME_PORTION_1 +                                                self::INCOME_PORTION_2 + self::INCOME_PORTION_3 + self::INCOME_PORTION_4                                        + self::INCOME_PORTION_5 );
                          $this->initialTaxCharge6 = $this->finalRemainder * self::SIXTH_TAX_RATE;
                          $this->initialTaxCharge5 = $this->fourthRemainder * self::FIFTH_TAX_RATE;
                          $this->initialTaxCharge4 = $this->thirdRemainder * self::FOURTH_TAX_RATE;
                          $this->initialTaxCharge3 = $this->secondRemainder * self::THIRD_TAX_RATE;
                          $this->initialTaxCharge2 = $this->firstRemainder * self::SECOND_TAX_RATE;
                          $this->initialTaxCharge1 = $this->annualIncome * self::FIRST_TAX_RATE;
                          return $this->totalTaxBill = $this->initialTaxCharge1 + $this->initialTaxCharge2 + 
                                 $this->initialTaxCharge3 + $this->initialTaxCharge4 + $this->initialTaxCharge5                                  + $this->initialTaxCharge6 . PHP_EOL;
                    }
                }
            } 
        }
    }
    }
}   # End of class definition.
#........................................................................................................

// Method call:

$taxPayer1 = new TaxPayer("AMBODE", "Akinwumi", 4567000.00);
echo $taxPayer1;
//echo $taxPayer1->getAnnualTaxBill(1000000.00);
//var_dump($taxPayer1);



