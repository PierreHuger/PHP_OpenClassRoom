<?php

$userName1 = 'Pierre HUGER';
$userPassword1 = 'AbCdE';
$userAge1 = 19;
$userEmail1 = 'pierre.huger@etudiant.univ-rennes1.fr';

$userName2 = 'Frederic HUGER';
$userPassword2 = 'aBcDe';
$userAge2 = 50;
$userEmail2 = 'frederic.huger@orange.fr';

//On peut condenser ces infos dans un tableau:

$user1 = ['Pierre HUGER', 'AbCdE', 19, 'pierre.huger@etudiant.univ-rennes1.fr'];
$user2 = ['Frederic HUGER', 'aBcDe', 50, 'frederic.huger@orange.fr'];

//On peut aussi créer des tableaux de tableaux:

$pierre = ['Pierre HUGER', 'AbCdE', 19, 'pierre.huger@etudiant.univ-rennes1.fr'];
$fred = ['Frederic HUGER', 'aBcDe', 50, 'frederic.huger@orange.fr'];

$users = [$pierre, $fred];


/*
$i = 0;
$nbPersonne = 2;
while ($nbPersonne > $i) {
    echo $users[$i][0] . ' ' . $users[$i][1] . '<br>';
    $i++;
}
*/

/*
//programme plus opti/auto:
$nbCompo = 4;
$j = 0;
$i = 0;
$nbPersonne = 2;

while ($nbPersonne > $i) {
    while ($nbCompo > $j) {
        if ($j + 1 == $nbCompo) {
            echo $users[$i][$j];
        } else {
            echo $users[$i][$j] . ', ';
        }
        $j++;
    }
    echo '<br>';
    $i++;
    $j = 0;
}
*/


$nbCompo = 4;
$nbPersonne = 2;

for ($i = 0; $i < $nbPersonne; $i++) {
    for ($j = 0; $j < $nbCompo; $j++) {
        if ($j + 1 == $nbCompo) {
            echo $users[$i][$j];
        } else {
            echo $users[$i][$j] . ', ';
        }
    }
    echo '<br>';
}
