<?php
include_once ('Patient.php');
$queue = new Patient();
$queue->enqueue("Brown");
$queue->enqueue("Ingram");
$queue->enqueue("Jones");
$queue->enqueue("Smith");
$queue->enqueue("Fehrenbach");
$queue->toString();
echo $queue->dequeue();
$queue->toString();

