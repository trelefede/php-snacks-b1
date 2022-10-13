<?php
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti 
// dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

    $match = [
        [
            "squadraCasa" => "ORLANDO MAGIC",
            "squadraOspite" => "BOSTON CELTICS",
            "puntiCasa" => "55",
            "puntiOspiti" => "60",
        ],
        [
            "squadraCasa" => "CHICAGO BULLS",
            "squadraOspite" => "CLEVELAND CAVALIERS",
            "puntiCasa" => "55",
            "puntiOspiti" => "60",
        ],
        [
            "squadraCasa" => "NEW YORK KNICKS",
            "squadraOspite" => "MIAMI HEAT",
            "puntiCasa" => "55",
            "puntiOspiti" => "60",
        ],
    ];

    for ($i = 0; $i < count($match); $i++){
        $matchInfo = $match[$i];
        ?>
            <p>
                <?= $matchInfo['squadraCasa']?> - <?= $matchInfo['squadraOspite']?> | <?= $matchInfo['puntiCasa']?> - <?= $matchInfo['puntiOspiti']?>
            </p>
        <?php
    }    
?>