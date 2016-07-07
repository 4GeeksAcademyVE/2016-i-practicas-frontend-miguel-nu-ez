<?php

function bubble_sort($arr) {
    $size = count($arr);
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-1-$i; $j++) {
            if ($arr[$j+1] < $arr[$j]) {
                swap($arr, $j, $j+1);
            }
        }
    }
    return $arr;
}

function swap(&$arr, $a, $b) {
	$tmp = $arr[$a];
	$arr[$a] = $arr[$b];
	$arr[$b] = $tmp;
}

$arr = ["Dia","Fuente","Suerte","Papa","Papilla","Judio","Duende","Puente"];

print("Before sorting")."\n";
print_r($arr);
echo "\n";
$arr2 = bubble_sort($arr);
print("After sorting by using bubble sort")."\n";
print_r($arr2);
echo "\n";
print("Before sorting")."\n";
print_r($arr);

?>