<?php

namespace BrainGames\Prime;

function isSimple($number)
{
    if ($number < 2) {
        return 'no'; 
    } elseif ($number == 2) {
        return 'yes';
    } elseif ($number % 2 === 0) {
        return 'no';
    }


    $root = floor(sqrt($number));
    
    if ($root >= 3) {
        
        $divisors = [];
        $firstElement = 3;
        
        while ($firstElement <= $root) {
        	$divisors[] = $firstElement;
        	$step = 2;
        	$firstElement = $firstElement + $step;
        }
        
        foreach ($divisors as $divisor) {
            if ($number % $divisor === 0) {
            return 'no';
            }
        } 
    }
    
    return 'yes';
}

function calcPrime()
{
    $numberQues = random_int(1, 100);

    $corrAnswer = isSimple($numberQues);

    return ["{$numberQues}", $corrAnswer];
}