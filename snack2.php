<?php
// Passare come parametri GET name, mail e age e verificare 
// (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
// che mail contenga un punto e una chiocciola e che age sia un numero. 
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    echo '<p> Name:'.$name.'</p>';
    echo '<p> Mail:'.$mail.'</p>';
    echo '<p> Age:'.$age.'</p>';

    $nameLength = strlen($name);
    $ageVerify = is_int($age);
    $mailVerify = str_contains($mail, '.', '@');

    $result = "";

    if ($nameLength > 3 && ageVerify && mailVerify) {
        $result = 'Accesso riuscito';
        echo $result;
    } 
    else{
        $result = 'Accesso negato';
    }
?>

<p> Result: <?= $result ?> </p>
