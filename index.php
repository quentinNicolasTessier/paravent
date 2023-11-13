<?php

function beSafe($land,$altitude){
    $altitudes = explode(" ",$altitude);
    $count=0;
    $mountain=0;
    if(count($altitudes) > 0) {
        if(count($altitudes) == $land){
            foreach ($altitudes as $key => $alt) {
                if ($key < $land) {
                    if ($key == 0) {
                        $mountain = intval($alt);
                    }
                    $currentLand = intval($alt);
                    if ($currentLand < $mountain) {
                        $count++;
                    } elseif ($currentLand > $mountain) {
                        $mountain = $currentLand;
                    }
                }

            }
        }
        elseif(count($altitudes) > $land){
            return "Trop de montagnes par rapport à la surface du continent";
        }
        else{
            return "Pas assez de montagnes par rapport à la surface du continent";
        }

    }
    return $count;
}
echo "Saisir la largeur du continent: ";
$surface = intval(fgets(STDIN));
echo "Saisir les altitudes des montagnes: ";
$montagnes = fgets(STDIN);
echo(beSafe($surface,$montagnes));

?>