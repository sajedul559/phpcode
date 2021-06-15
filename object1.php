<?php 
class student {

	 public $name = "sajedul";
	function khairul(){
		return $this->name;
	}
}

$object = new student();
echo $object->khairul();




?>