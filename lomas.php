<?php

$biedri = [
    (object)[ 'vards' => 'Jānis',   'uzvards' => 'Kalniņš',  'loma' => 'leader', 'stundas' => 25 ],
    (object)[ 'vards' => 'Līga',    'uzvards' => 'Ozoliņa',  'loma' => 'leader', 'stundas' => 30 ],
    (object)[ 'vards' => 'Mārtiņš', 'uzvards' => 'Bērziņš',  'loma' => 'member', 'stundas' => 18 ],
    (object)[ 'vards' => 'Elīna',   'uzvards' => 'Liepa',    'loma' => 'member', 'stundas' => 22 ],
    (object)[ 'vards' => 'Kristaps','uzvards' => 'Ābols',    'loma' => 'member', 'stundas' => 15 ],
    (object)[ 'vards' => 'Zane',    'uzvards' => 'Lūsēna',   'loma' => 'member', 'stundas' => 20 ],
    (object)[ 'vards' => 'Andris',  'uzvards' => 'Krastiņš', 'loma' => 'member', 'stundas' => 10 ]
];


echo "=== Vadītāji ===\n";
foreach ($biedri as $biedrs) {
    if ($biedrs->loma === 'leader') {
        echo $biedrs->vards . " " . $biedrs->uzvards . "\n";
    }
}


$kopaStundas = 0;
foreach ($biedri as $biedrs) {
    $kopaStundas += $biedrs->stundas;
}

echo "\n=== Kopējais brīvprātīgo stundu skaits ===\n";
echo $kopaStundas . " stundas\n";


echo "\n=== Balva “Zvaigžņu brīvprātīgais” ===\n";
$balvasSaņēmēji = [];

foreach ($biedri as $biedrs) {
    if ($biedrs->loma !== 'leader' && $biedrs->stundas >= 20) {
        $balvasSaņēmēji[] = $biedrs;
    }
}

if (count($balvasSaņēmēji) > 0) {
    foreach ($balvasSaņēmēji as $biedrs) {
        echo $biedrs->vards . " " . $biedrs->uzvards . "\n";
    }
} else {
    echo "Šomēnes neviens biedrs nesaņem balvu.\n";
}
?>
