<?php
echo $_GET['name'];
echo '<br>';
?>

<a href="<?php $_SERVER['PHP_self']; ?>?name=Brad">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Age: </label>
  <input type="text" name="age">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>
