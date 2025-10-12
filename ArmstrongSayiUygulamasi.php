<?php

// Kullanıcıdan sayı alınması
echo "Bir sayı girin: ";
$sayi = (int) fgets(STDIN);

// Sayıyı kopyalayarak orijinal sayıyı saklıyoruz
$orijinalSayi = $sayi;

$toplam = 0;
$basamakSayisi = strlen((string)$sayi);

// While döngüsü ile sayının her basamağını kontrol ediyoruz
while ($sayi > 0) {
    // Son basamağı alıyoruz
    $basamak = $sayi % 10;

    // Basamağın 'basamakSayisi' kuvvetini alıp toplamda biriktiriyoruz
    $toplam += pow($basamak, $basamakSayisi);

    // Sayıyı 10'a bölerek bir sonraki basamağa geçiyoruz
    $sayi = (int)($sayi / 10);
}

// Eğer toplam orijinal sayıya eşitse, sayı Armstrong sayısıdır
if ($toplam == $orijinalSayi) {
    echo "$orijinalSayi bir Armstrong sayısıdır.\n";
} else {
    echo "$orijinalSayi bir Armstrong sayısı değildir.\n";
}

?>
