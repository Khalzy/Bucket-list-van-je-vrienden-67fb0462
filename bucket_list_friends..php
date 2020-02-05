<?php

$vcount = readline("Hoe veel vrienden zal ik vragen om hun droom?" . PHP_EOL);
if (is_numeric($vcount)) {
} else {
    echo ("$vcount  is geen getal");
    exit;
};










$bucketlist = [];


for ($i = 0; $i < $vcount; $i++) {
    $line1 = readline("Wat is jou naam? ");
    $line = readline("Wat is jouw droom? ");

    $bucketlist[$line1] = [
        "naam" => $line,

    ];
}

foreach ($bucketlist as $line1 => $value) {
    echo "$line1 heeft dit als droom:  {$value['naam']}" . PHP_EOL;
};
