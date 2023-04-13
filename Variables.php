<?php
$userAge = 19;  //Le dollar permet de donner à PHP l'information que c'est une variable.
//Le égale permet d'attrivuer une valeur à la variable.


/***********String**************/
$fullname = "Pierre Huger";
echo "Bonjour $fullname et bienvenue sur le site !";
echo "<br>";
echo '<br>';

echo 'Bonjour $fullname et bienvenue sur le site !';

//Pour régler le probleme d'affichage on sépare la variable par des points.
echo "<br>";

echo 'Bonjour ' . $fullname . ' et bienvenue sur le site !';



/**********Additions************/

$number = 2 + 4; // $number prend la valeur 6
$number = 5 - 1; // $number prend la valeur 4
$number = 3 * 5; // $number prend la valeur 15
$number = 10 / 2; // $number prend la valeur 5

// Allez on rajoute un peu de difficulté
$number = 3 * 5 + 1; // $number prend la valeur 16
$number = (1 + 2) * 2; // $number prend la valeur 6

$number = 10;
$result = ($number + 5) * $number; //$result prend la valeur 150

/**Modulo**/
$number = 10 % 5; // $number prend la valeur 0 car la division tombe juste
$number = 10 % 3; // $number prend la valeur 1 car il reste 1
