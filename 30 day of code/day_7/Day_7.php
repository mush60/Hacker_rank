<?php
// Days 7 : Arrays
function myFunc($arr) {
    
    $narr = array_reverse($arr);
    
    // print_r($narr);
    for($i=0; $i<count($narr); $i++) {
        echo $narr[$i]." ";
    }

}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

myFunc($arr);

fclose($stdin);
