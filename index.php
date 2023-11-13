<?php

function beSafe($land,$altitude){
    $altitudes = explode(" ",$altitude);
    $count=0;
    $mountain=0;
    if(count($altitudes) > 0) {
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
    return $count;
}
echo(beSafe(10,"30 27 17 42 29 12 14 41 42 42"));

?>