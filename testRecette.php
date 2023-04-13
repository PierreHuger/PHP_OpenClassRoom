<?php

$instructionsCouscous = ['Couper les carottes', 'Cuire les saucisses'];
$instructionsSushi = ['Rincez le riz', 'Couper le saumon'];

$Sushi = ['Sushi', 'Pierre Huger', $instructionsSushi];
$Couscous = ['Couscous', 'Frederic Huger', $instructionsCouscous];

$recette = [$Sushi, $Couscous];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Affichage des recettes</title>
</head>

<body>
    <?php

    $nbRecettes = 2;
    $nbElements = 3;
    $nbInstructions = 2;

    for ($i = 0; $i < $nbRecettes; $i++) {
        for ($j = 0; $j < $nbElements; $j++) {
            if ($j + 1 == $nbElements) {

                echo '<br>';

                for ($compteur = 0; $compteur < $nbInstructions; $compteur++) {

                    echo '<ul>';
                    echo $recette[$i][$j][$compteur];
                    echo '</ul>';
                }
            } else if ($j == 1) {
                echo $recette[$i][$j] . ' :';
            } else {
                echo $recette[$i][$j] . ', ';
            }
        }
        echo '<br>';
    }
    ?>
</body>

</html>