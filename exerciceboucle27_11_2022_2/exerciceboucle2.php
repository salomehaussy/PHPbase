<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    
<?php
$nom = array("Oceane"=>"11", "Karim"=>"18", "Jimmy"=>"13", "Outman"=>"14","Fred"=>"15");

echo "<table><tr><td>Noms</td><td>Notes</td></tr>";
ksort($nom);

foreach($nom as $x => $x_value) {
  echo "<tr><td>" . $x . "</td><td>" . $x_value. "</td></tr>";
  echo "<br>";
}


?>


</body>
</html>