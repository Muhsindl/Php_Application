<?php

// Kullanıcıdan bir sayı alıyoruz
echo "Lütfen sayıyı giriniz: ";
$sayi = trim(fgets(STDIN)); 

// Kullanıcının girdiği sayının faktoriyelini ekrana yazdırma
echo "Faktoriyel: " . recursive_fact($sayi);


function recursive_fact($n) {
    // Eğer sayı 0 veya 1 ise, faktoriyel 1'dir
    if ($n == 1 || $n == 0) {
        return 1;
    } else {
        // Eğer sayı 1'den büyükse, faktöriyel hesaplanmaya devam edilir
        return $n * recursive_fact($n - 1);
    }
}
