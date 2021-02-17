<?php
    class Vehicle {
        
     	var $transport = "vehicles on road";
        function wagon() {
            echo "<br/> The car name is Wagon";
        }
        
        function pulzar() {
            echo "<br/> The bike name is Pulzar";
        }
    
    }
	//create object
	$trans = new Vehicle();
	echo $trans->transport. "<br/>";
	$trans ->wagon();
	$trans ->pulzar();    
?>