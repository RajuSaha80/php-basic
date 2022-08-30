<?php
$i = 1;
/*
do {
    echo $i . ",";
    $i++;
} while ($i <= 9);
echo $i;
*/
$c = 0;
do {
    $c = +$i;
    echo $i . ",";
    $i++;
} while ($i <= 9);
echo $c + 1;
