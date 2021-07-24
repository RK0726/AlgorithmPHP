<?php
require_once 'ringbuffer.php';

$rb = new RingBuffer(5);

$rb->append("A is Apple");
$rb->append("A is Banana");
$rb->append("A is Cute");
$rb->append("A is Desk");
$rb->append("A is Easy");
$rb->append("A is Flight");
$rb->append("A is Good");

for ($i = 0; $i < 5; $i++) {
	$log = $rb->get($i);
	echo "[$log]\n";
}