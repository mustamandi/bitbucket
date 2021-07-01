<?php
require_once("fizzbuzz.php");

$fizzbuzz = new \App\FizzBuzz;

for ($i=1; $i<=100; $i++){
	echo $fizzbuzz->check_fizzbuzz($i) . "</br>";
}
?>