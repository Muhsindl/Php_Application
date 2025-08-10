<?php

// Kullanıcıdan kare matrisin boyutunu alıyoruz
echo "Kare matris için eleman sayısını giriniz: ";
$eleman = trim(fgets(STDIN)); 

// Matrisleri saklamak için üç boş dizi oluşturuyoruz
$dizi1 = array(); 
$dizi2 = array(); 
$dizi3 = array();

// İlk matrisin elemanlarını kullanıcıdan alıyoruz.
echo "Birinci matrisin elemanlarını giriniz:\n";
for ($i = 0; $i < $eleman; $i++) {
    for ($j = 0; $j < $eleman; $j++) {
        // Kullanıcıdan her bir elemanı alıyoruz.
        echo "${i},${j} elemanını giriniz: "; 
        $dizi1[$i][$j] = trim(fgets(STDIN));
    }
}

// İkinci matrisin elemanlarını kullanıcıdan alıyoruz.
echo "İkinci matrisin elemanlarını giriniz:\n";
for ($i = 0; $i < $eleman; $i++) {
    for ($j = 0; $j < $eleman; $j++) {
        // Kullanıcıdan her bir elemanı alıyoruz.
        echo "${i},${j} elemanını giriniz: "; 
        $dizi2[$i][$j] = trim(fgets(STDIN));
    }
}

// Matrislerin toplamını hesaplıyoruz ve üçüncü matrise kaydediyoruz.
for ($i = 0; $i < $eleman; $i++) {
    for ($j = 0; $j < $eleman; $j++) {
        // İki matrisin karşılık gelen elemanlarını çarpıyoruz.
        $dizi3[$i][$j] = $dizi1[$i][$j] + $dizi2[$i][$j];
    }
}

// Matrisin çarpımını ekrana yazdırıyoruz.
echo "Girilen matrislerin çarpımı sonucu oluşan matris: \n";
for ($i = 0; $i < $eleman; $i++) {
    for ($j = 0; $j < $eleman; $j++) {
        echo $dizi3[$i][$j] . " "; // Her bir elemanı ekrana yazdırıyoruz.
    }
    echo "\n";
}

?>
