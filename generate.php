<?php


do {
	$a = mt_rand(0, 10);
	$b = mt_rand(0, 10);
	$c = mt_rand(0, 10);

	$random = $a + $b + $c;
	echo $random . "<br>";

} while ($a + $b + $c  < 14 );