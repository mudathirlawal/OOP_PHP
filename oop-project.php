<?php
// Creating a class, instantiating an object from it and calling its method(s)
// Tool: PHP; Date: 01/08/2017

class Student  
{
    public $matric;
    public $lName;
    public $fName;
    public $gender;
    public $major;
    public $level;
    
    public function __construct($lName, $fName, $matric) 
    {
        $this->lName    =    $lName;   // Values are automatically set for the...  
        $this->fName    =    $fName;   // following properties each time a new...
        $this->matric   =   $matric;   // object is instantiated from this class.
    }   
    
    public function editDetails($lName, $fName, $matric, $gender, $major, $level) 
    {
        $this->lName    = $lName;      # This method is used to manipulate...
        $this->fName    = $fName;      # properties of the instances of this...
        $this->matric   = $matric;     # class.
        $this->gender   = $gender;
        $this->major    = $major;
        $this->level    = $level; 
    }
    
    #Defining getter methods for the class properties:

    public function getName() 
    {
        return "NAME: " . $this->lName . ", " . $this->fName . PHP_EOL; 
    }

    public function getMatric()
    {
    	return "MATRIC NUMBER: " . $this->matric . PHP_EOL;
    }

    public function getGender()
    {
    	return "GENDER: " . $this->gender . PHP_EOL;
    }

    public function getMajor()
    {
    	return "MAJOR: " . $this->major . PHP_EOL;
    }
    
    public function getLevel()
    {
    	return "LEVEL: " . $this->level . PHP_EOL;
    }

    # Defining setter methods for the class properties:

    public function setName($name)      // Method for editing student's name
    {
    	$this->name  = $name;
    }

    public function setMatric($matric)  // Method for editing student's matric no.
    {
    	$this->matric  = $matric;
    }

    public function setGender($gender)  // Method for editing student's gender 
    {
    	$this->gender  = $gender;
    }

    public function setMajor($major)     // Method for editing student's major
    {
    	$this->major   =  $major;
    } 

    public function setLevel($level)     // Method for editing student's level  
    {
    	$this->level   =  $level;
    }
} // End of class definition


$student379 =  new Student("Lawal", "Olatunde", "CMP379/FT/1969");

$student379->editDetails("LAWAL", "Mudathir", "CMP379/FT/2015", "Male", "Software Engineering", "Sophomore");

echo "............................................." . PHP_EOL;
echo $student379->getName() . PHP_EOL . $student379->getMatric() . PHP_EOL 
	 . $student379->getGender() . PHP_EOL . $student379->getMajor() . PHP_EOL 
     . $student379->getLevel();
echo "............................................." . PHP_EOL;

// End of file.
