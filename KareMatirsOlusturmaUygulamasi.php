<?php

// Kullanıcıdan matris boyutunu alıyoruz.
echo "Kare matris için eleman sayısı: ";
$eleman = trim(fgets(STDIN)); 

// Boş bir dizi oluşturuyoruz.
$dizi = array(); 

for ($i = 0; $i < $eleman; $i++) {
    for ($j = 0; $j < $eleman; $j++) {
        // Kullanıcıdan her bir elemanı alıyoruz.
        echo "Lütfen ${i},${j}'nci elemanı giriniz: "; 
        $dizi[$i][$j] = trim(fgets(STDIN));
    }
}

// Matrisin tüm elemanlarını yazdırıyoruz.
echo "Girilen kare matris: \n";
for ($i = 0; $i < $eleman; $i++) {
    for ($j = 0; $j < $eleman; $j++) {
        echo $dizi[$i][$j] . " "; // Her bir elemanı ekrana yazdırıyoruz.
    }
    echo "\n";
}
?>
