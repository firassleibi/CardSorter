# Boarding Cards Sorter

This Library Allows you to sort any Boarding Cards provided as an Array and give you a sorted array as an output.


### Installing

Please clone this project or Download the respiratory.

## Running the tests

To test this project you can run this command line:

```
php Test.php
```

Or you can test with directly through this URL:

[Test URL](http://firassleibi.com/CardSorter/test.php)

### Including the CardSorter Library

It is quite easy, Just include the Library File in your project:

```
include("Library/CardSorter.php");
```

### Creating the Cards Array

You can create a card array like below:

```
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
```

Array parameters {Number,From,To,Transportation,Seat[Optional],Gate[Optional]}


## Creating the Class object

```
$sorter = new CardSorter($trips);
```

## Calling the Sort Method

```
$sorted = $sorter->sort();
```

## Documentation

You can find in Docs Directory or this link [Documentation](http://firassleibi.com/CardSorter/docs)

## Authors

* **Firassleibi** [Website](http://firassleibi.com)
