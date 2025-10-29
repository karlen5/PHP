<?php

$auto = (object)[
    'marka' => 'Toyota',
    'modelis' => 'Corolla',
    'gads' => 2012
];
echo $auto->marka;

if((2025 - $auto->gads) > 10){
    echo "Auto vecāks par  10 gadiem";
}else{"Auto nav vecāks par 10 gadiem";
}

