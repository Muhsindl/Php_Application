<?php

// Kullanıcıdan alt sınır değerinin alınması
echo "Alt sınır giriniz: ";
$altSinir = trim(fgets(STDIN));

// Kullanıcıdan üst sınır değerinin alınması
echo "Üst sınır giriniz: ";
$ustSinir = trim(fgets(STDIN));

// Çarpım tablosu için hesaplama yapılmsı ve ekrana yazdırılması
for ($i = $altSinir; $i < $ustSinir; $i++) {
     echo $altSinir . " x " . $i . " = " . ($altSinir * $i) . "\n";
}
?>
