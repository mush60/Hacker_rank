<?php
// Day 6 Let's Review
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$n = fgets($_fp);
$ars = array();
$sar = array();
for($i=0; $i<$n; $i++) {
    $s = fgets($_fp);
    $ns1 = '';
    $ns2 = '';
    $ars = str_split(trim($s));
    for($j=0; $j<count($ars); $j++) {
        if($j % 2 != 0){
            $ns1 .= $ars[$j];
        }
        else {
            $ns2 .= $ars[$j];
        }   
    }
    echo $ns2." ".$ns1."\n";   
}
?>