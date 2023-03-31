<?php


$instructionsSushi = ['Rincer le riz', 'Couper le saumon'];
$instructionCouscous = ['Préparer semoule', 'Cuire les saucisses'];

$sushi = ['Sushi', 'Pierre HUGER', true, $instructionsSushi];
$couscous = ['Couscous', 'Frederic HUGER', true, $instructionCouscous];

$recettes = [$sushi, $couscous];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Affichage des recettes</title>
</head>

<body>
    <?php
    $nbCompo = 4;
    $nbInstructions = 2;
    $nbRecettes = 2;
    $compteur = 0;

    for ($i = 0; $i < $nbRecettes; $i++) {
        for ($j = 0; $j < $nbCompo; $j++) {
            if ($j + 1 == $nbCompo) {
                for ($compteur = 0; $compteur < $nbInstructions; $compteur++) {
                    if ($compteur + 1 == $nbInstructions) {
                        echo $recettes[$i][$j][$compteur];
                    } else {
                        echo $recettes[$i][$j][$compteur] . ', ';
                    }
                }
            } else {
                echo $recettes[$i][$j] . ', ';
            }
        }
        echo '<br>';
    }
    ?>
</body>

</html>