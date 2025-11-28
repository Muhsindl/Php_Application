<?php

// Kaç kişi olacağını al
echo "Kaç kişilik bir liste oluşturmak istersiniz? ";
$kisiSayisi = (int)trim(fgets(STDIN));

// İsimleri diziye kaydet
$kullaniciAdlari = [];
for ($i = 0; $i < $kisiSayisi; $i++) {
    echo "Kişi " . ($i + 1) . " adını giriniz: ";
    $kullaniciAdlari[] = trim(fgets(STDIN));
}

// Girilen isimleri göster
foreach ($kullaniciAdlari as $ad) {
    echo $ad . " ";
}
echo "arasından \n";

// Rastgele bir kişi seç
$randomIndex = rand(0, $kisiSayisi - 1);

// Sonucu yazdır
echo "Rastgele seçilen kişi: " . $kullaniciAdlari[$randomIndex] . "\n";

?>
