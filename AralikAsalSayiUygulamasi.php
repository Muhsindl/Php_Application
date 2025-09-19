<?php

// Kullanıcıdan limit değerinin alınması
echo "Limit değeri giriniz: ";
$limit = trim(fgets(STDIN));

// Asal sayıyı kontrol eden fonksiyon
function asal($n) {
    if ($n <= 1) {
        return false;  // 1 ve 0 asal sayılar değil
    }
    
    // Asal sayı hesaplamasının yapılması
    for ($i = 2; $i <= $n/2; $i++) {  
        if ($n % $i == 0) {
            return false; 
        }
    }
    return true;  // Eğer bölünme yoksa asal sayıdır
}

// 1'den belirtilen limite kadar olan asal sayıları yazdırır
for ($i = 2; $i <= $limit; $i++) {
    if (asal($i)) {
        echo $i . "\n";
    }
}

?>
