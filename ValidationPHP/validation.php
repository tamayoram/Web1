<?php

$myString = "abc12390@!##p";
$myArray = array('@', '!', '#');

//print_r($myArray);


function validation($variable, $specialCharacters)
{
    $count = 0;
    
    for ($x = 0; $x < strlen($variable); $x++) {
        //echo $myString[$x];

        for ($y = 0; $y < count($specialCharacters); $y++) {
            //echo $myArray[$y];

            if ($variable[$x] == $specialCharacters[$y]) {

                $count = $count + 1;
            }
        }
    }

    return $count;
}

if (validation($myString,$myArray)!=0){

    echo "invalid";
}





