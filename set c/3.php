PHP
<!DOCTYPE html>
<html>
<head>
<title>Enter Numbers</title>
</head>
<body>
<form action="result.php" method="post">
  <label for="x">Enter value for x:</label>
  <input type="number" id="x" name="x"><br><br>
  <label for="y">Enter value for y:</label>
  <input type="number" id="y" name="y"><br><br>
  <label for="z">Enter value for z:</label>
  <input type="number" id="z" name="z"><br><br>
  <input type="submit" value="Calculate Sum">
</form>
<?php
if (isset($_POST['x']) && isset($_POST['y']) && isset($_POST['z'])) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];
  
    $sum = $x + $y + $z;
  
    echo "The sum of $x, $y, and $z is: $sum";
  } else {
    echo "Please enter all three numbers.";
  }


?>
</body>
</html>