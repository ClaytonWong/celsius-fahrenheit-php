<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <title>
    Temperature Converter
  </title>

  <style type="text/css">
    .error
    { 
      color: red; 
    }
    
    body
    {
      background-color: LemonChiffon;
      text-align: center;
      margin-top: 8rem;
    }

    .number
    {
      margin-top: 1rem;
      margin-bottom: 1rem;
    }

    .number_input
    {
      margin-top: 4px;
      margin-bottom: 4px;
    }

    span
    {
      margin-top: 4px;
      margin-bottom: 4px;
    }
  </style>
</head>

<body>
  <h2>
    Temperature Converter
  </h2>

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
        if($_POST["conversion_type"] == "Celsius to Fahrenheit")
        {
          $c = $_POST["number"];

          $f = ($c * 1.8) + 32;
        
          if($c == 1 || $c == -1)
          {
            echo "<p>" . $c . " degree Celsius =  " . $f . " degrees Fahrenheit" . "</p>";
          }
          else
          {
            echo "<p>" . $c . " degrees Celsius =  " . $f . " degrees Fahrenheit" . "</p>";
          }
        }
        else
        {
          $f = $_POST["number"];

          $c = ($f - 32) / 1.8;

          if($f == 1 || $f == -1)
          {
            echo "<p>" . $f . " degree Fahrenheit = " . $c . " degrees Celsius" . "</p>";
          }
          else
          {
            echo "<p>" . $f . " degrees Fahrenheit = " . $c . " degrees Celsius" . "</p>";
          }
        }
      }
    }
  ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <div class="outer"> 
      <div>
        <input type="radio" name="conversion_type" value="Celsius to Fahrenheit" checked id="inputRadio">Celsius to Fahrenheit
      </div>

      <div>
        <input type="radio" name="conversion_type" value="Fahrenheit to Celsius" id="inputRadio">Fahrenheit to Celsius
      </div>
      
      <div class="number">
        <div>
          <label for="inputNumber">Temp. to convert</label>
        </div>
        
        <div>
          <input class="number_input" type="number" step="any" name="number" id="inputNumber">
        </div>

        <div>
          <span class="error"><?php echo $numberErr; ?></span>
        </div>
      </div>
      
      <input type="submit" value="Perform Conversion">  
    </div>
  </form>
</body>