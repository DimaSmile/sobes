<?php

function switch_func($num){
	switch ($num) {
		case 2:
			echo $num;
			break;
		
		case 3:
			echo "HI  $num";
			break;

		default:
			echo "Привет число $num";
			break;
	}
}

switch_func(3);