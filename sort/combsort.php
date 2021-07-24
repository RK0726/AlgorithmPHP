<?php

function comb_sort(&$arr){
	$gap = $size = count($arr);
	$swap = true;
	while ($gap > 1) {
		if ($gap > 1) {
			$gap = floor($gap / 1.3);
			if ($gap == 9 || $gap == 10) $gap = 11;
		}
		$swapp = false;
		$i = 0;
		while ($i + $gap < $size) {
			if ($arr[$i] > $arr[$i + $gap]) {
				$tmp = $arr[$i];
				$arr[$i] = $arr[$i + $gap];
				$arr[$i + $gap] = $tmp;
				$swap = true;
			}
			$i++;
		}
	}
}

$arr = array(100, 3, 30, 20, 44, 32);
comb_sort($arr);
echo implode(",", $arr) . "\n";