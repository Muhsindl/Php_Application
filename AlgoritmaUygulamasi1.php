<?php
// Kullanıcıdan sayı değerinin alınması
echo "Lütfen sayı giriniz: ";
$sayi = floatval(trim(fgets(STDIN)));

// Kullanıcıdan ssınır değerinin alınması
echo "Lütfen sınır giriniz: ";
$sinir = floatval(trim(fgets(STDIN)));

// Kullanıcıdan katsayı değerinin alınması
echo "Lütfen katsayı değeri giriniz: ";
$katSayi = floatval(trim(fgets(STDIN)));


// Kullanıcıdan alınan değerlerin karşılaştırmasının yapılması
if ($sayi > $sinir) {
    $result = $katSayi * $sayi;
} else if ($sayi == $sinir) {
    $result = $sayi;
} else {
    $result = $sayi / $katSayi;
}

// Sonucu ekrana yazdırma
printf("Cevap: %.2f\n", $result);
