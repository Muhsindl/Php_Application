<?php
// Mükemmel Sayı örnekler: 6 - 28 - 96 - 8128

// Kullanıcıdan sayı alınması
echo "Mükemmel sayı mı diye kontrol edilecek sayıyı giriniz: ";
$n = (int)trim(fgets(STDIN));

// Alınan sayının mükemmel sayı olup olmadığının tespit edilmesi
$toplam = 0;
for ($i = 1; $i < $n; $i++) {
    if ($n % $i == 0) {
        $toplam += $i;
    }
}

// Sayı mükemmel veya mükemmel değildir diye kullanıcıya çıktı verilmesi
if ($toplam == $n) {
    echo "Mükemmel Sayıdır\n";
} else {
    echo "Mükemmel Sayı değildir\n";
}
?>
