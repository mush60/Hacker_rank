<?php

$stdin = fopen("php://stdin", "r");

$n = fgets($stdin);

for($i=1; $i<=10; $i++) {
    echo $n." x ".$i." = ".$i*$n."\n";
}

fscanf($stdin, "%d\n", $n);


fclose($stdin);
