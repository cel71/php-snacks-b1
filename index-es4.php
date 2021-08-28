<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>es-4</title>
</head>
<body>

    <?php

        /*
        Creare un array contenente qualche alunno di un’ipotetica classe.
        Ogni alunno avrà i seguenti dati:
        nome
        cognome
        un array contenente i suoi voti scolastici
        Stampare nome, cognome e la media dei voti di ogni alunno.
        */

        $class = [

            [
            'name' => 'Mario',
            'surname' => 'Rossi',
            'votes' => [
                7, 
                6, 
                9,
            ],
            ],
            [
            'name' => 'Franco',
            'surname' => 'Bianchi',
            'votes' => [
                8, 
                5, 
                7,
            ],
            ],
            [
            'name' => 'Marta',
            'surname' => 'Neri',
            'votes' => [
                6, 
                8, 
                4,
            ],
            ],
        ]; 
        
        for ($x = 0; $x < count($class); $x++) {
            $media = array_sum($class[$x]['votes']) / count($class[$x]['votes']);
            echo "Nome: {$class[$x] ['name']}, Cognome: {$class[$x] ['surname']}, Media dei Voti: {$media} <br>";
        };

    ?>
    
</body>
</html>