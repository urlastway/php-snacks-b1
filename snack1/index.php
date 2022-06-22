<?php 
    $int = [];
    $partite = [
        [
            'squadraCasa' => 'Milano',
            'squadraOspite' => 'Inter',
            'PuntoSquadraCasa' => 1,
            'PuntoSquadraOspite' => 3,
        ],
        [
            'squadraCasa' => 'Roma',
            'squadraOspite' => 'Juventus',
            'PuntoSquadraCasa' => 2,
            'PuntoSquadraOspite' => 2,
        ],
        [
            'squadraCasa' => 'Torrino',
            'squadraOspite' => 'Venezia',
            'PuntoSquadraCasa' => 1,
            'PuntoSquadraOspite' => 0,
        ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php 
            for($i = 0; $i < count($partite); $i++){ ?>
                <li><?php 
                     $int = $partite[$i]['squadraCasa'] ." - ". $partite[$i]['squadraOspite'] ."   ". $partite[$i]['PuntoSquadraCasa'] ." | ". $partite[$i]['PuntoSquadraOspite'];

                     echo $int;
                ?></li>
                

        <?php };

        ?>
    </ul>
</body>
</html>