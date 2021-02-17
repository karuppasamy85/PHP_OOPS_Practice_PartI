<?php
class Name{
var $fname;
var $lname;
function showName()
{
echo "<br/>My name is " .$this->fname. "  " .$this->lname;
}

}

$karuppu= new Name();
$karuppu->fname="Karuppa";
$karuppu->lname="samy";
$karuppu->showName();

$jegan= new Name();
$jegan->fname="Jegan";
$jegan->lname="Raj";
$jegan->showName();
?>
