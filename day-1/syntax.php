<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><h1>My first PHP page.</h1>

<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  global $x;
  echo "<p>Variable x inside function is:  $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>