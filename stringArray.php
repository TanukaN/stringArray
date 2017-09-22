<?php
	$obj=new main();			//Defining main class for String functions
	$str = chr(046);
	$obj->chr($str);
	$text = "learning PHP in IS601";
	$obj->echothis($text);
	class main {
		public function __construct() { 
			echo "<CENTER><h1>String functions</h1></CENTER>";
		}	
		public function chr($str) {
			echo '<h2>1. chr function</h2>';
			echo("Web Design $str Development"); 
			echo '<hr>';
		}
		public function echothis($text) {
		        echo '<h2>2. echo function</h2>';
		        echo 'It is fun when you are ' .$text;
			echo '<hr>';
		}
														    
	}					
?>

