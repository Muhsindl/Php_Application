<?php
// Faktöriyel hesaplayan fonksiyon
function fact($n){
    if($n == 0 || $n == 1){
        return 1;
    } else {
        return $n * fact($n - 1);
    }
}

$sayi;
$toplam = 0;
    
// Kullanıcıdan sayı alınması
printf("Lütfen sayı giriniz: ");
$sayi = trim(fgets(STDIN));

// Döngü, sayıya kadar olan her sayıyı işler
for($i = 1; $i <= $sayi; $i++){
    if($i % 2 == 1){  // Eğer i tekse, sayıyı toplama ekliyoruz
        $toplam += $i;
    } else {  // Eğer i çiftse, sayıyı faktöriyelinin bölümüyle farkını alıyoruz
        $toplam -= $i / fact($i);
    }
}

// Sonuç ekrana yazdırılması
printf("İşlem sonucu: %.2f\n", $toplam);
?>
