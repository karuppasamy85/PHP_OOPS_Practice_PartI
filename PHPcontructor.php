<?php
//Constructor
// Does not support constructor overloading
//they are: __construct() and __destruct().
//PHP Destructor is handled by the Garbage Collector which always focus over object when there are no needed of object then it automatically destroyed.

Class Person{
	
	public $fname;
	public $lname;
	
	public function __construct($fname, $lname)
	{
		echo "Initialize the object <br/>";
		$this->fname=$fname;
		$this->lname=$lname;
				
	}
	
	
	public function showName()
	{
		echo "My name is " .$this->fname. " ".$this->lname;
	}
	
}
$name =new Person("Harrish", "Jayaraj");
$name->showName();
?>
