<?php

/**
 * Miracle Sort
 *
 * This kind of sort requires a miracle: The algorithm keep checking the array
 * until it is (magically) sorted.
 *
 * @param  array $array
 * @return array
 */
function miracleSort(array $array) : array
{
    do {
        $sorted = true;

        /*
         * Check if the array is sorted...
         */
        for($i = 1; $i < count($array); $i++) {
            if($array[$i - 1] > $array[$i]) {
                $sorted = false;
                break;
            }
        }

        /*
         * Check if the miracle took place...
         */
    } while(!$sorted);

    /*
     * Miracle!!!
     * (or it was already sorted at the beginning)
     */
    return $array;
}