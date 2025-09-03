<?php

// Kullanıcıdan eleman sayısının alınması
echo "Lütfen eleman sayısı giriniz: ";
$elemanSayisi=trim(fgets(STDIN));

// Boş bir dizi oluşturulması
$arr1=[];
$arr2=[];

// Çarpımlarını atamak için boş bir dizi oluşturulur.
$carp=[];

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
     $carp[$i]=$arr1[$i]*$arr2[$i];
}

echo "============= Çarpım Sonucu =============\n";
// Dizide ki çarpma işlemine uğramış elemanlarının ekrana yazdırılması
for ($i = 0; $i < $elemanSayisi; $i++) {
     echo $carp[$i];
     echo(" |-+-| ");
}

?>
