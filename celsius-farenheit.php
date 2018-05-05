<!DOCTYPE html>
<html lang="en">
<head>
    <title>Celsius to Farenheit converter</title>
</head>
<body>
<?php
if(isset($_POST["number"])){
    $x = $_POST["number"];
    $x = $x * $x;
    echo "<p>" . $_POST["number"] . " squared is " . $x . "</p>";
}
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputNumber">number:</label>
    <input type="number" name="number" id="inputNumber">
    <input type="submit" value="Find square">
</form>
</body>