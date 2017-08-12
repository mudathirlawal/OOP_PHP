<?php

class TaxPayer 
{
    public $payersFirstName;
    public $payersLastName;
    public $totalTaxBill;
    public $annualIncome;
    public $firstRemainder;
    public $secondRemainder;
    public $thirdRemainder;
    public $fourthRemainder;
    public $fifthRemainder;
    public $initialTaxCharge1;
    public $initialTaxCharge2;
    public $initialTaxCharge3;
    public $initialTaxCharge4;
    public $initialTaxCharge5;
    public $initialTaxCharge6;
    
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
               $this->getAnnualTaxBill($annualIncome) . PHP_EOL;
    }
    
    public function getAnnualIncome() {
        return $this->annualIncome . PHP_EOL;  
    }
    
    public function setAnnualIncome($annualIncome) {
        $this->annualIncome = $annualIncome;
    }
    
    public function setPayersName($payersLastName, $payersFirstName) {
        $this->payersLastname  = $payersLastName;
        $this->payersFirstName = $payersFirstName;
    }
    
    public function getPayersName() {
        return "NAME: " . $payersLastName . " " . $payersFirstName . PHP_EOL;
    }
    
    public function getAnnualTaxBill($annualIncome) {
        
        switch ( $annualIncome ) {

            case $annualIncome <= INCOME_PORTION_1:
                 $initialTaxCharge1 = $annualIncome      * FIRST_TAX_RATE;
                 echo $totalTaxBill = $initialTaxCharge1;
                 break;
            case $annualIncome > INCOME_PORTION_1 && $annualIncome <= (INCOME_PORTION_2 + INCOME_PORTION_1):  
                 $firstRemainder    = $annualIncome      - INCOME_PORTION_1;
                 $initialTaxCharge2 = $firstRemainder    * SECOND_TAX_RATE;
                 $initialTaxCharge1 = $annualIncome      * FIRST_TAX_RATE;
                 echo $totalTaxBill = $initialTaxCharge1 + $initialTaxCharge2;
                 break;
            case $annualIncome > (INCOME_PORTION_2 + INCOME_PORTION_1) && $annualIncome <= 
                   (INCOME_PORTION_3 + INCOME_PORTION_2 + INCOME_PORTION_1):
                 $firstRemainder    = $annualIncome      - INCOME_PORTION_1;
                 $secondRemainder   = $firstRemainder    - INCOME_PORTION_2;
                 $initialTaxCharge3 = $secondRemainder   * THIRD_TAX_RATE;
                 $initialTaxCharge2 = $firstRemainder    * SECOND_TAX_RATE;
                 $initialTaxCharge1 = $annualIncome      * FIRST_TAX_RATE;
                 echo $totalTaxBill = $initialTaxCharge1 + $initialTaxCharge2 + 
                      $initialTaxCharge3;
                 break;
            case $annualIncome > (INCOME_PORTION_3 + INCOME_PORTION_2 + INCOME_PORTION_1) && 
                 $annualIncome <= (INCOME_PORTION_4 + INCOME_PORTION_3 + INCOME_PORTION_2 + INCOME_PORTION_1):
                 $firstRemainder    = $annualIncome      - INCOME_PORTION_1;
                 $secondRemainder   = $firstRemainder    - INCOME_PORTION_2;
                 $thirdRemainder    = $secondRemainder   - INCOME_PORTION_3;
                 $initialTaxCharge4 = $thirdremainder    * FOURTH_TAX_RATE;
                 $initialTaxCharge3 = $secondRemainder   * THIRD_TAX_RATE;
                 $initialTaxCharge2 = $firstRemainder    * SECOND_TAX_RATE;
                 $initialTaxCharge1 = $annualIncome      * FIRST_TAX_RATE;
                 echo $totalTaxBill = $initialTaxCharge1 + $initialTaxCharge2 + 
                                      $initialTaxCharge3 + $initialTaxCharge4;
                 break;
            case $annualIncome > (INCOME_PORTION_4 + INCOME_PORTION_3 + INCOME_PORTION_2 + INCOME_PORTION_1) 
                 && $annualIncome <= (INCOME_PORTION_5 + INCOME_PORTION_4 + INCOME_PORTION_3 + 
                                      INCOME_PORTION_2 + INCOME_PORTION_1):
                 $firstRemainder    = $annualIncome      - INCOME_PORTION_1;
                 $secondRemainder   = $firstRemainder    - INCOME_PORTION_2;
                 $thirdRemainder    = $secondRemainder   - INCOME_PORTION_3;
                 $fourthRemainder   = $thirdRemainder    - INCOME_PORTION_4;
                 $initialTaxCharge5 = $fourthRemainder   * FIFTH_TAX_RATE;
                 $initialTaxCharge4 = $thirdremainder    * FOURTH_TAX_RATE;
                 $initialTaxCharge3 = $secondRemainder   * THIRD_TAX_RATE;
                 $initialTaxCharge2 = $firstRemainder    * SECOND_TAX_RATE;
                 $initialTaxCharge1 = $annualIncome      * FIRST_TAX_RATE;
                 echo $totalTaxBill = $initialTaxCharge1 + $initialTaxCharge2 + 
                      $initialTaxCharge3 + $initialTaxCharge4 + $initialTaxCharge5;
                 break;
            case $annualIncome > (INCOME_PORTION_5 + INCOME_PORTION_4 + INCOME_PORTION_3 + 
                                        INCOME_PORTION_2 + INCOME_PORTION_1): 
                 $firstRemainder    = $annualIncome      - INCOME_PORTION_1;
                 $secondRemainder   = $firstRemainder    - INCOME_PORTION_2;
                 $thirdRemainder    = $secondRemainder   - INCOME_PORTION_3;
                 $fourthRemainder   = $thirdRemainder    - INCOME_PORTION_4;
                 $fifthRemainder    = $annualIncome      - (INCOME_PORTION_1 + INCOME_PORTION_2 +                                                     INCOME_PORTION_3   + INCOME_PORTION_4  + INCOME_PORTION_5 );
                 $initialTaxCharge6 = $fifthRemainder    * SIXTH_TAX_RATE;
                 $initialTaxCharge5 = $fourthRemainder   * FIFTH_TAX_RATE;
                 $initialTaxCharge5 = $fourthRemainder   * FIFTH_TAX_RATE;
                 $initialTaxCharge4 = $thirdremainder    * FOURTH_TAX_RATE;
                 $initialTaxCharge3 = $secondRemainder   * THIRD_TAX_RATE;
                 $initialTaxCharge2 = $firstRemainder    * SECOND_TAX_RATE;
                 $initialTaxCharge1 = $annualIncome      * FIRST_TAX_RATE;
                 echo $totalTaxBill = $initialTaxCharge1 + $initialTaxCharge2 + $initialTaxCharge3 +
                                      $initialTaxCharge4 + $initialTaxCharge5 + $initialTaxCharge6;
                 break;
          }
    }
}   # End of class definition.
#........................................................................................................



$taxPayer1 = new TaxPayer("BULL", "John", 97000.00);
echo $taxPayer1->getAnnualTaxBill(97000.00);
//echo $taxPayer1;
var_dump($taxPayer1);

















