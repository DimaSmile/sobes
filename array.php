<?php

$arr = array(3,8,15,25,16,11,10,5,7,30);


foreach ($arr as $value) {
	if (($value % 5) == 0) {
		echo $value . "<br>";
	}
}
