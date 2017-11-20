<?php 

$a = 0;
$b = null;
$c = "0";



var_dump($a == $b );
var_dump($a == $c );
var_dump($b == $c );


class A {
	public static $static_item = ‘hello’;
	public static function hello() {
		echo ‘hello_function’;
		}
	}
echo A::$static_item; // выведет hello, хотя объекты класса A не создавались.
A::hello(); // выведет 


$arr = array ('h', 'e', 'l', 'l', 'o');
echo (count($arr));
$reversed = array();
for ($i=count($arr)-1; $i>=0; $i--) $reversed[] = $arr[$i];
for ($i=0; $i<count($reversed); $i++) echo "$reversed[$i]";


 ?>