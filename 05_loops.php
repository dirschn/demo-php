<?php
for($x = 0; $x <= 10; $x++) {
  echo $x;
  echo "<br>";
}

$x = 1;
while($x <= 15) {
  echo $x++ . '<br>';
}

$x = 6;

do {
  echo $x++ . '<br>';
} while ($x <= 5);

$posts = ['First post', 'second', 'third'];

foreach($posts as $i => $val) {
  echo $val . ' at ' . $i . '<br>';
}
