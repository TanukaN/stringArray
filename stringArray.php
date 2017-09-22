<?php
	$obj=new main();			//Defining main class for String functions
	$str = chr(046);
	$obj->chr($str);
	$text = "learning PHP in IS601";
	$obj->echothis($text);
	$obj->explode($text);
	$text1 = "&lt;a href=&quot;https://www.linkedin.com/in/tanuka-nayak/&quot;&gt;LinkedIn&lt;/a&gt;";
	$obj->html_entity_decode($text1);
	$obj->htmlentities($text1);
	$obj->count_chars($text);
	$obj->ltrim($text);
	$obj->strlen($text);
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
		public function htmlentities($text1) {
		        echo '<h2>5. htmlentities function</h2>';
		        echo htmlentities($text1);
		        echo '<hr>';
		}
		public function count_chars($text) {
		        echo '<h2>6. count_chars function</h2>';
			echo 'The distinct characters used in the sentence are: '.count_chars($text,3);
		        echo '<hr>';
		}	
		public function ltrim($text) {
		        echo '<h2>7. ltrim function</h2>';
		        echo 'After trimming the sentence, we get: '.ltrim($text,"learning");
		        echo '<hr>';
		}
		public function strlen($text) {
		        echo '<h2>8. strlen function</h2>';
		        echo 'The length of the sentence is: '.strlen($text);
		        echo '<hr>';
		}
	}					
?>

