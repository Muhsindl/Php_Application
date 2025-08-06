<?php

// Kullanıcıdan uzunluk bilgisi alıyoruz.
echo "Uzunluk giriniz: ";
$n = trim(fgets(STDIN)); 

for ($i = 0; $i < $n; $i++) {
  // Boşluk yerleştirir
    for ($j = 0; $j < $n-$i; $j++) {
        echo " ";
    }
  // Yıldız yerleştirir
    for ($j = 0; $j < $i+1; $j++) {
        echo "*";
    }
    echo "\n";
}
?>
