<?php

// Kullanıcıdan uzunluk bilgisi alıyoruz.
echo "Uzunluk giriniz: ";
$n = trim(fgets(STDIN)); 

for ($i = 0; $i < $n; $i++) {
    // Boşluk yerleştirir
    for ($j = 0; $j < $i; $j++) {
        echo " ";
    }
    // Yıldız yerleştirir
    for ($k = 0; $k < $n-$i; $k++) {
        echo "*";
    }
    echo "\n";
}
?>
