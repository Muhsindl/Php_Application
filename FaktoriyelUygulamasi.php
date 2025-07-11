<?php

// Kullanıcıdan sayı alınması
echo "Lütfen faktoriyeli hesaplanacak sayıyı giriniz: ";
$sayi = trim(fgets(STDIN)); // trim kullanılmasının sebebi " 5/" yazılırsa "5/" olarak alır.

// Faktöriyel hesaplama fonksiyonu
function faktoriyel($n) {
    $faktoriyel = 1;
    for ($i = 1; $i <= $n; $i++) {
        $faktoriyel *= $i;
    }
    return $faktoriyel;
}

echo faktoriyel($sayi);
?>
