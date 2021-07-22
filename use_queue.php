<?php

require_once 'sample.php';

$q = new Queue();
$q->enqueue("Panda");
$q->enqueue("Tiger");
$q->enqueue("Bird");

while ($q->length() > 0) {
	$e = $q->dequeue();
	echo "[$e]\n";
}


?>