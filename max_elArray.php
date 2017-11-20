<?php 

$arr = array(1,2,3,4,10,100,3,4987,6,7,8,9);
echo max($arr). "<br>";

$capitals = array("US" => "Washington", "UK" => "London", "Austria" => "Vienna");
sort($capitals);

foreach ($capitals as $key => $value) {
	echo "$key = $value" . "<br>";
}