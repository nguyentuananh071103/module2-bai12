<?php

function selectionSort($list)
{
    for ($i = 0; $i < count($list) - 1; $i++){
        $min = $i;
        for ($j = $i+ 1; $j < count($list); $j++){
            if ($list[$j] < $list[$min]){
                $min = $j;
            }
        }
        $list = swapPositions($list, $i, $min);
    }
    return $list;
}

function swapPositions($data, $left, $right)
{
    $backupOldDataRightValue = $data[$right];
    $data[$right] = $data[$left];
    $data[$left] = $backupOldDataRightValue;
    return $data;
}
$myArray = [1, 9, 4.5, 6.6, 5.7, -4.5];
echo "Original Array :\n";
echo implode(', ', $myArray);
echo "<br>";
echo "\nSorted Array :\n";
echo implode(', ', selectionSort($myArray));