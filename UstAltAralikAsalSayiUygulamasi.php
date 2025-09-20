<?php
// Kullanıcıdan üst limit değerinin alınması
echo "Üst Limit değeri giriniz: ";
$ustLimit = trim(fgets(STDIN));

// Kullanıcıdan alt limit değerinin alınması
echo "Alt Limit değeri giriniz: ";
$altLimit = trim(fgets(STDIN));

// Asal sayıyı kontrol eden fonksiyon
function asal($n) {
    if ($n <= 1) {
        return false;  // 1 ve 0 asal sayılar değil
    }
    
    // Asal sayı hesaplamasının yapılması
    for ($i = 2; $i <= $n / 2; $i++) {  
        if ($n % $i == 0) {
            return false; 
        }
    }
    return true;  // Eğer bölünme yoksa asal sayıdır
}

// Alt limit ve üst limit arasındaki asal sayıları yazdırır
for ($i = $altLimit; $i <= $ustLimit; $i++) {
    if (asal($i)) {
        echo $i . "\n";
    }
}
?>
