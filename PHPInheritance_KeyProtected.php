<?php
//Inheritance Class
    // parent class
    class Supermarket {
        
        protected $purchaseThings="Apple";
        public $purchaseUsing;
        public function purThings() {
            echo "Buy " .$this->purchaseThings. "<br/>";
        }
        
        
    }
    
    // child class
    class Kani_Store extends Supermarket {
		public function purUsing() {
            echo "They purchase " .$this->purchaseThings. " using <b>" .$this->purchaseUsing. "</b><br/>";
        }
    
    }
    
    // child class
    class Suresh_Store extends Supermarket {
        
    }
    
    $k_store = new Kani_Store();
	$s_store = new Suresh_Store();
	$s_store->purchaseUsing = "HDFC credit card";
    $k_store->purThings();
    $k_store->purUsing();
    
?>