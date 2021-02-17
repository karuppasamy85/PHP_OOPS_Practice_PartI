<?php
//Inheritance Class
    // parent class
    class Supermarket {
        
        public $purchaseThings="Apple";
        public $purchaseUsing;
        public function purThings() {
            echo "Buy " .$this->purchaseThings. "<br/>";
        }
        
        public function purUsing() {
            echo "They purchase " .$this->purchaseThings. " using <b>" .$this->purchaseUsing. "</b><br/>";
        }
    }
    
    // child class
    class Kani_Store extends Supermarket {
    
    }
    
    // child class
    class Suresh_Store extends Supermarket {
        
    }
    
    $k_store = new Kani_Store();
	
    $s_store = new Suresh_Store();
	    $s_store->purchaseUsing = "HDFC credit card";
    
    $k_store->purThings();
    $s_store->purUsing();
    
?>