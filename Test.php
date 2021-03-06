<?php
/**
 * 
 * Test Card Sorter
 * @author      Firas Sleibi
 * @version     v.1.0 (01/02/2018)
 * @copyright   Copyright (c) 2018, Firas Sleibi
 * 
 */

/**
 * Include CardSorter Class
 */
 
include("Library/CardSorter.php");

/**
 * Unsorted Cards Array
 * Array accepted parameters [Number - From - To - Transportation - Seat(Optional) - Gate(Optional)]
 *
 */
$trips = array(
        array(
            'Number' => "401",
            'From' => 'C',
            'To' => 'D',
            'Transportation' => 'Bus',
        ),
        array(
            'Number' => "33A",
            'From' => 'D',
            'To' => 'E',
            'Transportation' => 'Bus',
        ),
        array(
            'Number' => "55B",
            'From' => 'A',
            'To' => 'B',
            'Transportation' => 'Train',
        ),
        array(
            'Number' => "606",
            'From' => 'B',
            'To' => 'C',
            'Transportation' => 'Plane',
            'Seat' => '44',
            'Gate' => 'A',
        ),
    );



// Create new Object of Class CardSorter and pass the unsorted cards array
$sorter = new CardSorter($trips);

// Sort the array and store the sorted array
$sorted = $sorter->sort();

// Print sorted array

echo "<br/><br/><br/>Sorted Array Dump:<br/><br/>";
var_dump($sorted);

?>
