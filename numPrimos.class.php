<?php
    $max = 2147483647;
    
    $primesFound = 0;
    $probablePrimes = 0;

    for ($x = 1; $x <= $max; $x++) {
        $primeStatus = gmp_prob_prime($x);
        if ($primeStatus == 1) {
            $probablePrimes++;
        } else if ($primeStatus == 2) {
            $primesFound++;
        }
    }
    echo "Total primes found: " . $primesFound . " between 1 and " . $max . ". Probable primes in this interval: " . $probablePrimes;
?>
