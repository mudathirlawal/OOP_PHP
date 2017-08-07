<?php
// THE INCREMENT VARIABLE IN THIS CODE DOES NOT WORK;
// I'VE BEEN TRYING TO NO AVAIL SINCE YESTERDAY>
//...PLEASE HELP. THANKS

class Table
{
    public $num;
    public $i;
    public $sample;
    
    public function __construct($num, $i) {
      $this->num = $num;
      $this->i = $i;
      for( $i=1; $i<=10; $i++) {
            echo ($this->i) . "  X  " . $this->num . "  =  " . ($this->i * $this->num) . PHP_EOL;
        }
    }
    
    public function getNum()
    {
        return "THE NUMBER IS: " . $this->num;
    }
}

// Method call:
$sample = new Table(3, 1);
echo "............" . PHP_EOL;
echo $sample->getNum();
// End of file.
