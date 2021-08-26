<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>es-1</title>
</head>
<body>
    
    <?php

    /*
    Creiamo una struttura dati che rappresenta le partite di basket
    di un’ipotetica tappa del calendario.
    Ogni array interno conterrà le seguenti informazioni:
    una squadra di casa
    una squadra ospite
    punti fatti dalla squadra di casa
    punti fatti dalla squadra ospite
    Stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55-60
    */

    $partita = [
        [
            "casa" => "Olimpia Milano",
            "ospite" => "Cantù",
            "casaPunti" => 55,
            "ospitiPunti"=> 60
        ],
        [
            "casa" => "‎Los Angeles Lakers",
            "ospite" => "Phoenix Suns",
            "casaPunti" => 34,
            "ospitiPunti"=> 70
        ],
        [
            "casa" => "‎Dallas Mavericks",
            "ospite" => "Chicago Bulls",
            "casaPunti" => 62,
            "ospitiPunti"=> 80
        ],
    ];

    for($i = 0; $i < count($partita); $i++) {
        $risultato = "{$partita[$i]["casa"]} - {$partita[$i]["ospite"]} | {$partita[$i]["casaPunti"]} - {$partita[$i]["ospitiPunti"]} <br>";
        echo $risultato;
    };

    ?>
    
</body>
</html>