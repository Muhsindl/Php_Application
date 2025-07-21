<?php

// Kullanıcıdan eleman sayısının alınması
echo "Lütfen eleman sayısı giriniz: ";
$elemanSayisi=trim(fgets(STDIN));

// Boş bir dizi oluşturulması
$arr=[];

// Diziye elemanların eklenmesi
for ($i = 0; $i <$elemanSayisi; $i++) {
     echo "${i} nci elemanı giriniz: ";
     $arr[$i]=trim(fgets(STDIN));
}

// Dizi elemanlarının ekrana yazdırılması
for ($i = 0; $i < $elemanSayisi; $i++) {
     echo $arr[$i];
     echo(" |-+-| ");
}

?>
