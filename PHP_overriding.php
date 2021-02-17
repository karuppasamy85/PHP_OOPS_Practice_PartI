<?php
    // parent class
    class Grandpa {
        // public property name
        public $age;
        
        // public method
        public function age() {
            echo "The grandpa age is " .$this->age. "<br/>";
        }
    }
    
    // child class
    class Father extends Grandpa {
        
        public function age() {
            echo "The father age is " .$this->age. "<br/>";
        }
        
    }
    
    // child class
    class Son extends Grandpa {
        
        public function age() {
            echo "The son age is " .$this->age. "<br/>";
        }
        
    }
    
    $grandpa = new Grandpa();
    $grandpa->age = 72;
    $grandpa->age();
    
    $father = new Father();
    $father->age = 50;
    $father->age();

    $son = new Son();
	$son->age = 30;
	$son->age();
    
?>