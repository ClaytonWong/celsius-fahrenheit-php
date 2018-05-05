<!DOCTYPE html>
<html lang="en">
<head>
  <title>Celsius to Farenheit converter</title>
</head>
<body>
<?php
if(isset($_POST["number"])){
  $c = $_POST["number"];

  $f = ($c * 1.8) + 32;

  if($c == 1)
  {
    echo "<p>" . $c . " degree Celsius =  " . $f . " degrees Farenheit" . "</p>";
  }
  elseif($f == 1)
  {
    echo "<p>" . $c . " degrees Celsius =  " . $f . " degree Farenheit" . "</p>";
  }
  else{
    echo "<p>" . $c . " degrees Celsius =  " . $f . " degrees Farenheit" . "</p>";
  }
}
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  <label for="inputNumber">Temp. in Celsius:</label>
  <input type="number" name="number" id="inputNumber">
  <input type="submit" value="Find temp. in Farenheit">
</form>
</body>