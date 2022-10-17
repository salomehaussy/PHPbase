<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $euro=6.55957;
    printf("%.2f FF<br />",$euro); //%.2f = 2 chiffre apres la virgule
    $money1 = 68.75;
    $money2 = 54.35;
    $money = $money1 + $money2;

    //echo $money affichera "123.1"
    echo "1. affichage sans printf : " . $money . "<br />";

    $monformat = sprintf("%01.2f",$money);
   // echo $monformat affichera "123.10"
    echo "2. affichage avec sprintf : " . $monformat . "<br />";

    $year="2002";
    $month="4";
    $day="5";
    $varDate = sprintf("%04d-%02d-%02d", $year, $month, $day);

    //echo $varDate affichera "2002-04-05"
    echo "3. affichage avec sprintf : " . $varDate . "<br />";
    ?>

<?php 
$num = 5;
$location ='tree';

$format = 'There are %d cat in the %s';
echo sprintf($format,$num,$location); //sprintf doit être afficher dans une variable - printf pas obliger de le mettre dans une variable
?>

</body>
</html>