<?php
  $age = 17;

  if($age >= 18) {
    echo 'You are old enough to vote';
  } else {
    echo 'You are not old enough you child';
  }

  echo "<br>";

  date_default_timezone_set("America/New_York");
  $t = date("H");

  echo $t;

  echo "<br>";

  if($t < 12) {
    echo 'Good morning';
  } elseif($t < 17) {
    echo 'Good afternoon';
  } else {
    echo 'Good evening';
  }

  echo "<br>";

  $posts = ['First post'];

  if(!empty($posts)) {
    echo $posts[0];
  }

  echo "<br>";

  echo !empty($posts) ? $posts[0] : 'nada';

  echo "<br>";

  $favcolor = 'red';

  switch($favcolor) {
    case 'red':
      echo 'Fav color is red';
      break;
    case 'blue':
      echo 'Fav color is blue';
      break;
    default:
      echo 'Weird color chosen';
  }

  
