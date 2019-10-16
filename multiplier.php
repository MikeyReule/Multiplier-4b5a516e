<?php

echo "Ik ga voor je vermenigvuldigen!";
echo PHP_EOL;
echo "!!! VOER ALLEEN NUMMERS IN !!!";
echo PHP_EOL;
echo PHP_EOL;

$num1 = readline("Wat is jouw eerste nummer?: ");
$num2 = readline("Wat is jouw tweede nummer?: ");
$num3 = (int)$num1 * (int)$num2;

echo PHP_EOL;
echo "Het antwoord is: $num3 ($num1 * $num2)";


?>
