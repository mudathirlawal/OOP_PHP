<?php
// Creating a class, instantiating an object, and calling its method(s)
// Tool: PHP; Date: 30/07/2017

class Student  
{
    public $matricNo;
    public $lName;
    public $fName;
    public $gender;
    public $major;
    public $level;
    
    public function __construct($lName, $fName, $matricNo) 
    {
        $this->lName    =    $lName;   // Values are automatically set for the...  
        $this->fName    =    $fName;   // following properties each time a new...
        $this->matricNo = $matricNo;   // object is instantiated from this class.
        echo "A new 'OBJECT' with the following details, has been created:" . PHP_EOL;
        echo "NAME: " . $lName . ", " . $fName . PHP_EOL;
        echo "MATRIC NUMBER: " . $matricNo . PHP_EOL   ;
        echo "STATUS: " . __CLASS__ . PHP_EOL ;
    }   
    
    public function editDetails($lName, $fName, $matricNo, $gender, $major, $level) 
    {
        $this->lName    = $lName;      # This method is used to manipulate...
        $this->fName    = $fName;      # properties of the instances of this...
        $this->matricNo = $matricNo;   # class.
        $this->gender   = $gender;
        $this->major    = $major;
        $this->level    = $level; 
    }
    
    public function getStudent() # Getter method
    {
        return "NAME: " . $this->lName . ", " . $this->fName;   
        return "MATRIC NUMBER: " . $this->matricNo;
    }
} // End of class definition


$student379 =  new Student("LAWAL", "Mudathir", "CMP379/FT/1972");
echo "............................................." . PHP_EOL;
echo $student379->getStudent();
// End of file.
