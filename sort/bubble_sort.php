<?php

function bubble_sort(&$arr) {
	$size = count($arr);
	for ($i = 0; $i < $size; $i++) {
		for($j = 0; $j < ($size - 1 - $i); $j++) {
			if ($arr[$j + 1] < $arr[$j]) {
				$tmp = $arr[$j + 1];
				$arr[$j + 1] = $arr[$j];
				$arr[$j] = $tmp;
			}
		}
	}
}

$arr = array(100, 3, 30, 20, 44, 32);
bubble_sort($arr);
echo implode(',', $arr) . "\n";