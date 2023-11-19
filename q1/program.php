<?php

    /*1. Write a function named factors that finds the factors of a number. 
    The function takes a number as a parameter and returns a string. 
    The string contains the factors separated by commas and spaces. 
    The factors include 1 and the number. The number is a positive integer. */

    function factors($n) {
        $factors = ""; // initialize a string variable to hold answer 
        for($i = 1; $i < $n; $i++) { // for loop finding factors
            if ($n % $i == 0) {
                $factors = $factors.$i.", "; // add the factor to the string 
            }
        }

        $factors = $factors.$n; // add the number itself to the string

        return $factors; // return string 

    }


    /* 3. Write a function named stdDev that computes the standard deviation of a 
    set of numbers. The function takes the numbers in an array parameter and returns 
    the standard deviation. The standard deviation of n numbers x1, x2 . . . xn is 
    the square root of [((x1-m)2 + (x2-m)2 + . . . + (xn-m)2)/n] where m is the average 
    of the numbers. If there are less than two numbers the standard deviation is 0. */

    function stdDev($x) {
        $n = count($x); // Count the number of elements in the array
    
        $sum = 0; // Initialize sum of elements
        $result = 0; // Initialize variable for the sum of squared differences
    
        // Calculate the sum of all elements in the array
        foreach ($x as $element) {
            $sum = $sum + $element;
        }
        
        $m = $sum / $n; // Calculate the mean (average) of the elements
    
        // Calculate the sum of the squared differences from the mean
        foreach ($x as $element) {
            $result = $result + ($element - $m) * ($element - $m);
        }
    
        $result = $result / $n; // Divide by the number of elements to get the variance
        $result = sqrt($result); // Take the square root of the variance to get the standard deviation
    
        return $result; // Return the calculated standard deviation
    }


/* 5. Write a function named createIdPassword that takes a last name and a first name as parameters and returns 
an associative array containing an id and a password. The id is the first letter of the first name followed by 
the last name. The password is the first letter of the first name followed by the last letter of the first name 
followed by the first three letters of the last name followed by the length of the first name followed by the 
length of the last name. Both id and password are all upper case. For example if the first name is John and the 
last name is Maxwell then the id is JMAXWELL and the password is JNMAX47. The returned associative array has two 
keys namely id and password, and their values are set to the id and password that are created. */

function createIdPassword($lname, $fname) {
    // Combine the first letter of the first name with the last name for the ID
    $id = $fname[0].$lname;
    // Convert the ID to uppercase
    $id = strtoupper($id);

    // Construct the password using the following pattern:
    // First letter of the first name, last letter of the first name,
    // first three letters of the last name, length of the first name,
    // and length of the last name
    $password = $fname[0].$fname[-1].substr($lname, 0, 3).strlen($fname).strlen($lname);
    // Convert the password to uppercase
    $password = strtoupper($password);

    // Create an associative array with keys 'id' and 'password'
    $result = array("id" => $id, "password" => $password);
    // Return the associative array
    return $result;
}


/* 7. Write a class called Student. The class has two private data members called name and gpa. The class has a 
constructor that takes a name and a gpa and set them to the data members of the class. The class getName, getGpa, 
setName, and setGpa methods that get and set name and gpa. The class has isHonors method which returns true/false 
depending on whether gpa is above or below 3. */

class Student {
    // Declare private data members for the class: name and gpa
    private $name;
    private $gpa;

    // Constructor method that takes name and gpa as parameters
    // and sets them to the data members of the class
    public function __construct($name, $gpa) {
        $this->name = $name; // Set the name data member
        $this->gpa = $gpa;   // Set the gpa data member
    }

    // Setter method for name
    public function setName($name) {
        $this->name = $name; // Update the name data member
    }

    // Setter method for gpa
    public function setGpa($gpa) {
        $this->gpa = $gpa; // Update the gpa data member
    }

    // Getter method for name
    public function getName() {
        return $this->name; // Return the name data member
    }

    // Getter method for gpa
    public function getGpa() {
        return $this->gpa; // Return the gpa data member
    }

    // Method to determine if the student is on honors
    public function isHonors() {
        // Check if the gpa is 3.0 or above
        if ($this->getGpa() < 3.0) {
            return false; // Return false if gpa is below 3.0
        } else {
            return true;  // Return true if gpa is 3.0 or above
        }
    }
}

?>