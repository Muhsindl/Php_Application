<?php
    
    // Recursive faktoriyel metodu
    function fact($n){
        if($n == 1 || $n == 0){
            return 1;
        } else {
            return $n * fact($n - 1);
        }
    }

    // Kullanıcıdan sayının alınması
    printf("Lütfen sayı giriniz: ");
    $sayi = trim(fgets(STDIN));
    
    // Kullanıcıdan sınır değerinin alınması
    printf("Lütfen sınır değeri giriniz: ");
    $sinir = trim(fgets(STDIN));
    
    $result = 0;
    
    // Kullanıcıdan alınan sayı ve sınır değerinin karşılaştırılması ve gerekli işlemlerin yapılması
    if ($sayi > $sinir) {
        $result = fact($sayi);
    } else if ($sayi == $sinir) {
        $result = $sayi;
    } else {
        $result = $sayi * $sayi;
    }
    
    // İşlemlerin sonucunun ekrana yazdırılması
    printf("Cevap: %d", $result);
?>
