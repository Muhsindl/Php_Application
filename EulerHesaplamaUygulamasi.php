<?php

function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo "Hesaplanacak sayı giriniz: ";
$n = trim(fgets(STDIN));

$hesap = 0;

for ($i = 0; $i < $n; $i++) {
    $hesap += $i / factorial($i);
}

echo "Euler Hesabı: " . $hesap . PHP_EOL;

?>
