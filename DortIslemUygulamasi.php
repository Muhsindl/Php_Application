<?php

// Kullanıcıdan sayıları alalım
echo "Birinci Sayı giriniz: ";
$n = trim(fgets(STDIN));

echo "İkinci Sayı giriniz: ";
$m = trim(fgets(STDIN));

// Fonksiyonları tanımlayalım
function fonk($bir, $iki, $islem) {
    switch ($islem) {
        case "toplama":
            return $bir + $iki;
        case "cikarma":
            return $bir - $iki;
        case "carpma":
            return $bir * $iki;
        case "bolme":
            // Bölme işleminde sıfıra bölme hatasını kontrol edelim
            if ($iki == 0) {
                return "Hata: Bir sayıyı sıfıra bölemezsiniz!";
            } else {
                return $bir / $iki;
            }
        default:
            return "Geçersiz işlem!";
    }
}

// Kullanıcıdan işlem türünü alalım
echo "Yapmak istediğiniz işlemi seçin (toplama, cikarma, carpma, bolme): ";
$islem = trim(fgets(STDIN));

// Sonucu hesapla ve yazdır
$sonuc = fonk($n, $m, $islem);
echo "Sonuç: $sonuc\n";

?>
