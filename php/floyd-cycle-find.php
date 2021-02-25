<?php

/**
 * Cycle Find Algorithm
 * 
 * Given an array of values tells if there's a cycle in it by
 * using the known Robert W. Floyd's tortoise and hare algorithm
 * Cycle finding is the algorithmic problem of finding a cycle 
 * in a sequence of iterated function values. 
 *
 * @param array $sequence an indexed array of values
 * @return bool true if a cycle is detected, false otherwise
 */
function floyd_cycle_find(array $sequence): bool 
{
    $tortoise = 0;
    $hare = 0;
    $length = count($sequence);
 
    while (isset($sequence[++$hare])) {
        if ($sequence[$tortoise] === $sequence[$hare]) {
            return true;
        }
        
        ++$tortoise;
        ++$hare;
        
        if ($hare >= $length) {
            $hare -= $length-1;
        }
    }
    
    return false;
}