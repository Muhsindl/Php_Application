<?php

// Kullanıcıdan sayıları alalım
echo "Kaça kadar olmasını istiyorsunuz? ";
$n = trim(fgets(STDIN));

// İkiz asal sayıları bulalım
for ($i = 2; $i <= $n - 2; $i++) {
    if (asalmi($i) && asalmi($i + 2)) {
        echo "İkiz asal sayılardır ($i, " . ($i + 2) . ")\n";
    }
}

// Girilen sayının asal olup olmadığını kontrol et
if (asalmi($n)) {
    echo "$n bir asal sayıdır.\n";
} else {
    echo "$n bir asal sayı değildir.\n";
}

// Asal sayı kontrol fonksiyonu
function asalmi($n) {
    if ($n <= 1) {
        return false;  // 1 ve daha küçük sayılar asal değildir
    }

    for ($i = 2; $i <= sqrt($n); $i++) {  // Optimizasyon: sadece kareköküne kadar kontrol et
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
?>
