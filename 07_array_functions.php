<?php
$fruits = ['apple', 'orange', 'pear'];

echo count($fruits);

echo "<br>";

var_dump(in_array('grape', $fruits));

echo "<br>";

$fruits[] = 'grape';

array_push($fruits, 'blueberry', 'strawberry');

array_unshift($fruits, 'watermelon');

print_r($fruits);

echo "<br>";

array_pop($fruits);

print_r($fruits);

echo "<br>";

array_shift($fruits);

print_r($fruits);

echo "<br>";

$chunked_array = array_chunk($fruits, 2);

print_r($chunked_array);
echo "<br>";

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);

print_r($arr3);

echo "<br>";

$arr4 = [...$arr1];

print_r($arr4);

echo "<br>";

$a = ['green', 'red', 'yellow'];
$b = ['avacado','apple', 'banana'];

$c = array_combine($a, $b);

print_r($c);

echo "<br>";

$keys= array_keys($c);

print_r($keys);

echo "<br>";

$flipped = array_flip($c);

print_r($flipped);

echo "<br>";

$numbers = range(1,30);

print_r($numbers);

echo "<br>";

$newNumbers = array_map(function($number) {
  return "Number ${number}";
}, $numbers);

print_r($newNumbers);

echo "<br>";

$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

print_r($lessThan10);

echo "<br>";

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

var_dump($sum);
