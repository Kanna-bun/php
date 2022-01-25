<?php
    $age = 18;

    if ($age >= 18) {
        echo 'Vous pouvez entrer <br />';
    } elseif ($age >= 16 && $age < 18) {
        echo 'Vous êtes presque majeur <br />';
    } elseif ($age >= 14 && $age < 16) {
        echo 'Vous êtes jeune <br />';
    } else {
        echo 'Vous êtes trop jeune <br />';
    }

    ?>