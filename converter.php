<?php

$formcelcius = $_POST['fromcelcius'] ?? "";
$formkm = $_POST['fromkm'] ?? "";
$formkg = $_POST['fromkg'] ?? "";
$formgr = $_POST['fromgr'] ?? "";

function celciustofahrenheit ($celcius) {
  return ($celcius * 9 / 5) + 32;
}

function celciustokelvin ($celcius) {
  return $celcius + 273.15; 
}

function kilometerstomps ($km) {
  return round(($km / 3.6),2);
}

function kilometerstoknots ($km) {
  return round(($km / 1.852),2);
}

function kilogramstogr ($kg) {
  return $kg * 1000;
}

function gramstokg ($gr) {
return $gr / 1000;
}
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Measurement Conversion</title>
    <link href="converter.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div id="main-content">
      <h1>Convert Measures</h1>
  
      <form action="" method="post">
        <label><h2>Convert from Celcius</h2></label>
        <input type="text" name="fromcelcius" value="">
        <label><h2>Convert from Kilometers</h2></label>
        <input type="text" name="fromkm" value="">
        <label><h2>Convert kg to grams</h2></label>
        <input type="text" name="fromkg" value="">
        <label><h2>Convert grams to kg</h2></label>
        <input type="text" name="fromgr" value="">
        <p><input id="submit" type="submit" value="Convert"></p>
        <div id=results>
          <?php if($formcelcius) { ?>
          <p> <?php echo $formcelcius?> Celcius is <?php echo celciustofahrenheit($formcelcius) ?> in Fahrenheit </p>
          <p> <?php echo $formcelcius ?> Celcius is <?php echo celciustokelvin($formcelcius) ?> in Kelvin. </p>
          <?php } ?>
          <?php if ($formkm) {?>  
          <p> <?php echo $formkm ?> kilometers per hour is <?php echo kilometerstomps($formkm) ?> meters per second. </p>
          <p> <?php  echo $formkm ?> kilometers per hour is <?php echo kilometerstoknots($formkm) ?> knots per hour. Yarr. 🏴‍☠️ </p>
          <?php } ?>
          <?php if ($formkg) { ?>
          <p> <?php echo $formkg ?> kilograms is <?php echo kilogramstogr($formkg) ?> grams.
          <?php } ?>
          <?php if ($formgr) { ?>
            <p> <?php echo $formgr ?> grams is <?php echo gramstokg($formgr) ?> kilograms.
            <?php } ?>

        </div>
      </form>
    </div>
  </body>
</html>