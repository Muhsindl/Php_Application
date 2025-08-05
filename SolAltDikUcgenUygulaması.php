<?php

// Kullanıcıdan uzunluk bilgisi alıyoruz.
echo "Uzunkuk giriniz: ";
$n = trim(fgets(STDIN)); 

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $i+1; $j++) {
        echo "*";
    }
    echo "\n";
}

?>
