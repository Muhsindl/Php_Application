<?php

// Kullanıcıdan matris boyutunu alıyoruz.
echo "Kare matris için eleman sayısı: ";
$eleman = trim(fgets(STDIN)); 

// Boş bir dizi oluşturuyoruz.
$dizi = array(); 
$toplam = 0;

for ($i = 0; $i < $eleman; $i++) {
    for ($j = 0; $j < $eleman; $j++) {
        echo "Lütfen ${i},${j}'nci elemanı giriniz: ";
        $dizi[$i][$j] = trim(fgets(STDIN));
        
        // Sağ üst üçgende yer alan elemanlar toplama ekleniyor
        if ($i<$j) {
            $toplam += $dizi[$i][$j];
        }
    }
}

// Matrisin tüm elemanlarını yazdırıyoruz.
echo "Girilen kare matris: \n";
for ($i = 0; $i < $eleman; $i++) {
    for ($j = 0; $j < $eleman; $j++) {
        echo $dizi[$i][$j] . "\t";
    }
    echo "\n";
}

// Sağ üst üçgen şeklinde yer alan elemanların toplamını yazdırıyoruz.
echo "Sağ üst üçgen şeklindeki elemanların toplamı: " . $toplam . "\n";
?>
