<?php

// Kullanıcıdan matris boyutunu alıyoruz.
echo "Kare matris için eleman sayısı: ";
$eleman = trim(fgets(STDIN)); 

// Boş bir dizi oluşturuyoruz.
$dizi = array(); 

for ($i = 0; $i < $eleman; $i++) {
    for ($j = 0; $j < $eleman; $j++) {
        // 
        if($i>=$j){
            $dizi[$i][$j] ="*";
        }else{
            // Sol alt köşegen dışı diğer elemanları kullanıcıdan alıyoruz
            echo "Lütfen ${i},${j}'nci elemanı giriniz: "; 
            $dizi[$i][$j] = trim(fgets(STDIN));
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
?>
