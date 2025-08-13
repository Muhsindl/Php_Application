<?php

// Kullanıcıdan uzunluk bilgisi alıyoruz.
echo "Uzunluk giriniz: ";
$n = trim(fgets(STDIN)); 

for ($i = 0; $i < $n; $i++) {
    // Boşluk yerleştirir
    for ($j = 0; $j < $n-($i+1); $j++) {
        echo " ";
    }
    // Yıldız yerleştirir
    for ($k = 0; $k < (2*$i)+1; $k++) {
        echo "*";
    }
    echo "\n";
}
?>
