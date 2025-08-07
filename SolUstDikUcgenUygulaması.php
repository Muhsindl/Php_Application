<?php

// Kullanıcıdan uzunluk bilgisi alıyoruz.
echo "Uzunluk giriniz: ";
$n = trim(fgets(STDIN)); 

for ($i = 0; $i < $n; $i++) {
  // Yıldız yerleştirir
    for ($j = 0; $j < $n-$i; $j++) {
        echo "*";
    }
    echo "\n";
}
?>
