<?php

    $number1 = 15;
    $number2 = 5;
    $number3 = 8;

    // echo "$number1 + $number2 + $number3 = ";
    // echo $number1+$number2+$number3;

    // echo '<br />';

    // echo "$number1 x ($number2 - $number3) = ";
    // echo $number1*($number2-$number3);

    // echo '<br />';

    // echo "($number3 - $number2) / $number1 = ";
    // echo ($number3-$number2)/$number1;

    $result1 = $number1 + $number2 + $number3;
    $result2 = $number1 * ($number2 - $number3);
    $result3 = ($number3 - $number2) / $number1;

    echo $number1.' + '.$number2.' + '.$number3.' = '.$result1.' <br />';
    echo "$number1 x ($number2 - $number3) = $result2 <br /> ";
    echo "($number3 - $number2) / $number1 = $result3 <br />";

    if ($result1 < 20 || $result2 < 20 || $result3 <20) {
        echo 'Une des opérations renvoie moins de 20';
    }


?>