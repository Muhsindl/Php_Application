<?php

// Kullanıcıdan eleman sayısının alınması
echo "Lütfen eleman sayısı giriniz: ";
$elemanSayisi=trim(fgets(STDIN));

// Boş bir dizi oluşturulması
$arr1=[];
$arr2=[];

// Farkları atamak için boş bir dizi oluşturulur.
$cikarma=[];

echo "============= Birinci Dizi İçin Eleman Eklenmesi =============\n";
// Birinci dizi için kullanıcıdan elemanların alınması
for ($i = 0; $i <$elemanSayisi; $i++) {
     echo "${i} nci elemanı giriniz: ";
     $arr1[$i]=trim(fgets(STDIN));
}

echo "============= İkinci Dizi İçin Eleman Eklenmesi =============\n";
// İkinci dizi için kullanıcıdan elemanların alınması
for ($i = 0; $i <$elemanSayisi; $i++) {
     echo "${i} nci elemanı giriniz: ";
     $arr2[$i]=trim(fgets(STDIN));
}

// Dizilerin farklarının atanması
for ($i = 0; $i <$elemanSayisi; $i++) {
     $cikarma[$i]=$arr1[$i]-$arr2[$i];
}

echo "============= Toplam Sonucu =============\n";
// Dizide ki farkı alınan elemanlarının ekrana yazdırılması
for ($i = 0; $i < $elemanSayisi; $i++) {
     echo $cikarma[$i];
     echo(" |-+-| ");
}

?>
