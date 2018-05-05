<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <title>
    Celsius to Farenheit converter
  </title>

  <style type="text/css">
    .error{ color: red; }
  </style>
</head>

<body>

  <?php
    
    if( isset($_POST["number"]) )
    { 
      $numberErr = "";

      if( $_POST["number"] == NULL  )
      {
        $numberErr = "Please enter a floating point number";
      }
      else
      {   
        if($_POST["conversion_type"] == "Celsius to Farenheit")
        {
          $c = $_POST["number"];

          $f = ($c * 1.8) + 32;
        
          if($c == 1 || $c == -1)
          {
            echo "<p>" . $c . " degree Celsius =  " . $f . " degrees Farenheit" . "</p>";
          }
          else
          {
            echo "<p>" . $c . " degrees Celsius =  " . $f . " degrees Farenheit" . "</p>";
          }
        }
        else
        {
          $f = $_POST["number"];

          $c = ($f - 32) / 1.8;

          if($f == 1 || $f == -1)
          {
            echo "<p>" . $f . " degree Farenheit = " . $c . " degrees Celsius" . "</p>";
          }
          else
          {
            echo "<p>" . $f . " degrees Farenheit = " . $c . " degrees Celsius" . "</p>";
          }
        }
      }
    }
  ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    
    <input type="radio" name="conversion_type" value="Celsius to Farenheit" checked id="inputRadio">Celsius to Farenheit
    <input type="radio" name="conversion_type" value="Farenheit to Celsius" id="inputRadio">Farenheit to Celsius

    <label for="inputNumber">Temp. to convert:</label>
    <input type="number" step="any" name="number" id="inputNumber">
    <span class="error"><?php echo $numberErr; ?></span>

    <input type="submit" value="Perform Conversion">
  </form>
</body>