<?php

/*
Bubble sort is a simple algorithm that iteratively swaps adjacent elements until the list is sorted.
The largest element "bubbles up" to its correct position. It has O(n^2) time complexity and is
used for small datasets or education.

The code below is designed to show my skills at understanding the basics in algorithms
and OOO (object-oriented programming).

Arthur Holmes
3/10/2023
11:37PM EST
ArthurHolmes.com
PHP 8.2 | PHPSTORM
https://github.com/ArthurLHolmes
*/

namespace app\algorithms;

class BubbleSort
{

    public array $submittedArray;

    public function setSubmittedArray(array $submittedArray): void
    {
        $this->submittedArray = $submittedArray;
    }



    public function arrayProcessor(): array

    {

        $loopLimit = count($this->submittedArray);

        for($i = 0; $i < $loopLimit; $i++)
        {

            for($z = 1; $z < $loopLimit; $z++)
            {
                //stores the second number to be compared. Starts at array element 1
                $holder1 = $this->submittedArray[$z];

                //stores the first number to be compared. Starts at array element 0
                $holder2 = $this->submittedArray[$z - 1];


                //checks to see which number is bigger, the goal
                //being to move the bigger number forward
                //until all numbers are in order, largest to the smallest
                //swap places
                if ($holder1 > $holder2)

                {

                    $this->submittedArray[$z] = $holder2;
                    $this->submittedArray[$z - 1] = $holder1;


                }

            }

        }




        return $this->submittedArray;
    }




}


//create new object
$userArray = new BubbleSort();

$randomArray = [23, 39, 17, 6, 89, 3, 54, 48, 2847, 4, 40, 62, 77, 36, 328];

//pass the array to the class, setting its property
$userArray->setSubmittedArray($randomArray);

//show the array
print_r($userArray->arrayProcessor());

