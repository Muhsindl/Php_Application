<?php

// Kullanıcıdan eleman sayısının alınması
echo "Lütfen eleman sayısı giriniz: ";
$elemanSayisi=trim(fgets(STDIN));

// Boş bir dizi oluşturulması
$arr1=[];
$arr2=[];

// Toplamları atamak için boş bir dizi oluşturulur.
$toplam=[];

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

// Dizilerin toplamlarının atanması
for ($i = 0; $i <$elemanSayisi; $i++) {
     $toplam[$i]=$arr1[$i]+$arr2[$i];
}

echo "============= Toplam Sonucu =============\n";
// Dizide ki toplam elemanlarının ekrana yazdırılması
for ($i = 0; $i < $elemanSayisi; $i++) {
     echo $toplam[$i];
     echo(" |-+-| ");
}

?>
