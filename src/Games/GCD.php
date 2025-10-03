<?php

namespace BrainGames\GCD;

function greatestDivisor(): array
{  
	$a = random_int(0, 20);
    $b = random_int(0, 20);
    
    $ques = "{$a} {$b}";
    
    while(true) {
    	
    	
	    if ($b === 0) {
	    	break;
    	}
	
	$c = $a % $b;
	$a = $b;
	$b = $c;
}

$GCD = $a;

return ["{$ques}", $GCD];

}
