<?php

// Kullanıcıdan eleman bilgisi alıyoruz.
echo "Eleman giriniz: ";
$n = trim(fgets(STDIN)); 
$sayac=0;

for ($i = 2; $i < $n; $i++) {
    if($n%$i==0){
        $sayac=1;
    }
}

if($sayac==0){
    echo "Asal Sayıdır";
}else{
    echo "Asal Sayı Değildir";
}

?>
