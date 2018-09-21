<?php

/**
* 
*/
abstract class Php 
{
	
	public function framwork(){
		echo "Base Class content and class name: ".__CLASS__."<br>";
		echo "Base Class Function and class name: ".get_class($this)."<br>";
	}
}
?>