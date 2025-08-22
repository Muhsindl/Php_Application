<?php
// Kullanıcıdan ana para miktarının alınması
echo "Ana para miktarı giriniz: ";
$anaPara=trim(fgets(STDIN));

// Kullanıcıdan zamanın (ay cinsinden) alınması
echo "Zaman(Ay) giriniz: ";
$zamanAy=trim(fgets(STDIN));

// Kullanıcıdan faiz oranının (yüzde olarak) alınması
echo "Faiz oranı (%yüzde) giriniz: ";
$faizOrani=trim(fgets(STDIN));

//Faiz miktarının hesaplatılması
$faizMiktari=($anaPara*$zamanAy*$faizOrani)/100;
// Faiz miktarının ekranda gösterilmesi
echo "Basit faiz hesabı ile hesaplanan faiz miktarı: ".$faizMiktari;

echo "\n";

// Birleşik faiz miktarının ekranda gösterilmesi
echo "Toplam para: ".($anaPara+$faizMiktari);
?>
