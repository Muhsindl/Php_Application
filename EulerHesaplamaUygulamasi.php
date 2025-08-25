<?php

// Recursive faktoriyel metodu
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Kullanıcıdan sayı alınması
echo "Hesaplanacak sayı giriniz: ";
$n = trim(fgets(STDIN));

$hesap = 0;

// Kullanıcıdan alınan sayının euler hesaplamasının yapılması
for ($i = 0; $i < $n; $i++) {
    $hesap += $i / factorial($i);
}

// Euler hesaplamasının ekrana yazdırılması
echo "Euler Hesabı: " . $hesap;

?>
