<?php

abstract class Vehicle{
protected $name;
  public function setName($name)
 {
	 $this->name=$name;
	 
 }
 
 abstract public function name();
 
}

class Car extends Vehicle{
public function name()
{
	echo $this->name. " is car name <br/>";
}
}

class Bike extends Vehicle{
public function name()
{
echo $this->name. " is bike name";
}
}

$car =new Car();
$car->setName('Wagon');
$car->name();

$car =new Bike();
$car->setName('Pulzar');
$car->name();

/*$bike =new Bike();
$bike->name="Pulzar";
$bike->mileage();*/




?>