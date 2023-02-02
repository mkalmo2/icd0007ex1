<?php

$inputFile = fopen("data/temperatures-sample.csv", "r");
$outputFile = fopen("temperatures-filtered.csv", "w");

while(! feof($inputFile)) {
    $dict = fgetcsv($inputFile);

    var_dump($dict[0]);

    // kood tuleb siia
}

fclose($inputFile);
fclose($outputFile);

