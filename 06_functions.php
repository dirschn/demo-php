<?php
function registerUser($email) {
  echo $email . ' registered';
}

registerUser('e@s.c');

function sum($x, $y) {
  return $x + $y;
}
echo "<br>";

echo sum(5, 930451935951);

echo "<br>";

$subtract = function($x, $y) {
  return $x -$y;
};

echo $subtract(10, 5);

echo "<br>";

$multiply = fn($x, $y) => $x * $y;

echo $multiply(9, 10);
