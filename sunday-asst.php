<?php
class MultiplicationTable
{
    private $num;
    private $count;
    private $tableObj;

    public function __construct($num, $count) {
      $this->num = $num;
      for( $count = 10; $count <= 20; $count++ ) {
          $this->count = $count;
          echo ($this->num . "  X  " . $this->count . "  =  " . ($this->count * $this->num) . PHP_EOL);
        }
    }
    
    public function __toString() {
     return 
         "I'm an object that can calculate the product of two numbers in the number of iterations you specify.";
    }
    
    public function getNum()
    {
        return "MULTIPLIED NUMBER: " . $this->num . PHP_EOL;
    }
}
// Method call:
$tableObj = new MultiplicationTable(5, 10);
echo "................" . PHP_EOL;
echo PHP_EOL;
echo $tableObj->getNum();
echo PHP_EOL;
echo $tableObj;
// End of file.

