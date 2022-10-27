<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $tab = array(1=>"oceane","karim","jimmy","outman","fred");
    $note = array(1=>"11","18","13","14","15");

echo "<table> <tr><td>Nom</td><td>Note</td></tr> ";

 for ($x=1; $x<=5; $x++) {

    echo "<td>".$tab[$x]."</td><td>".$note[$x]."</td>" ;
    ($x%1==0) ? print ("</tr><tr>") : print ("");
}
echo "</table>";
 ?>


</body>
</html>