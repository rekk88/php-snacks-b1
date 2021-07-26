<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php
//array contenente le info sulle partite
$partite = [
    [
        "casa" => "Rohan",
        "puntiCasa" => 25,
        "ospite" => "Ghondor",
        "puntiOspite" => 30,
    ],
    [
        "casa" => "Emladris",
        "puntiCasa" => 40,
        "ospite" => "Decumano Sud",
        "puntiOspite" => 31,
    ],
    [
        "casa" => "Lothlorien",
        "puntiCasa" => 21,
        "ospite" => "Erebor",
        "puntiOspite" => 36,
    ],
];

// var_dump($partite);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partite </title>
</head>
<body>
    <?php for($i=0 ; $i < count($partite) ; $i++){?>
        <p><?php echo $partite[$i]["casa"]." - ".$partite[$i]["ospite"]." | ".$partite[$i]["puntiCasa"]."-".$partite[$i]["puntiOspite"] ?></p>
    <?php }?>
</body>
</html>