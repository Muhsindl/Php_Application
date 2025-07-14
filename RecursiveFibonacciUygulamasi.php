<?php

// Kullanıcıdan bir sayı alıyoruz
echo "Lütfen sayıyı giriniz: ";
$sayi = trim(fgets(STDIN)); 

// Kullanıcının girdiği sayının Fibonacci karşılığını ekrana yazdırma
echo "Fibonacci karşılığı: " . recursive_fibo($sayi);

// Fibonacci hesaplayan fonksiyon
function recursive_fibo($n) {
    // Eğer sayı 0 veya 1 ise, Fibonacci 0 ve 1'dir
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        // Diğer durumlarda, Fibonacci n-1 ve n-2'nin toplamıdır
        return recursive_fibo($n - 1) + recursive_fibo($n - 2);
    }
}
