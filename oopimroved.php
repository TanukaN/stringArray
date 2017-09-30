<?php
	$obj = new main();
	
	class main {
		public function __construct() {
			echo "<CENTER><h1>String functions</h1></CENTER>";
			echo "<h2>1. chr function</h2>";
			$str = chr(046);
			stringClass :: chr($str);
			echo "<hr>";
			echo '<h2>2. echo function</h2>';
			$text = "learning PHP in IS601";
			stringClass :: echothis($text);
			echo '<hr>';
			echo '<h2>3. explode function</h2>';
			stringClass :: explode($text);
			echo '<hr>';
			echo '<h2>4. html_entity_decode function</h2>';
			$text1 = "&lt;a href=&quot;https://www.linkedin.com/in/tanuka-nayak/&quot;&gt;LinkedIn&lt;/a&gt;";
			stringClass :: html_entity_decode($text1);
			echo '<hr>';
			echo '<h2>5. htmlentities function</h2>';
			stringClass :: htmlentities($text1);
			echo '<hr>';
			echo '<h2>6. count_chars function</h2>';
			stringClass :: count_chars($text);
			echo '<hr>';
			echo '<h2>7. ltrim function</h2>';
			stringClass :: ltrim($text);
			echo '<hr>';
			echo '<h2>8. strlen function</h2>';
			stringClass :: strlen($text);
			echo '<hr>';
			echo '<h2>9. strtolower function</h2>';
			stringClass :: strtolower($text);
			echo '<hr>';
			echo '<h2>10. substr_replace function</h2>';
			stringClass :: substr_replace($text);
			echo '<hr>';
			
			echo "<CENTER><h1>Array functions</h1></CENTER>";
			echo '<h2>1. array_chunk function</h2>';
			$a = array('Dan','Steve','Padma','Jerry');
			arrayClass :: array_chunk($a);
			echo '<hr>';
			echo '<h2>2. array_combine</h2>';
			$b = array(30,45,42,68);
			arrayClass :: array_combine($a,$b);
			echo '<hr>';
			echo '<h2>3. array_diff_assoc function</h2>';
			$c = array('Dan','Steve','James','Padma','Jerry');
			arrayClass :: array_diff_assoc($c,$a);
			echo '<hr>';
			echo '<h2>4. array_fill_keys</h2>';
			arrayClass :: array_fill_keys($c);
			echo '<hr>';
			echo '<h2>5. array_keys function</h2>';
			arrayClass :: array_keys($c);
			echo '<hr>';
			echo '<h2>6. array_pop</h2>';
			arrayClass :: array_pop($c);
			echo '<hr>';
			echo '<h2>7. array_search function</h2>';
			$d = array("a"=>"apple","b"=>"banana");
			arrayClass :: array_search($d);
			echo '<hr>';
			echo '<h2>8. count</h2>';
			arrayClass :: count($c);
			echo '<hr>';
			echo '<h2>9. each function</h2>';
			arrayClass :: each($d);
			echo '<hr>';
			echo '<h2>10. sort</h2>';
			arrayClass :: sort($a);
			echo '<hr>';
		}
	}
	class stringClass {
		static public function chr($str) {
			echo("Web Design $str Development");
		}
		static public function echothis($text) {  
			echo 'It is fun when you are ' .$text;
		}
		static public function explode($text) {
			print_r(explode(' ',$text));
		}
		static public function html_entity_decode($text1) {                     
			echo 'Connect with me on: '.html_entity_decode($text1);
		}
		static public function htmlentities($text1) {
			echo htmlentities($text1);    
		}
		static public function count_chars($text) {
			echo 'The distinct characters used in the sentence are: '.count_chars($text,3); 
		}
		static public function ltrim($text) {
			echo 'After trimming the sentence, we get: '.ltrim($text,"learning");
		}
		static public function strlen($text) {
			echo 'The length of the sentence is: '.strlen($text);
		}
		static public function strtolower($text) {
			echo 'Sentence in lowercase is: '.strtolower($text);
		}
		static public function substr_replace($text) {  
			echo substr_replace($text,'Fall 2017',16);
		}
	}
	class arrayClass {
       		public function array_chunk($a) {
            		print_r(array_chunk($a,2));
        	}
		public function array_combine($a,$b) {
			print_r(array_combine($a, $b));
		}
		public function array_diff_assoc($a,$c) {
			print_r(array_diff_assoc($c,$a));
		}
		public function array_fill_keys($c) {
			print_r(array_fill_keys($c,"professor"));
		}
		public function array_keys($c) {
			print_r(array_keys($c,"James"));
		}
		public function array_pop($c) {
			echo 'The popped array is: '.array_pop($c);
		}
		public function array_search($d) {
			echo 'The corresponding key in the array for apple is: '.array_search("apple",$d);
		}
		public function count($c) {
			echo 'No. of professors are: '.count($c);
		}
		public function each($d) {
			print_r(each($d));
		}
		public function sort($a) {
			sort($a);
			$length = count($a);
			for($i = 0; $i < $length; $i++) {
				echo $a[$i]."&nbsp;&nbsp;&nbsp;";
			}
		}
    	}
?>
