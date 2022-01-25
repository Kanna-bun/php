<?php

    // for ($i = 10; $i > 0; $i--) {
    //     echo $i.'<br />';
    // }

    // for ($i = 0; $i <= 100; $i++) {
    //     if($i % 2 == 0) {
    //         echo $i.'<br>';
    //     }
    // }

    // $a = 96;
    // $b = 36;

    // while ($a != $b) {
    //     if ($a > $b) {
    //         $a -= $b;
    //     } else {
    //         $b = $b - $a;
    //     }
    // }

    // echo $a;

    // for ($i = 0; $i <= 100; $i++) {
    //     if($i % 3 == 0) {
    //         echo 'Fizz ';
    //     } elseif ($i % 5 == 0) {
    //         echo 'Buzz ';
    //     } elseif ($i % 15 == 0) {
    //         echo 'FizzBuzz ';
    //     } else {
    //         echo ' '.$i.' ';
    //     }
    // }
    

    $i = '🐇';

    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo '🐇';
        }
        echo '<br>';
    }

    $number1 = 5;
    for ($i = 1; $i <= 10; $i++) {
        $result=$number1*$i;
        echo "$number1 x $i = $result";
        echo '<br>';
    }