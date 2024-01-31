<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <?php
    foreach($_SERVER as $key => $val) {
      echo '<li>';
      echo "$key: $val";
      echo '</li>';
    }
    ?>
  </ul>
</body>
</html>
