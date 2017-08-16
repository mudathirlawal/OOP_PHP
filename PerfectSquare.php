<?php

# INTRODUCTION: The algorithm I employed in this program checks the data type of the 
#               calculated square root of the number passed in; if integer, program 
#               returns "Number is a Perfect Square," if otherwise, program returns 
#               "Number is NOT a Perfect Square."

# CHALLENGE:    The statement "this->num = sqrt( $this->numSquare );" and its alternative 
#               "$this->num = $this->numSquare ** ( 1 / 2 );" on line 18 return a floating  
# 				point value for num, thereby causing the program to malfunction. I need help 
#				to resolve this or advice on a better approach to the desired implimentation.

// Class definition:
class PerfectSquare 
{   public $num;        // $num = square root of $numSquare, ie sqrt($numSquare)
	public $numSquare;  // $numSquare = square of $num ie, $num ** 2
  
    public function isSquare( int $numSquare ) 
    {
       	$this->numSquare = $numSquare;
        $this->num = sqrt( $this->numSquare );   // OR: $this->num = $this->numSquare ** ( 1 / 2 );
                                                 // The brackets in this expression are higly necessary; 
                                                 // otherwise, using "$this->num = $numSquare ** 1 / 2;"
                                                 // would make the program malfunction at some point.
                  
        if ( is_int( $this->num ) ) {
        	
            return "The supplied number, " . $this->numSquare . ", is a Perfect Square." . PHP_EOL;
        } else {
            return "The supplied number, " . $this->numSquare . ", is NOT a Perfect Square." . PHP_EOL;
        }
    }
} // End of Class definition.



// Method call:
$checkInstance1 = new PerfectSquare();
echo $checkInstance1->isSquare(100);
echo PHP_EOL; 
var_dump($checkInstance1);

























