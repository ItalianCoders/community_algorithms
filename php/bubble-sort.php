<?php

/**
 * Bubble Sort
 * 
 * Bubble Sort is the simplest sorting algorithm that works by repeatedly swapping the adjacent
 * elements if they are in wrong order. 
 * PHP Version
 * 
 */
function bubble_sort(array $array): array
{

    for ($i = 0; $i < count($array); $i++) {
        for (
            $j = 0;
            $j < count($array) - $i - 1;
            $j++
        ) {
            if ($array[$j] > $array[$j + 1]) {
                $tmp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $tmp;
            }
        }
    }
    return $array;
}
