<?php
  $numbers = [1,2,3,4];
  $fruits = array('apple', 'orange', 'pear');

  // print_r($numbers);
  // var_dump($numbers);
  echo $fruits[1];

  $colors = [
    1 => 'red',
    'blue' => 2
  ];

  echo $colors[1], PHP_EOL;

  echo "<br>";

  $person1 = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com',
  ];

  // Array of people
  $people = [
    $person1, //   [...$person1]
    [
      'first_name' => 'John',
      'last_name' => 'Doe',
      'email' => 'john@gmail.com',
    ],
    [
      'first_name' => 'Jane',
      'last_name' => 'Doe',
      'email' => 'jane@gmail.com',
    ],
  ];

  var_dump(json_encode($people));
