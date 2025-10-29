<?php

function intSequence($first, $last) {
    for ($i = $first; $i <= $last; $i++) {
        echo $i;
    }
}

intSequence(5, 8);
intSequence(1, 10);
intSequence(7, 16);