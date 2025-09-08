<?php
// Kullanıcıdan x1 değerinin alınması
printf("Lütfen x1 değeri giriniz: ");
$x1 = trim(fgets(STDIN));

// Kullanıcıdan x2 değerinin alınması
printf("Lütfen x2 değeri giriniz: ");
$x2 = trim(fgets(STDIN));

// Kullanıcıdan y1 değerinin alınması
printf("Lütfen y1 değeri giriniz: ");
$y1 = trim(fgets(STDIN));

// Kullanıcıdan y2 değerinin alınması
printf("Lütfen y2 değeri giriniz: ");
$y2 = trim(fgets(STDIN));

// Uzaklık hesaplama işlemi
$hesap = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
printf("Sonuç: %f\n", $hesap);
?>
