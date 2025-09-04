<?php

// Kullanıcıdan eleman sayısının alınması
echo "Lütfen eleman sayısı giriniz: ";
$elemanSayisi=trim(fgets(STDIN));

// Boş dizi oluşturulması
$arr1=[];
$arr2=[];

// Bölümleri atamak için boş bir dizi oluşturulur.
$bolme=[];

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

// Dizilerin bölümlerinin atanması
for ($i = 0; $i <$elemanSayisi; $i++) {
     $bolme[$i]=$arr1[$i]/$arr2[$i];
}

echo "============= Bölme (Birinci Dizi /İkinci Dizi) Sonucu =============\n";
// Dizide ki bölme işlemine uğramış elemanlarının ekrana yazdırılması
for ($i = 0; $i < $elemanSayisi; $i++) {
     echo $bolme[$i];
     echo(" |-+-| ");
}

?>
