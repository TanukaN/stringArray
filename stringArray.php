<?php
	$obj=new main();			//Defining main class for String functions
	$str = chr(046);
	$obj->chr($str);
	$text = "learning PHP in IS601";
	$obj->echothis($text);
	$obj->explode($text);
	$text1 = "&lt;a href=&quot;https://www.linkedin.com/in/tanuka-nayak/&quot;&gt;LinkedIn&lt;/a&gt;";
	$obj->html_entity_decode($text1);
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
		public function explode($text) {
		        echo '<h2>3. explode function</h2>';
		        $output = explode(" ", $text);
		        echo $output[1];
		        echo '<hr>';
		}
		public function html_entity_decode($text1) {
		        echo '<h2>4. html_entity_decode function</h2>';
		        echo 'Connect with me on: '.html_entity_decode($text1);
		        echo '<hr>';
		}
																    
	}					
?>

