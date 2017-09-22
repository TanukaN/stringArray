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
	$obj->strtolower($text);
	$obj->substr_replace($text);

	$obj1=new arrayClass();                 //Defining array class for Array functions
	$a = array('Dan','Steve','Padma','Jerry');
	$obj1->array_chunk($a);
	$b = array(30,45,42,68);
	$obj1->array_combine($a,$b);
	$c = array('Dan','Steve','James','Padma','Jerry');
	$obj1->array_diff_assoc($a,$c);
	$obj1->array_fill_keys($c);
	$obj1->array_keys($c);
	$obj1->array_pop($c);
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
		public function strtolower($text) {
		        echo '<h2>9. strtolower function</h2>';
		        echo 'Sentence in lowercase is: '.strtolower($text);
		        echo '<hr>';
		}	
		public function substr_replace($text) {
		        echo '<h2>10. substr_replace function</h2>';
		        echo substr_replace($text,'Fall 2017',16);
		        echo '<hr>';
		}
	}
	class arrayClass {
		public function __construct() {
			echo "<CENTER><h1>Array functions</h1></CENTER>";
		}
		public function array_chunk($a) {
			echo '<h2>1. array_chunk function</h2>';
			print_r(array_chunk($a,2));
			echo '<hr>';
		}
		public function array_combine($a,$b) {
		        echo '<h2>2. array_combine</h2>';
		        $result = array_combine($a, $b);
		        print_r($result);
		        echo '<hr>';
		}
		public function array_diff_assoc($a,$c) {
		        echo '<h2>3. array_diff_assoc function</h2>';
		        $result = array_diff_assoc($c,$a);
		        print_r($result);
		        echo '<hr>';
		}
		public function array_fill_keys($c) {
		        echo '<h2>4. array_fill_keys</h2>';
		        $result = array_fill_keys($c,"professor");
		        print_r($result);
		        echo '<hr>';
		}
		public function array_keys($c) {
		        echo '<h2>5. array_keys function</h2>';
		        print_r(array_keys($c,"James"));
		        echo '<hr>';
		}
		public function array_pop($c) {
		        echo '<h2>6. array_pop</h2>';
		        echo 'The popped array is: '.array_pop($c);
		        echo '<hr>';
		}
	}
?>

