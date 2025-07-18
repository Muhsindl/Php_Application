<?php
// 1 + 2/2! + 3 + 4/4! ...


// Faktöriyel hesaplayan fonksiyon
function fact($n) {
    if($n == 0 || $n == 1) {
        return 1;  // 0! ve 1! her ikisi de 1'dir
    } else {
        return $n * fact($n - 1);  // Rekürsif faktöriyel hesaplama
    }
}

// Kullanıcıdan sayı alınması
printf("Lütfen sayı giriniz: ");
$sayi = trim(fgets(STDIN));

// Başlangıçta toplamı sıfırlıyoruz
$toplam = 0;

for($i = 1; $i <= $sayi; $i++) {
    if($i % 2 == 0) {
        // Eğer i çiftse, sayıyı direkt toplama ekliyoruz
        $toplam += $i;  
    } else {
        // Eğer i tekse, sayıyı faktöriyelinin bölümüyle toplama ekliyoruz
        $toplam += $i / fact($i);
    }
}

// Sonuç ekrana yazdırılır
printf("İşlem sonucu: %.2f\n", $toplam);

?>
