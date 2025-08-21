<?php

// Kullanıcıdan sınır değerinin alınması
echo "Sınır değeri giriniz: ";
$sinir = trim(fgets(STDIN));

// Fibonacci sayı dizgisi için ilk değerlerin tanımlanması
$n1 = 0;
$n2 = 1;

// Eğer sınır değeri 2'den büyük ise fibonacci döngüsüne giriyor
if($sinir>=2){

// İlk değerlerin ekrana yazdırılması
echo $n1 . "-" . $n2;

// Girilen sınır değerine göre fibonacci hesaplamasının yapılması
for ($i = 2; $i < $sinir; $i++) {
    $n3 = $n1 + $n2;
    echo "-" . $n3;
    $n1 = $n2;
    $n2 = $n3;
}
}else{ // Sınır değeri ikiden küçük ise 0 yazdırıyor.
    echo 0;
}

?>
