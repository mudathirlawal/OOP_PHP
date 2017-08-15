<?php
class TaxPayer 
{
    public  $firstName;
    public  $lastName;
    public  $totalTaxBill;
    public  $annualIncome;
    private $firstRemainder;
    private $secondRemainder;
    private $thirdRemainder;
    private $fourthRemainder;
    private $fifthRemainder;
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
    
    public function __construct($lastName, $firstName, $annualIncome) 
    {
        $this->lastName     = $lastName;
        $this->firstName    = $firstName;
        $this->annualIncome = $annualIncome;  
    }
    
    public function __toString() 
    {
        return $this->lastName . ", " . $this->firstName . ":  " . 
               $this->getAnnualTaxBill($this->annualIncome) . PHP_EOL;
    }
    
    public function getAnnualIncome() 
    {
        return $this->annualIncome . PHP_EOL;  
    }
    
    public function editAnnualIncome($annualIncome) 
    {
        $this->annualIncome = $annualIncome;
    }
    
    public function editPayersName($lastName, $firstName) 
    {
        $this->lastname  = $lastName;
        $this->firstName = $firstName;
    }
    
    public function getPayersName() 
    {
        return "NAME: " . $this->lastName . " " . $this->firstName . PHP_EOL;
    }
    
    public function getAnnualTaxBill($annualIncome) 
    {
    if( $this->annualIncome <= self::INCOME_PORTION_1 ) {
        $this->initialTaxCharge1 = $this->annualIncome * self::FIRST_TAX_RATE;
        return $this->totalTaxBill = $this->initialTaxCharge1;
    } else {
        $this->firstRemainder = $this->annualIncome - self::INCOME_PORTION_1;
        if( $this->firstRemainder   <= self::INCOME_PORTION_2 ) {
            $this->initialTaxCharge2 = $this->firstRemainder  * self::SECOND_TAX_RATE;
            $this->initialTaxCharge1 = self::INCOME_PORTION_1 * self::FIRST_TAX_RATE;
            return $this->totalTaxBill = $this->initialTaxCharge1 + $this->initialTaxCharge2;
        } else {
            $this->secondRemainder = $this->firstRemainder - self::INCOME_PORTION_2;
            if( $this->secondRemainder    <= self::INCOME_PORTION_3 ) {
                $this->initialTaxCharge3   = $this->secondRemainder * self::THIRD_TAX_RATE;
                $this->initialTaxCharge2   = self::INCOME_PORTION_2 * self::SECOND_TAX_RATE;
                $this->initialTaxCharge1   = self::INCOME_PORTION_1 * self::FIRST_TAX_RATE;
                return $this->totalTaxBill =   
                       $this->initialTaxCharge1 + $this->initialTaxCharge2 + $this->initialTaxCharge3;
            } else {
                $this->thirdRemainder = $this->secondRemainder - self::INCOME_PORTION_3;
                if( $this->thirdRemainder   <= self::INCOME_PORTION_4 ) {
                    $this->initialTaxCharge4 = $this->thirdRemainder  * self::FOURTH_TAX_RATE;
                    $this->initialTaxCharge3 = self::INCOME_PORTION_3 * self::THIRD_TAX_RATE;
                    $this->initialTaxCharge2 = self::INCOME_PORTION_2 * self::SECOND_TAX_RATE;
                    $this->initialTaxCharge1 = self::INCOME_PORTION_1 * self::FIRST_TAX_RATE;
                    return $this->totalTaxBill = $this->initialTaxCharge1 + $this->initialTaxCharge2 + 
                                           $this->initialTaxCharge3 + $this->initialTaxCharge4;
                } else {
                    $this->fourthRemainder = $this->thirdRemainder - self::INCOME_PORTION_4;
                    if( $this->fourthRemainder  <= self::INCOME_PORTION_5 ) {
                        $this->initialTaxCharge5 = $this->fourthRemainder * self::FIFTH_TAX_RATE;
                        $this->initialTaxCharge4 = self::INCOME_PORTION_4 * self::FOURTH_TAX_RATE;
                        $this->initialTaxCharge3 = self::INCOME_PORTION_3 * self::THIRD_TAX_RATE;
                        $this->initialTaxCharge2 = self::INCOME_PORTION_2 * self::SECOND_TAX_RATE;
                        $this->initialTaxCharge1 = self::INCOME_PORTION_1 * self::FIRST_TAX_RATE;
                        return $this->totalTaxBill = $this->initialTaxCharge1 + $this->initialTaxCharge2 + 
                               $this->initialTaxCharge3 + $this->initialTaxCharge4 + $this->initialTaxCharge5;
                    } else { 
                          $this->fifthRemainder    = $this->annualIncome - (self::INCOME_PORTION_1 +                                         self::INCOME_PORTION_2 + self::INCOME_PORTION_3 + self::INCOME_PORTION_4                                       + self::INCOME_PORTION_5 );
                          $this->initialTaxCharge6 = $this->fifthRemainder  * self::SIXTH_TAX_RATE;
                          $this->initialTaxCharge5 = self::INCOME_PORTION_5 * self::FIFTH_TAX_RATE;
                          $this->initialTaxCharge4 = self::INCOME_PORTION_4 * self::FOURTH_TAX_RATE;
                          $this->initialTaxCharge3 = self::INCOME_PORTION_3 * self::THIRD_TAX_RATE;
                          $this->initialTaxCharge2 = self::INCOME_PORTION_2 * self::SECOND_TAX_RATE;
                          $this->initialTaxCharge1 = self::INCOME_PORTION_1 * self::FIRST_TAX_RATE;
                          return $this->totalTaxBill = $this->initialTaxCharge1 + $this->initialTaxCharge2 + 
                                 $this->initialTaxCharge3 + $this->initialTaxCharge4 + $this->initialTaxCharge5                                  + $this->initialTaxCharge6 . PHP_EOL;
                    }
                }
            } 
        }
    }
    }
} # End of class definition.
#........................................................................................................

$taxPayer1 = new TaxPayer("AMBODE", "Akinwumi", 50000.00);
echo $taxPayer1;
//echo $taxPayer1->getAnnualTaxBill(1000000.00);
//var_dump($taxPayer1);



