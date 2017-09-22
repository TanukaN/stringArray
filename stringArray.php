<?php
	$obj=new main();			//Defining main class for String functions
	$str = chr(046);
	$obj->chr($str);			
	class main {
		public function __construct() { 
			echo "<CENTER><h1>String functions</h1></CENTER>";
		}	
		public function chr($str) {
			echo '<h2>1. chr function</h2>';
			echo("Web Design $str Development"); 
			echo '<hr>';
		}			
	}					
?>

