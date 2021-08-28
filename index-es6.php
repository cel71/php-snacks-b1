<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>es-6</title>
</head>
<body>

    <?php

        /*
        Utilizzare questo array di partenza  https://pastebin.com/CkX3680A e
        stampare tutti gli insegnanti in un rettangolo grigio e tutti i PM in un
        rettangolo verde.
        */

        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];
    
            for ($x = 0; $x < count($db['teachers']); $x++) {
                echo "<div style='width: 400px; height: 100px; background-color: green; text-align:center; line-height: 50px; margin: 0 auto;'>Nome: {$db['teachers'][$x]['name']} <br> Cognome:  {$db['teachers'][$x]['lastname']}<br></div> <br>";
            };
    
            for ($x = 0; $x < count($db['pm']); $x++) {
                echo "<div style='width: 400px; height: 100px; background-color: gray; text-align:center; line-height: 50px; margin: 0 auto;'>Nome: {$db['pm'][$x]['name']} <br> Cognome:  {$db['pm'][$x]['lastname']}<br></div> <br>";   
            };

    ?>

</body>
</html>